<?php
/**
*
* Authorized for urls extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @copyright (c) 2018, kasimi, https://kasimi.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\authorizedforurls\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
	/** @var \phpbb\auth\auth */
	protected $auth;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\user */
	protected $user;

	public function __construct(
		\phpbb\auth\auth $auth,
		\phpbb\config\config $config,
		\phpbb\config\db_text $config_text,
		\phpbb\user $user,
		\rmcgirr83\topicdescription\event\listener $topicdescription = null)
	{
		$this->auth = $auth;
		$this->config = $config;
		$this->config_text = $config_text;
		$this->user = $user;
		$this->topicdescription = $topicdescription;
	}

	/**
	* Assign functions defined in this class to event listeners in the core
	*
	* @return array
	* @static
	* @access public
	*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.permissions'						=> 'add_permission',
			'core.posting_modify_message_text'		=> 'posting_modify_message_text',
			'core.posting_modify_submit_post_before'	=> 'posting_modify_submit_post_before',
			'core.ucp_profile_modify_signature'		=> 'modify_signature',
			'core.ucp_pm_compose_modify_parse_before'	=> 'modify_message_text',
			// for topic description extension
			'core.posting_modify_submission_errors' => 'modify_submission_errors',
		);
	}

	/**
	* Add administrative permissions to manage forums
	*
	* @param object $event The event object
	* @return null
	* @access public
	*/
	public function add_permission($event)
	{
		$permissions = $event['permissions'];
		$permissions['u_post_url'] = array('lang' => 'ACL_U_POST_URL', 'cat' => 'post');
		$event['permissions'] = $permissions;
	}

	public function posting_modify_message_text($event)
	{
		if ($event['submit'] || $event['preview'])
		{
			$message = $event['message_parser'];
			$check_text = $this->check_text($message->message);
			$check_subject = $this->check_text($event['post_data']['post_subject']);
			if ((!empty($check_text) || !empty($check_subject)) && $this->config['authforurl_deny_post'])
			{
				$message->warn_msg[] = (!empty($check_text)) ? $check_text : $check_subject;
			}
			$event['message_parser'] = $message;
		}
	}

	public function posting_modify_submit_post_before($event)
	{
		$mode = $event['mode'];
		$data = $event['data'];
		$message = $data['message'];
		$check_text = $this->check_text($message);

		if (!empty($check_text) && !$this->config['authforurl_deny_post'])
		{
			if (in_array($mode, array('post','quote','reply')))
			{
				$data['force_visibility'] = $data['force_approved_state'] = ITEM_UNAPPROVED;
			}
			else if ($mode == 'edit')
			{
				$data['force_visibility'] = ITEM_REAPPROVE;
				$data['force_approved_state'] = ITEM_UNAPPROVED;
			}
		}
		$event['data'] = $data;
	}

	public function modify_signature($event)
	{
		if ($event['submit'] || $event['preview'])
		{
			$error = $event['error'];
			$check_text = $this->check_text($event['signature']);
			if (!empty($check_text))
			{
				$error[] = $check_text;
			}
			$event['error'] = $error;
		}
	}

	public function modify_message_text($event)
	{
		if ($event['submit'] || $event['preview'])
		{
			$message = $event['message_parser'];
			$check_text = $this->check_text($message->message);
			if (!empty($check_text))
			{
				$message->warn_msg[] = $check_text;
			}
			$event['message_parser'] = $message;
		}
	}

	public function modify_submission_errors($event)
	{
		$topic_desc = ($this->topicdescription !== null) ? $event['post_data']['topic_desc'] : '';
		if (!empty($topic_desc))
		{
			$error = $event['error'];
			$check_text = $this->check_text($topic_desc);
			if (!empty($check_text))
			{
				if ($this->config['authforurl_deny_post'])
				{
					$error[] = $check_text;
				}
			}
			$event['error'] = $error;
		}
	}

	public function check_text($check_text, $return_lang_args = false)
	{
		if (!$this->auth->acl_get('u_post_url'))
		{
			// The following will allow img bbcode and email links to not be checked per the setting in the ACP
			// eg if $check_email = false, then emails (eg whatever@whatever.com, etc)
			// will not be checked for
			$check_email = $this->config['authforurl_email'];
			$check_img_bbcode = $this->config['authforurl_img_bbcode'];

			$tld_list = $this->config_text->get_array(array(
				'authforurl_tlds',
			));

			//convert the string to an array
			$tld_list = explode(',', trim($tld_list['authforurl_tlds']));

			//convert the array back into a string
			$disallowed_tld = implode('|',$tld_list);

			// thanks for the regex tut A_Jelly_Doughnut!! :)
			// we want emails to show
			if (!$check_email)
			{
				$check_text = preg_replace("#([a-z0-9\-_]+)@(((?:www.)?\b[a-z0-9\-_]+)\.($disallowed_tld)(\.($disallowed_tld))?\b)#i",'',$check_text);
			}
			// we want img bbcode tags to show
			if (!$check_img_bbcode)
			{
				$check_text = preg_replace("/\[img\s*\](.+?)\[\/img\]/i", '',$check_text);
			}
			// we want internal links removed
			$check_text = preg_replace("/{$this->config['cookie_domain']}/", '',$check_text);

			// check the whole darn thang now for any TLD's
			// at least those that >seem< to match from the array
			// and have not been excluded above
			preg_match("#(([a-z0-9\-_]+)@)?([a-z]{3,6}://)?(((?:www.)?\b[a-z0-9\-_]+)\.($disallowed_tld)(\.($disallowed_tld))?\b)#i", $check_text, $match);

			// we have a match..uhoh, someone's being naughty
			// time to slap 'em up side the head
			if (sizeof($match))
			{
				$this->user->add_lang_ext('rmcgirr83/authorizedforurls', 'common');

				$type = '';
				if ($check_img_bbcode)
				{
					$type .= $this->user->lang('AUTHED_IMAGES');
				}
				if ($check_email)
				{
					$type .= (!empty($type)) ? ', ' .  $this->user->lang('AUTHED_EMAIL') : $this->user->lang('AUTHED_EMAIL');
				}
				$type .= (!empty($type)) ? ' ' . $this->user->lang('AUTHED_OR') . ' ' . $this->user->lang('AUTHED_URL') : $this->user->lang('AUTHED_URL');

				if ($return_lang_args)
				{
					return array('URL_UNAUTHED', $type, $match[0]);
				}

				return $this->user->lang('URL_UNAUTHED', $type, $match[0]);
			}
		}

		return false;
	}
}

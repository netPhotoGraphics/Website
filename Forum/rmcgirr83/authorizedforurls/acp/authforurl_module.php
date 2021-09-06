<?php
/**
*
* Authorized for urls extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\authorizedforurls\acp;

class authforurl_module
{
	var $u_action;

	function main($id, $mode)
	{

		global $user, $request, $template;
		global $config, $phpbb_container;

		$user->add_lang_ext('rmcgirr83/authorizedforurls', 'acp_authforurl');
		$this->tpl_name = 'acp_authforurl';
		$this->page_title = $user->lang['AFU_ACP_TITLE'];
		$form_name = 'acp_afu';
		add_form_key($form_name);
		$error = '';

		$config_text = $phpbb_container->get('config_text');

		$authforurl_data = $config_text->get_array(array(
			'authforurl_tlds',
		));

		//convert the string to an array
		$authurl_array = explode(',', trim($authforurl_data['authforurl_tlds']));

		//sort the array
		sort($authurl_array);

		// put the array back into a string
		$tlds = implode(',', $authurl_array);

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key($form_name))
			{
				$error = $user->lang('FORM_INVALID');
			}

			if (empty($error))
			{
				$config->set('authforurl_img_bbcode', $request->variable('authforurl_img_bbcode', false));
				$config->set('authforurl_email', $request->variable('authforurl_email', false));
				$config->set('authforurl_deny_post', $request->variable('authforurl_deny_post', true));
				$authforurl_tlds = $request->variable('authforurl_tlds', '', true);
				$config_text->set_array(array(
					'authforurl_tlds'			=> $authforurl_tlds,
				));

				trigger_error($user->lang['AFU_SAVED'] . adm_back_link($this->u_action));
			}
		}

		$template->assign_vars(array(
			'ERRORS'			=> $error,
			'AFU_BBCODE'		=> $config['authforurl_img_bbcode'],
			'AFU_EMAIL'			=> $config['authforurl_email'],
			'AFU_DENY_POST'		=> $config['authforurl_deny_post'],
			'AFU_TLDS'			=> $tlds,

			'U_ACTION'			=> $this->u_action,
		));
	}
}

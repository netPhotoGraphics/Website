<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\obscurecontactus\acp;

class obscurecontactus_module
{
var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request;
		global $config;

		$this->tpl_name = 'obscurecontactus_module';
		$this->page_title = $user->lang('OBSCURECONTACTUS_CONFIG');
		$form_name = 'obscurecontactus_module';
		add_form_key($form_name);

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('obscurecontactus_module'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('config[email_enable]', $request->variable('config[email_enable]', ''));
			$config->set('contact_admin_form_enable', $request->variable('contact_admin_form_enable', ''));
			$config->set('obscurecontactus_mouseover', $request->variable('obscurecontactus_mouseover', ''));
			$config->set('obscurecontactus_prefix', $request->variable('obscurecontactus_prefix', ''));
			$config->set('obscurecontactus_subject', $request->variable('obscurecontactus_subject', ''));
			$config->set('obscurecontactus_suffix', $request->variable('obscurecontactus_suffix', ''));

			trigger_error($user->lang('OBSCURECONTACTUS_CONFIG_SAVED') . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'EMAIL_ENABLE'					=> $config['email_enable'],
			'CONTACT_ENABLED'				=> $config['contact_admin_form_enable'],
			'OBSCURECONTACTUS_MOUSEOVER'	=> $config['obscurecontactus_mouseover'],
			'OBSCURECONTACTUS_PREFIX'		=> $config['obscurecontactus_prefix'],
			'OBSCURECONTACTUS_SUBJECT'		=> $config['obscurecontactus_subject'],
			'OBSCURECONTACTUS_SUFFIX'		=> $config['obscurecontactus_suffix'],
			'U_ACTION'						=> $this->u_action,
		));
	}
}

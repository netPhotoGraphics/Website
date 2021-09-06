<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\obscurecontactus;

/**
* Extension class for custom enable/disable/purge actions
*/
class ext extends \phpbb\extension\base
{
	/**
	* Enable extension if phpBB version requirement is met
	*
	* @return bool
	* @access public
	*/
	public function is_enableable()
	{
		$enableable = phpbb_version_compare(PHPBB_VERSION, '3.2.0@dev', '>=');
		if (!$enableable)
		{
			$user = $this->container->get('user');
			$user->add_lang_ext('hifikabin/obscurecontactus', 'info_acp_obscurecontactus');
			trigger_error($user->lang('OBSCURECONTACTUS_REQUIRE_3.2.0'), E_USER_WARNING);
		}

		return true;
	}
}

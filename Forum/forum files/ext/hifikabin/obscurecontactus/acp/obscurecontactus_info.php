<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\obscurecontactus\acp;

class obscurecontactus_info
	{
		function module()
	{
		return array(
			'filename'		=> '\hifikabin\obscurecontactus\acp\obscurecontactus_module',
			'title'			=> 'ACP_OBSCURECONTACTUS',
			'modes'			=> array(
				'config'		=> array('title' => 'ACP_OBSCURECONTACTUS_CONFIG', 'auth' => 'ext_hifikabin/obscurecontactus && acl_a_board', 'cat' => array('ACP_OBSCURECONTACTUS')),
			),
		);
	}
}

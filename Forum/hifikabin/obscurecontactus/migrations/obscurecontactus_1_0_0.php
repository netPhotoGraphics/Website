<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\obscurecontactus\migrations;

class obscurecontactus_1_0_0 extends \phpbb\db\migration\migration
{

	public function update_data()
	{
		return array(
		// Add configs
			array('config.add', array('obscurecontactus_mouseover', '')),
			array('config.add', array('obscurecontactus_prefix', '')),
			array('config.add', array('obscurecontactus_subject', '')),
			array('config.add', array('obscurecontactus_suffix', '')),
			array('config.add', array('obscurecontactus_version', '1.0.0_rc')),

			// Add the ACP module
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_OBSCURECONTACTUS')),
			array('module.add', array(
			'acp', 'ACP_OBSCURECONTACTUS', array(
			'module_basename'	=> '\hifikabin\obscurecontactus\acp\obscurecontactus_module',
			'modes'				=> array('main'),
				),
			)),
		);
	}
}

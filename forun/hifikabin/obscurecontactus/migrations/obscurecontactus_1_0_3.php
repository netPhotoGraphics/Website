<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\obscurecontactus\migrations;

class obscurecontactus_1_0_3 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
		{
			return isset($this->config['obscurecontactus_version']) && version_compare($this->config['obscurecontactus_version'], '1.0.3', '>=');
		}
			static public function depends_on()
		{
			return array('\hifikabin\obscurecontactus\migrations\obscurecontactus_1_0_2');
		}
			public function update_data()
		{
			return array(
			// Remove the incorrect ACP module
			array('if', array(
			array('module.exists', array('acp', 'ACP_OBSCURECONTACTUS', 'ACP_OBSCURECONTACTUS_CONFIG')),
			array('module.remove', array('acp', 'ACP_OBSCURECONTACTUS', 'ACP_OBSCURECONTACTUS_CONFIG')),
		)),

			// Add the correct ACP module
			array('module.add', array('acp', 'ACP_OBSCURECONTACTUS', array(
			'module_basename'	=> '\hifikabin\obscurecontactus\acp\obscurecontactus_module',
			'modes'				=> array('config'),
		))),
			//Update Version
			array('config.update', array('obscurecontactus_version', '1.0.3')),
		);
	}
}

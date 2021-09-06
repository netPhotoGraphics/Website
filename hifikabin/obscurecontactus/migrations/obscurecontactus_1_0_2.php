<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace hifikabin\obscurecontactus\migrations;

class obscurecontactus_1_0_2 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\hifikabin\obscurecontactus\migrations\obscurecontactus_1_0_1');
	}

	public function update_data()
	{
		return array(
		array('config.update', array('obscurecontactus_version', '1.0.2')),
		);
	}
}

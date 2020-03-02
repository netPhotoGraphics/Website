<?php
/**
*
* Authorized for urls extension for the phpBB Forum Software package.
*
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace rmcgirr83\authorizedforurls\migrations;

/**
* Migration stage 1: Initial permission
*/
class v_101 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('\rmcgirr83\authorizedforurls\migrations\v_100');
	}

	/**
	* Add or update data in the database
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{
		return array(
			array('config.add', array('authforurl_deny_post', true)),
		);
	}
}

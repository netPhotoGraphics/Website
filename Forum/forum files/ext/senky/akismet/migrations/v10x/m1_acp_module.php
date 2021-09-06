<?php
/**
 *
 * Akismet. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018 Jakub Senko <jakubsenko@gmail.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace senky\akismet\migrations\v10x;

class m1_acp_module extends \phpbb\db\migration\migration
{
	/**
	 * {@inheritDoc}
	 */
	public function effectively_installed()
	{
		$sql = 'SELECT module_id
			FROM ' . $this->table_prefix . "modules
			WHERE module_class = 'acp'
				AND module_langname = 'ACP_AKISMET_TITLE'";
		$result = $this->db->sql_query($sql);
		$module_id = (int) $this->db->sql_fetchfield('module_id');
		$this->db->sql_freeresult($result);
		return $module_id;
	}

	/**
	 * {@inheritDoc}
	 */
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v32x\v321');
	}

	/**
	 * {@inheritDoc}
	 */
	public function update_data()
	{
		return array(
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_AKISMET_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_AKISMET_TITLE',
				array(
					'module_basename' => '\senky\akismet\acp\akismet_module',
					'modes' => array('settings')
				),
			)),
		);
	}
}

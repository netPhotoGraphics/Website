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

/**
* @package module_install
*/
class authforurl_info
{
	function module()
	{
		return [
			'filename'	=> '\rmcgirr83\authorizedforurls\acp\authforurl_module',
			'title'		=> 'AFU_ACP_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> [
				'settings'	=> ['title' => 'AFU_CONFIG', 'auth'	=> 'ext_rmcgirr83/authorizedforurls', 'cat'	=> array('AFU_EXTENSION')],
			],
		];
	}
}

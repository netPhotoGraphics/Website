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
class v_100 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return ['\phpbb\db\migration\data\v310\gold'];
	}

	/**
	* Add or update data in the database
	*
	* @return array Array of table data
	* @access public
	*/
	public function update_data()
	{

		$data[] = ['permission.add', ['u_post_url']];

		$data[] = ['permission.permission_set',['REGISTERED','u_post_url','group']];

		$data[] = ['permission.permission_set',['NEWLY_REGISTERED','u_post_url','group', false]];

		$data[] = ['if', [
			['permission.role_exists', ['ROLE_USER_NEW_MEMBER']],
			['permission.permission_set', ['ROLE_USER_NEW_MEMBER', 'u_post_url', 'role', false]],
		]];

		$role_array = ['ROLE_USER_STANDARD', 'ROLE_USER_FULL', 'ROLE_ADMIN_STANDARD', 'ROLE_ADMIN_FORUM', 'ROLE_ADMIN_FULL', 'ROLE_MOD_STANDARD', 'ROLE_MOD_FULL'];

		foreach ($role_array as $key => $value)
		{
			$data[] = ['if', [
				['permission.role_exists', [$value]],
				['permission.permission_set', [$value,'u_post_url']],
			]];
		}

		$data[] = ['config_text.add', ['authforurl_tlds', $this->tlds()]];
		$data[] = ['config.add', ['authforurl_img_bbcode', true]];
		$data[] = ['config.add', ['authforurl_email', true]];
		$data[] = ['module.add', ['acp', 'ACP_CAT_DOT_MODS', 'AFU_ACP_TITLE']];
		$data[] = ['module.add', [
			'acp',
			'AFU_ACP_TITLE',
			[
				'module_basename'	=> '\rmcgirr83\authorizedforurls\acp\authforurl_module',
				'modes'				=> ['settings'],
			],
		]];

		return $data;
	}

	private function tlds()
	{
		// our TLD array..add to or subtract from to suit your needs
		$tlds = [
			'ac','ad','ae','aero','af','ag','ai','al',
			'am','an','ao','aq','ar','arpa','arts','as',
			'at','au','aw','az','ba','bb','bd','be',
			'bf','bg','bh','bi','biz','bj','bm','bn',
			'bo','br','bs','bt','bv','bw','by','bz',
			'ca','cc','cd','cf','cg','ch','ci','ck',
			'cl','cm','cn','co','com','coop','cr','cu',
			'cv','cx','cy','cz','de','dj','dk','dm',
			'do','dz','ec','edu','ee','eg','eh','er',
			'es','et','fi','firm','fj','fk','fm','fo',
			'fr','fx','ga','gd','ge','gf','gg','gh',
			'gi','gl','gm','gn','gov','gp','gq','gr',
			'gs','gt','gu','gw','gy','hk','hm','hn',
			'hr','ht','hu','id','ie','il','im','in',
			'info','int','io','iq','ir','is','it','je',
			'jm','jo','jp','ke','kg','kh','ki','km',
			'kn','kp','kr','kw','ky','kz','la','lb',
			'lc','li','lk','lr','ls','lt','lu','lv',
			'ly','ma','mc','md','mg','mh','mil','mk',
			'ml','mm','mn','mo','mp','mq','mr','ms',
			'mt','mu','museum','mv','mw','mx','my','mz',
			'na','name','nato','nc','ne','net','nf','ng',
			'ni','nl','no','np','nom','np','nr','nu',
			'nz','om','org','pa','pe','pf','pg','ph',
			'pk','pl','pn','pr','pro','pt','pw','py',
			'qa','re','rec','ro','ru','rw','sa','sb',
			'sc','sd','se','sg','sh','shop','si','sj',
			'sk','sl','sm','sn','so','sr','st','su',
			'sv','sy','sz','tc','td','tf','tg','th',
			'tj','tk','tm','tn','to','top','tp','tr','tt',
			'tv','tw','tz','ua','ug','uk','um','us',
			'uy','uz','va','vc','ve','vg','vi','vn',
			'vu','web','wf','ws','ye','yt','yu','za',
			'zm','zr','zw',
		];

		$tlds = implode(",", $tlds);

		return $tlds;
	}
}

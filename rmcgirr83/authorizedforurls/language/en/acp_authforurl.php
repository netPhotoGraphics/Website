<?php
/**
*
* topfive [English]
*
* @package language Top Five
* @copyright (c) 2014 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	// ACP
	'AFU_IMAGE_BBCODE'		=> 'Check image bbcode',
	'AFU_IMAGE_BBCODE_EXPLAIN'	=> 'If set yes, then urls within the img bbcode will be checked.',
	'AFU_EMAIL'				=> 'Check email links',
	'AFU_EMAIL_EXPLAIN'		=> 'If set yes, links with email addresses will be checked.',
	'AFU_DENY_POST'			=> 'If a match is found should the post be denied',
	'AFU_DENY_POST_EXPLAIN'	=> 'If set as yes the post will be denied, otherwise the post will be placed into moderation queue.',
	'AFU_TLDS'				=> 'The TLD’s to check for',
	'AFU_TLDS_EXPLAIN'		=> 'The TLDs to include, seperated by a comma (Example: com,de).  Add to or remove from to suit your needs.',
	'AFU_SAVED'				=> 'Changes Saved',
));

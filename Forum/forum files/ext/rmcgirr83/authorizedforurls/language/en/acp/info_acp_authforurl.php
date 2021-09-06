<?php
/**
*
* Authorized for urls extension for the phpBB Forum Software package.
*
* @package language Authorized for urls
* @copyright (c) 2020 RMcGirr83
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//
$lang = array_merge($lang, [
	// ACP
	'AFU_ACP_TITLE'			=> 'Authorized for urls',
	'AFU_CONFIG'			=> 'Settings',
	'AFU_IMAGE_BBCODE'		=> 'Check image bbcode',
	'AFU_IMAGE_BBCODE_EXPLAIN'	=> 'If set yes, then urls within the img bbcode will be checked.',
	'AFU_EMAIL'				=> 'Check email links',
	'AFU_EMAIL_EXPLAIN'		=> 'If set yes, links with email addresses will be checked.',
	'AFU_DENY_POST'			=> 'If a match is found should the post be denied',
	'AFU_DENY_POST_EXPLAIN'	=> 'If set as yes the post will be denied, otherwise the post will be placed into moderation queue.',
	'AFU_TLDS'				=> 'The TLD’s to check for',
	'AFU_TLDS_EXPLAIN'		=> 'The TLDs to include, seperated by a comma (Example: com,de).  Add to or remove from to suit your needs.',
	'AFU_SAVED'				=> 'Changes Saved',
	//Donation
	'PAYPAL_IMAGE_URL'          => 'https://www.paypalobjects.com/webstatic/en_US/i/btn/png/silver-pill-paypal-26px.png',
	'PAYPAL_ALT'                => 'Donate using PayPal',
	'BUY_ME_A_BEER_URL'         => 'https://paypal.me/RMcGirr83',
	'BUY_ME_A_BEER'				=> 'Buy me a beer for creating this extension',
	'BUY_ME_A_BEER_SHORT'		=> 'Make a donation for this extension',
	'BUY_ME_A_BEER_EXPLAIN'		=> 'This extension is completely free. It is a project that I spend my time on for the enjoyment and use of the phpBB community. If you enjoy using this extension, or if it has benefited your forum, please consider <a href="https://paypal.me/RMcGirr83" target="_blank" rel="noreferrer noopener">buying me a beer</a>. It would be greatly appreciated. <i class="fa fa-smile-o" style="color:green;font-size:1.5em;" aria-hidden="true"></i>',
]);

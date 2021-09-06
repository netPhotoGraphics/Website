<?php
/**
*
* @package phpBB Extension - Obscure Contact Us
* @copyright (c) 2015 - HiFiKabin
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
	'OBSCURECONTACT_US_ENABLE'				=> 'Enable Obscure Contact Us',
	'OBSCURECONTACT_US_ENABLE_EXPLAIN'		=> 'Enabling Obscure Contact Us disables the inbuilt Contact Us form.',

	'ACP_OBSCURECONTACTUS_CONFIG'			=> 'Obscure Contact Us',
	'ACP_OBSCURECONTACTUS_CONFIG_EXPLAIN'	=> 'This is configuration page for the Obscure Contact Us extension. </br>Your email address is displayed using javascript which makes it invisible to Web Crawlers.',
	'ACP_OBSCURECONTACTUS_CONFIG_SET'		=> 'Configuration',
	'OBSCURECONTACTUS_CONFIG_SAVED'			=> 'Obscure Contact Us settings saved',

	'OBSCURECONTACTUS_MOUSEOVER'			=> 'On Mouseover',
	'OBSCURECONTACTUS_MOUSEOVER_EXPLAIN'	=> 'The text that shows when you hover on the “Contact Us” link.',

	'OBSCURECONTACTUS_PREFIX'				=> 'Email Prefix',
	'OBSCURECONTACTUS_PREFIX_EXPLAIN'		=> 'The part of your email address that comes before the @',
	'OBSCURECONTACTUS_PREFIX_PLACEHOLDER'	=> 'name',

	'OBSCURECONTACTUS_SUBJECT'				=> 'Email Subject',
	'OBSCURECONTACTUS_SUBJECT_EXPLAIN'		=> 'Fills in the subject line of the email.',

	'OBSCURECONTACTUS_SUFFIX'				=> 'Email Suffix',
	'OBSCURECONTACTUS_SUFFIX_EXPLAIN'		=> 'The part of your email address that comes after the @',
	'OBSCURECONTACTUS_SUFFIX_PLACEHOLDER'	=> 'address.com',

	'OBSCURECONTACTUS_REQUIRE_3.1.0'		=> 'This extension requires phpBB 3.1.0 or higher and will not work with 3.2.0 or later. Either update your forum or download the Obscure Contact Us Extension for phpBB 3.2.x',
	'OBSCURECONTACTUS_REQUIRE_3.2.0'		=> 'This extension requires phpBB 3.2.0 or higher and will not work with any earlier versions.',
));

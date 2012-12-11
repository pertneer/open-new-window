<?php

/**
*
* newspage [British English]
*
* @package language
* @version $Id$
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'LNW_LINKS'					=> 'Open Links in New Window',
	'LINKS_NEW_WINDOW'			=>	'New Window',
	'LINKS_NEW_WINDOW_CONFIG'	=>	'Configuration',
	'LINKS_NEW_WINDOW_EXPLAIN'	=>	'Forces links to open in a new window instead of same window',
	'LINKS_NEW_WINDOW_SAVED'	=> 'Settings have been successfully changed',
));
?>
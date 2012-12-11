<?php
/**
*
* @package - NV newspage
* @version $Id$
* @copyright (c) nickvergessen ( http://www.flying-bits.org/ )
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

$user->session_begin();
$auth->acl($user->data);
$user->setup();

if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

$mod_name = 'LINKS';

$version_config_name = 'links_new_window_mod_version';
$language_file = 'mods/info_acp_links_new_window';

$versions = array(
	// Version 1.0.0
	'1.0.0'	=> array(
		'config_add' => array(
			array('link_enabled', 1),
		),
		'module_add' => array(
			array('acp', 'ACP_CAT_DOT_MODS', 'LINKS'),

			array('acp', 'LINKS', array(
					'module_basename'	=> 'links_new_window',
					'module_langname'	=> 'LINKS_NEW_WINDOW_CONFIG',
					'module_mode'		=> 'overview',
					'module_auth'		=> 'acl_a_board',
				),
			),
		),
	),

	
);

// Include the UMIL Auto file and everything else will be handled automatically.
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);

?>
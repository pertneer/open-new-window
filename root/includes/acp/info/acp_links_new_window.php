<?php

/**
*
* @package - Links New Window
* @version $Id$
* @copyright 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @package module_install
*/
class acp_links_new_window_info
{
	function module()
	{
		return array(
			'filename'	=> 'acp_links_new_window',
			'title'		=> 'Links New Window',
			'version'	=> '0.0.1',
			'modes'		=> array(
				'adjust_links'	=> array(
					'title'		=> 'LINKS_NEW_WINDOW_CONFIG',
					'auth'		=> 'acl_a_board',
					'cat'		=> array('ACP_BOARD_CONFIGURATION'),
				),
			),
		);
	}
}

?>
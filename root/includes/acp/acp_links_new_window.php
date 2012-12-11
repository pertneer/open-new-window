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
if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* @package acp
*/
class acp_links_new_window
{
	var $u_action;

	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;

		$user->add_lang('acp/common');
		$this->tpl_name = 'acp_links_new_window';
		$this->page_title = $user->lang['LNW_LINKS'];
		add_form_key('links');

		$submit = (isset($_POST['submit'])) ? true : false;
		if ($submit)
		{
			if (!check_form_key('links'))
			{
				trigger_error('FORM_INVALID');
			}

			
			set_config('link_enabled', request_var('links_new_window', 0));
			

			trigger_error($user->lang['LINKS_NEW_WINDOW_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'LINKS_NEW_WINDOW'			=> $config['link_enabled'],
			
		));

	}
}

?>
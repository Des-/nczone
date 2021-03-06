<?php
/**
 *
 * nC Zone. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Marian Cepok, https://new-chapter.eu
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace eru\nczone\migrations;

class install_zone extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		// TODO
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v31x\v314');
	}

	public function update_data()
	{
		return array(
			array('permission.add', array('u_zone_view_info', true)),
			array('permission.add', array('u_zone_login', true)),
			array('permission.add', array('u_zone_view_login', true)),
			array('permission.add', array('u_zone_draw', true)),
			array('permission.add', array('u_zone_change_match', true)),
			array('permission.add', array('u_zone_view_matches', true)),
			array('permission.add', array('u_zone_view_bets', true)),
			array('permission.add', array('u_zone_bet', true)),

			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_view_info')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_login')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_view_login')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_draw')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_change_match')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_view_matches')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_view_bets')),
			array('permission.permission_set', array('ROLE_USER_STANDARD', 'u_zone_bet')),
		);
	}
}

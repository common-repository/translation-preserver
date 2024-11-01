<?php
/*
Plugin Name: Translation Preserver
Plugin URI: http://wordpress.org/extend/plugins/translation-preserver/
Description: A simple plugin that helps preserve your custom theme and plugin translations through auto-updates by allowing you to put them in your WP languages folder.
Version: 1.0
Author: Aaron Edwards
Author URI: http://uglyrobot.com
Network: true

Copyright 2014 UglyRobot Web Development (http://uglyrobot.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

function move_all_to_lang_folder( $mofile, $domain ) {
	if ( !is_readable( $mofile ) ) {
		$locale = apply_filters( 'plugin_locale', get_locale(), $domain );
		$mofile = WP_LANG_DIR . '/'. $domain . '-' . $locale . '.mo';
	}
	return $mofile;
}

add_filter( 'load_textdomain_mofile', 'move_all_to_lang_folder', 10, 2 );
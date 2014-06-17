<?php
/*
Plugin Name: Composer Test Plugin
Plugin URI: https://github.com/mgburns/composer-test-plugin
Description: A useless plugin for Composer testing.
Author: Mike Burns
Version: 0.1.0
Author URI: http://github.com/mgburns
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

define( 'CTP_VERSION', '0.1.0' );

function ctp_print_version() {
	printf( "<!-- Composer Test Plugin v%s was here -->\n", CTP_VERSION );
}

add_action( 'wp_head', 'ctp_print_version' );
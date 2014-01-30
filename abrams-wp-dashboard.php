<?php
/*
Plugin Name: Abrams WP Dashboard
Plugin URI: http://abrams.co
Description: Add widget capability to dashboard.
Version: 1.0
Author: Travis Scheidegger
Author URI: http://travisscheidegger.com
License: GPLv2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

define('DEGG_WIDGET_POST_TYPE', 'degg_db_widget');
define('DEGG_WIDGET_URI', plugin_dir_url(__FILE__));

require_once dirname( __FILE__ ) . '/lib/post-types.php';
require_once dirname( __FILE__ ) . '/lib/caps.php';
require_once dirname( __FILE__ ) . '/lib/widgets.php';
require_once dirname( __FILE__ ) . '/lib/scripts.php';

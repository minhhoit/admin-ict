<?php
/*
	Plugin Name: Vtict Admin
	Version: 1.0
	Plugin URI: http://vungtauict.com/wp/plugins/vtict-admin/
	Description: This is a simple and clear admin design that makes your WordPress administration section more clear and relaxed.
	Author: Minh Ho
	Author URI: http://vungtauict.com
	License: GPL2
*/
global $wp_vtict_plugin;
$wp_vtict_plugin= array(
					'name'=>"VTICT Admin",
					'slug'=>"vtict_admin",
					'version'=>'15.05',
					'url'=> plugin_dir_url(__FILE__),
					'path'=> plugin_dir_path(__FILE__),
					'support'=> 'http://vungtauict.com/wp/plugins/vtict-admin/'
					);
require_once($wp_vtict_plugin['path'].'./inc/inc.php');

<?php
/*
Plugin Name: The Maxhost Extensions
Plugin URI: http://themeforest.net
Description: Extensions for Maxhost Wordpress Theme. Supplied as a separate plugin so that the users do not find empty shortcodes on changing the theme.
Version: 1.4
Author: Fluent-Themes
Author URI: http://themeforest.net/user/fluent-themes
*/

//Load Modules

#-----------------------------------------------------------------
# Theme Shortcodes
#-----------------------------------------------------------------

require_once 'modules/shortcodes.php';

#-----------------------------------------------------------------
# Custom Post Type for Megamenu Item
#-----------------------------------------------------------------

require_once 'modules/maxhost-post-type.php';
require_once 'modules/domain-checker/maxhost-dc.php';
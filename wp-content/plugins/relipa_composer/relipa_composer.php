<?php
/*
Plugin Name: Relipa Composer Page Builder
Plugin URI: https://relipasoft.com
Description: Relipa Composer Page Builder
Version: 1.0
Author: Relipa Team
Author URI: https://relipasoft.com
*/


define('RELIPA_COMPOSER_VERSION', '1.0');
define('RELIPA_COMPOSER_WP_VERSION', '4.0');

define( 'RELIPA_COMPOSER_PLUGIN', __FILE__ );

define( 'RELIPA_COMPOSER_PLUGIN_BASENAME', plugin_basename( RELIPA_COMPOSER_PLUGIN ) );

define( 'RELIPA_COMPOSER_PLUGIN_DIR', untrailingslashit( dirname( RELIPA_COMPOSER_PLUGIN ) ) );

define( 'RELIPA_COMPOSER_INCLUDES_DIR', RELIPA_COMPOSER_PLUGIN_DIR . '/include/');
define( 'RELIPA_COMPOSER_LOCALE_DIR', RELIPA_COMPOSER_PLUGIN_DIR . '/locale/');
define( 'RELIPA_COMPOSER_ASSETS_DIR', RELIPA_COMPOSER_PLUGIN_DIR . '/assets/');

define( 'RELIPA_COMPOSER_PLUGIN_URL', untrailingslashit( plugins_url( '', RELIPA_COMPOSER_PLUGIN ) ) );

define( 'RELIPA_COMPOSER_ASSETS_URL', RELIPA_COMPOSER_PLUGIN_URL . '/assets/' );

define('RELIPA_COMPOSER_TEXT_DOMAIN', 'relipa');

require_once RELIPA_COMPOSER_INCLUDES_DIR . 'plugin_setting.php';
require_once RELIPA_COMPOSER_INCLUDES_DIR . 'add-css-js.php';
require_once RELIPA_COMPOSER_INCLUDES_DIR . 'import-element.php';
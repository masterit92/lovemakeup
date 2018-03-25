<?php
/**
 * Check WPBakery Page Builder Plugin should be installed and active to use this plugin.
 */
if (!function_exists('child_plugin_has_parent_plugin')) {
    function child_plugin_has_parent_plugin() {
        if ( is_admin() && current_user_can( 'activate_plugins' ) &&  !is_plugin_active( 'js_composer/js_composer.php' ) ) {
            add_action( 'admin_notices', 'child_plugin_notice' );

            deactivate_plugins( RELIPA_COMPOSER_PLUGIN_BASENAME );

            if ( isset( $_GET['activate'] ) ) {
                unset( $_GET['activate'] );
            }
        }
    }
    add_action( 'admin_init', 'child_plugin_has_parent_plugin' );
    function child_plugin_notice(){
        echo '<div class="error"><p>Sorry, but Relipa Composer Page Builder plugin requires the WPBakery Page Builder plugin to be installed and active.</p></div>';
    }
}
/**
* Languages
*/
function relipa_composer_load_textdomain() {
    load_textdomain( RELIPA_COMPOSER_TEXT_DOMAIN , RELIPA_COMPOSER_LOCALE_DIR. get_locale() .'.mo' );
}
add_action( 'plugins_loaded', 'relipa_composer_load_textdomain' );
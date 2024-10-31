<?php

/*
Plugin Name: No Login User Enumeration
Plugin URI: ?
Description: A plugin to avoid user enumeration in the Wordpress login form.
Version: 0.1
Author: Thomas Konrad
Author URI: https://thomaskonrad.at
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

add_filter('login_errors','login_error_message');

function login_error_message($error){
    //its the right error so you can overwrite it
    $error = __('<strong>ERROR</strong>: Invalid credentials.', 'wp-no-login-user-enumeration') .
        ' <a href="' . wp_lostpassword_url() . '">' .
        __( 'Lost your password?' ) .
    '</a>';

    return $error;
}

add_action('plugins_loaded', 'nlue_load_textdomain');

function nlue_load_textdomain() {
    $translationsDirectory = dirname(plugin_basename(__FILE__)) . '/languages';

    load_plugin_textdomain(
        'wp-no-login-user-enumeration',
        false,
        $translationsDirectory
    );
}

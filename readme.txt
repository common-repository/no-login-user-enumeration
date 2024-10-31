=== Plugin Name ===

Contributors: Thomas Konrad
Tags: security, user-enumeration, login
Requires at least: 2.1.0
Tested up to: 5.3
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin to avoids user enumeration in the Wordpress login form. It does so by simply always returning the same error
message, no matter whether only the password is incorrect or both the username an the password. The message returned
(English) is "Invalid credentials.".

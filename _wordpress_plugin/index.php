<?php
 /*
 * Plugin Name: Cookie-Plugin
 * Author: Guillaume Duhan
 * Version: 1.0.0
 * Description: This plugin aims to display a GDPR bar to allow/disallow cookies usage.
 * 
*/

 if (!$_COOKIE["myCookieFromSvelteApp"] && !$_COOKIE["declineCookies"]) {
  wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css');
  wp_enqueue_style('myAppCss', plugin_dir_url(__FILE__) . 'bundle.css');
  wp_enqueue_script('myApp', plugin_dir_url(__FILE__) . 'app.js');

  echo file_get_contents('wp-content/plugins/cookie-plugin/CookieBanner.html');
 }

?>
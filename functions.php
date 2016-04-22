<?php

global $themeDir;
$themeDir = get_stylesheet_directory_uri() . "/";

function styles() {

   global $themeDir;

   wp_enqueue_style("font-awesome", $themeDir . "bower_components/font-awesome/css/font-awesome.min.css",array());
   wp_enqueue_style("app", $themeDir . "css/app.css",array());

}

add_action('wp_enqueue_scripts','scripts');add_action('wp_enqueue_scripts','styles');

function scripts() {

   global $themeDir;

   wp_enqueue_script("jquery", $themeDir . "bower_components/jquery/dist/jquery.js",array());
   // wp_enqueue_script("what-input", $themeDir . "bower_components/what-input/what-input.js",array());
   wp_enqueue_script("foundation", $themeDir . "bower_components/foundation-sites/dist/foundation.js",array());
   wp_enqueue_script("imgLiquid", $themeDir . "bower_components/imgLiquid/js/imgLiquid-min.js",array('jquery'));

   wp_enqueue_script("frontendutils", $themeDir . "js/frontendutils.js",array('jquery'));
   wp_enqueue_script("app", $themeDir . "js/app.js");

}

add_action('wp_enqueue_scripts','scripts');add_action('wp_enqueue_scripts','scripts');

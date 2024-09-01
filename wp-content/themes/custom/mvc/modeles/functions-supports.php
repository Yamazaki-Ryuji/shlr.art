<?php
/* Support Logo */
function SC_theme_prefix_setup(){
	add_theme_support('custom-logo');
}
add_action('after_setup_theme','SC_theme_prefix_setup');

/* Support Thumbnails */
add_theme_support('post-thumbnails');


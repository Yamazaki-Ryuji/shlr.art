<?php
// AJOUTER CSS ET JS SUR LE SITE
if(!function_exists('SC_css_js_import')){
	function SC_css_js_import(){
		wp_enqueue_style('css-font-awesome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');
		wp_enqueue_style('css-swiper','https://unpkg.com/swiper/swiper-bundle.min.css');
		wp_enqueue_style('css-charles',get_template_directory_uri().'/css/style.css');
		wp_enqueue_script('jquery');
		wp_enqueue_script('js-swiper', "https://unpkg.com/swiper/swiper-bundle.min.js");
		wp_enqueue_script('js-charles',get_template_directory_uri().'/js/charles.js', [], false,true);


	}
	add_action('wp_enqueue_scripts','SC_css_js_import');
}
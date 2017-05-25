<?php

/*
* Load style 
*/
function extra_child_scripts_and_style() {
  wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
	wp_enqueue_style('extra-child-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'extra_child_scripts_and_style');

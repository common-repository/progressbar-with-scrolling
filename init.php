<?php 

/*
plugin name: Progressbar with scrolling
Author: Janaalam
Author URI: https://www.facebook.com/jane.alamtitu

Description: This is a simple plugin for progressbar with scrolling effect. After activate this plugin you will see a progressbar which will complete with the scroll.

version:1.0.0
*/


//all hooks are here

add_action('wp_footer','progressbar_code');
add_action('wp_enqueue_scripts','progressbar_function_scripts');
add_action('wp_enqueue_scripts','progressbar_function_style');

function progressbar_code(){ ?>

	<div class="progressbar" style="height:10px;" data-0="width:0%; background-color: rgb(178, 190, 195);" data-end="width:100%; background-color: rgb(99, 110, 114);" >
		
	</div>

	<?php
}

//stylesheet for some custom style
function progressbar_function_style(){

	wp_enqueue_style('our-progressbar-style', PLUGINS_URL('style.css',__FILE__));
}


//scripts files for effect
function progressbar_function_scripts(){
	
	wp_enqueue_script('progress-custom-skollr',PLUGINS_URL('js/skrollr.min.js',__FILE__),array('jquery'),'',false);
	wp_enqueue_script('progress-custom',PLUGINS_URL('js/custom.js',__FILE__),array('jquery','progress-custom-skollr'),'',false);
}


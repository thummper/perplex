<?php
/*
Plugin Name: Perplex
Plugin URI: perplex.space
Description: ~Perplex~
Version: 0.0.1
Author: Aron Bettison
Author URI: www.thummper.net
*/

if( !class_exists('pplx') ):

class pplx {
    
    /* 
        Constructor
        ***********
        Constructs all actions, filters, functions
    */
    
    function __construct(){
        //Actions
        add_action('init', array($this, 'init'), 1);
      
    }
    
    /* 
        Init
        ****
        This function is called during 'init' actions, 
        creates post types, scripts, add actions.
    
    */
    function init(){
        //Register post types. 
		wp_enqueue_style( 'dashicons' );
        register_post_type( 'game',
                           array(
                               'labels' => array(
                                   'name' => __('Games'),
                                   'singular_name' => __('Game')
                               ),
                               'public' => true,
                               'has archive' => true,
                               'menu_icon' => 'dashicons-desktop',
                               'menu_position' => 3,
                               'taxonomies' => array('category'),
                           )
						  );
		//Filters 
		add_filter( 'timber/context', array($this, 'perplex_context'), 1);
    }

	function perplex_context(){
		$context = Timber::get_context();
		$context['header_image'] = $this->get_header_image();
		return $context;
    }
    
    function get_header_image(){
        $url = get_site_url() . "/wp-content/themes/Perplex/assets/headers/";
        $headerImages = [
            $url . "orion-nebula.jpg",
            $url . "nebula.jpg",
            $url . "nebula1.jpg",
            $url . "nebula2.jpg",
            $url . "quasar.jpg",
        ];
        $rand = array_rand($headerImages);
        return $headerImages[$rand];
    }
    
  
  
    
    
    
}

/* Main function for returning single instance of plugin to functions everywhere */
function pplx(){
    global $pplx; 
    if( !isset($pplx) ){
        $pplx = new pplx();
    }
    return $pplx;
}
//Initialise
pplx(); 
endif;
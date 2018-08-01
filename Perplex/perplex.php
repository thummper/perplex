<?php
/*
Plugin Name: Perplex
Plugin URI: perplex.space
Description: ~Perplex~
Version: 0.0.1
Author: Aron Bettison
Author URI: www.thummper.net
*/

if( !class_exists('plife') ):

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
        register_post_type( 'games',
                           array(
                               'labels' => array(
                                   'name' => __('Games'),
                                   'singular_name' => __('Game')
                               ),
                               'public' => true,
                               'has archive' => true,
                               'menu_icon' => 'dashicons-desktop',
                               'menu_position' => 3
                           )
                          );
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
?>

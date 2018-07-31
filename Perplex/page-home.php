<?php
//Get all images and stuff. 
$context = Timber::get_context();
wp_enqueue_style( 'pplx-style', get_stylesheet_uri() );
$context['header_image'] = get_site_url() . "/wp-content/themes/Perplex/assets/tilt-min.jpg";
$context['post'] = new Timber\Post();

//Get all job types and give them to the page. 



//Render single post. 
Timber::render('home.twig', $context);

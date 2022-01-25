<?php
//Get all images and stuff. 

$context = Timber::get_context();

wp_enqueue_style( 'pplx-style', get_stylesheet_uri() );


$context['post'] = new Timber\Post();
//Render single post. 
Timber::render('single-post.twig', $context);

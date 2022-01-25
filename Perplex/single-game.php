<?php
//Get all images and stuff. 
$context = Timber::get_context();
wp_enqueue_style( 'pplx-style', get_stylesheet_uri() );
$context['post'] = new Timber\Post();

// Get all posts linked to this game
$context['emptyImage'] = $pplx->get_header_image();

$catName = sanitize_title($context['post']->title);



$gamePosts = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => $catName,
);

$context['gamePosts'] = Timber::get_posts($gamePosts);





Timber::render('single-game.twig', $context);

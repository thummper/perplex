<?php
//Get all images and stuff. 
$context = Timber::get_context();
$context['header_image'] = get_site_url() . "/wp-content/themes/Perplex/assets/tilt-min.jpg";


//Get first 3 games and posts

$args = array(
    'post_type' => 'games',
    'posts_per_page' => 3,
);
$context['games'] = Timber::get_posts($args);
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4
);
$context['posts'] = Timber::get_posts($args);



//Render single post. 
Timber::render('home.twig', $context);

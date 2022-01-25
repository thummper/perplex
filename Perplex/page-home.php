<?php
//Get all images and stuff.
$context = Timber::get_context();

//Get first 3 games and posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4
);




$gameArgs = array(
    'post_type' => 'game',
    'posts_per_page' => -1,
    'category_name' => 'development'
);

$plannedGames = array(
    'post_type' => 'game',
    'posts_per_page' => -1,
    'category_name' => 'planned'
);

$doneGames = array(
    'post_type' => 'game',
    'posts_per_page' => -1,
    'category_name' => 'finished'
);





$context['emptyImage'] = $pplx->get_header_image();
$context['posts'] = Timber::get_posts($args);
$context['games'] = Timber::get_posts($gameArgs);
$context['plannedGames'] = Timber::get_posts($plannedGames);
$context['doneGames'] = Timber::get_posts($doneGames);


foreach($context['games'] as $game){
    $game->game_image = $pplx->get_header_image();
    //$game->gameImage = $pplx->get_header_image();
}
foreach($context['plannedGames'] as $game){
    $game->game_image = $pplx->get_header_image();
    //$game->gameImage = $pplx->get_header_image();
}
// foreach($context['doneGames'] as $game){
//     $game['gameImage'] = $pplx->get_header_image();
// }

//Render single post.
Timber::render('home.twig', $context);

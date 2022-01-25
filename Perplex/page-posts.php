<?php 
//Default home page.
$context = Timber::get_context();
global $paged;
if (!isset($paged) || !$paged){
    $paged = 1;
}
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10,
    'paged' => $paged
    );
$context['posts'] = new Timber\PostQuery($args);


//Send posts to frontend.
Timber::render( "page-posts.twig", $context);

?>
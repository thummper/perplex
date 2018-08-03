<?php 
//Default home page.
$context = Timber::get_context();
global $paged;
if (!isset($paged) || !$paged){
    $paged = 1;
}
$args = array(
    'post_type' => 'games',
    'posts_per_page' => 10,
    'paged' => $paged
    );
wp_enque
$context['posts'] = new Timber\PostQuery($args);
$context['header_image'] = get_site_url() . "/wp-content/themes/Perplex/assets/tilt-min.jpg";
//Send posts to frontend.
Timber::render( "games.twig", $context);

?>
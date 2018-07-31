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
$context['header_image'] = get_site_url() . "/wp-content/themes/Perplex/assets/tilt-min.jpg";





//Get all posts.



//Send posts to frontend.
Timber::render( "fontpage.twig", $context);

?>
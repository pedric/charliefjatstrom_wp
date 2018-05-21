<?php

/* Template Name: Wall */

$context = Timber::get_context();

$args = array(
    'posts_per_page' => -1
);

// $context['wall'] = new Timber\PostQuery( $args );

$wall_posts = Timber::get_posts( $args );
$gallery = [];
foreach ($wall_posts as $key => $value) {
	$image_gallery = $wall_posts[$key]->custom['image_gallery'];
	$link = $value->guid;
	$gallery[$key]->link = $link;
	$gallery[$key]->gallery = $image_gallery;
}
$context['wall'] = $gallery;

$post = new TimberPost();
$context['post'] = $post;
Timber::render( 'page-wall.twig', $context );
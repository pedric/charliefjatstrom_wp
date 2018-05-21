<?php

/* Template Name: Startsida */

$context = Timber::get_context();
$post = new TimberPost();
$context['post'] = $post;
$hero = get_field('hero_items');
if($hero[0]['reference']) {
	$hero_items_id = $hero[0]['reference'];
	$hero_items = Timber::get_posts(
		array(
			'posts_per_page' => -1,
			'post__in' => $hero_items_id
		)
	);
	$context['hero'] = $hero_items;
} else {
	$context['hero'] = false;
}
// $context['hero'] = get_field('hero_items');
Timber::render( 'page-front.twig', $context );
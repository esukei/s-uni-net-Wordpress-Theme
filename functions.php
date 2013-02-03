<?php
date_default_timezone_set('Asia/Tokyo');
function get_the_appropriate_title($delimiter = ' | '){
	$individualTitle = '';
	if(is_page('search'))
	{
		$individualTitle = 'search results of [' . htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') . ']' . $delimiter;
	}
	elseif(is_single() || is_page())
	{
		$individualTitle = get_the_title() . $delimiter;
	}
	elseif(is_404()){
		$individualTitle = 'Sorry, not found.' . $delimiter;
	}
	return $individualTitle . get_bloginfo('name');
}
function the_appropriate_title($delimiter = ' | '){
	echo get_the_appropriate_title($delimiter);
}
function get_the_appropriate_description(){
	$description = '';
	if(is_page('search'))
	{
		$description = 'search results of [' . htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8') . ']';
	}
	elseif(is_single() || is_page())
	{
		$description = get_the_excerpt();
	}
	elseif(is_404()){
		$description = 'Sorry, not found.';
	}
	else {
		$description = get_bloginfo('description', 'show');
	}
	return $description;
}
function the_appropriate_description(){
	echo get_the_appropriate_description();
}

//add page to excerpt
add_post_type_support( 'page', 'excerpt' );

//remove comment feed
remove_action('wp_head', 'feed_links_extra', 3);
//remove short link
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
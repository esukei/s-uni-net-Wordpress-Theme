<?php
date_default_timezone_set('Asia/Tokyo');
function get_the_appropriate_title($delimiter = ' | '){
	$individualTitle = '';
	if(is_page('search'))
	{
		$individualTitle = 'search results.' . $delimiter;
	}
	elseif(is_single() || is_page())
	{
		$individualTitle = get_the_title() . $delimiter;
	}
	elseif(is_404()){
		$individualTitle = 'Sorry,not found.' . $delimiter;
	}
	return $individualTitle . get_bloginfo('name');
}
function the_appropriate_title($delimiter = ' | '){
	echo get_the_appropriate_title($delimiter);
}

//remove comment feed
remove_action('wp_head', 'feed_links_extra', 3);
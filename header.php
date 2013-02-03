<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns#">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_appropriate_title();?></title>
	<meta property="og:title" content="<?php the_appropriate_title();?>">
	<meta name="description" content="<?php the_appropriate_description();?>">
	<meta property="og:description" content="<?php the_appropriate_description();?>">
	<meta property="og:url" content="<?php echo get_bloginfo('url') . $_SERVER['REQUEST_URI']; ?>">
	<meta name="viewport" content="width=640">
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Quicksand:400,700'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<script>
		(function() {
			var cx = '006434572749424858842:WMX-1187131900';
			var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					'//www.google.com/cse/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
		})();
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/core.js"></script>
	<?php wp_head();?>
	<script>

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-35505463-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>
</head>
<body>
<header id="SiteHeader">
	<div id="HeaderContent">
		<h1 id="Logo"><a href="/"><?php bloginfo('name');?></a></h1>
		<nav class="search">
			<gcse:searchbox-only></gcse:searchbox-only>
		</nav>
	</div>
</header>
<div id="Main">
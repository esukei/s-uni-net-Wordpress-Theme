<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php the_appropriate_title();?></title>
	<meta name="viewport" content="width=640, initial-scale=1">
	<link href='//fonts.googleapis.com/css?family=Quicksand' rel='stylesheet'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<script>
		(function() {
			var cx = '006434572749424858842:tfi0fkdcggg';
			var gcse = document.createElement('script'); gcse.type = 'text/javascript'; gcse.async = true;
			gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
					'//www.google.com/cse/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(gcse, s);
		})();
	</script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
	<?php wp_head();?>
</head>
<body>
<div id="Main">
	<header id="SiteHeader">
		<h1 id="Logo"><a href="/"><?php bloginfo('name');?></a></h1>
	</header>
<?php get_header();?>
<div id="Main">
	<article class="singleArticle">
		<header>
			<h1 class="articleTitle"><?php the_title();?></h1>
			<p class="articleDate"><?php the_date('Y-m-d H:i:s');?></p>
		</header>
		<?php the_content();?>
	</article>
</div>
<?php get_footer();?>
<?php get_header();?>
<div id="Main">
	<?php the_post();?>
	<article class="singleArticle">
		<header class="articleHeader">
			<h1 class="articleTitle"><?php the_title();?></h1>
			<p class="articleDate"><?php the_date('Y-m-d H:i:s');?></p>
		</header>
		<div class="articleBody">
		<?php the_content();?>
		</div>
	</article>
</div>
<?php get_footer();?>
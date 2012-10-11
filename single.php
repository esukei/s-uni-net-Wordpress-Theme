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
	<!-- X:S ZenBackWidget --><script>document.write(decodeURI("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//blog.s-uni.net/&nsid=108255259238883943%3A%3A108255266755065500&rand="+Math.ceil((new Date()*1)*Math.random())+"' "+decodeURI("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->
</div>
<?php get_footer();?>
<?php get_header();?>
	<div id="Article">
		<?php the_post();?>
		<article class="singleArticle">
			<time datetime="<?php the_date('c');?>" class="articleDate"><?php the_time(get_option('date_format'));?></time>
			<div class="articleBody">
				<h1 class="articleTitle"><?php the_title();?></h1>
				<?php the_content();?>
			</div>
			<footer class="articleFooter">
				<!-- X:S ZenBackWidget --><script>document.write(decodeURI("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//blog.s-uni.net/&nsid=108255259238883943%3A%3A108255266755065500&rand="+Math.ceil((new Date()*1)*Math.random())+"' "+decodeURI("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->
			</footer>
		</article>
	</div>
</div><?php //close Main ?>
<?php get_footer();?>
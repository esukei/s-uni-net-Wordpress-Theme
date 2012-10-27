<?php get_header();?>
	<div id="Article">
		<?php the_post();?>
		<article class="singleArticle">
			<header class="articleHeader">
				<h1 class="articleTitle"><?php the_title();?></h1>
				<p class="articleDate"><?php the_date('Y-m-d H:i:s');?></p>
			</header>
			<div class="articleBody">
			<?php the_content();?>
			</div>
			<footer class="articleFooter">
				<!-- X:S ZenBackWidget --><script>document.write(decodeURI("%3Cscript")+" src='http://widget.zenback.jp/?base_uri=http%3A//blog.s-uni.net/&nsid=108255259238883943%3A%3A108255266755065500&rand="+Math.ceil((new Date()*1)*Math.random())+"' "+decodeURI("%3E%3C/script%3E"));</script><!-- X:E ZenBackWidget -->
			</footer>
		</article>
	</div>
	<div id="Side">
		<nav class="search">
			<gcse:searchbox-only></gcse:searchbox-only>
		</nav>
		<nav id="NewlyArticles">
			<?php
			$args = array('posts_per_page' => 20);
			$query = new WP_Query($args);
			if($query->have_posts()):
			?>
			<ul>
				<?php while($query->have_posts()):$query->the_post();?>
				<li class="articleHeader">
					<a class="articleTitle" href="<?php the_permalink(); ?>"><?php the_title();?></a>
					<span class="articleDate"><?php the_time(get_option('date_format'));?></span>
				</li>
				<?php endwhile;?>
			</ul>
			<?php
			endif;
			wp_reset_query();
			?>
		</nav>
	</div>
</div><?php //close Main ?>
<?php get_footer();?>
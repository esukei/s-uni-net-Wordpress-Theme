<?php get_header();?>
	<nav class="search">
		<gcse:searchbox-only></gcse:searchbox-only>
	</nav>
	<section id="Index">
		<?php
		if(have_posts()):
		?>
		<ul class="articleList">
			<?php
			while(have_posts()):
			the_post();
			?>
			<li class="articleHeader">
				<a class="articleTitle" href="<?php the_permalink();?>"><?php the_title();?></a>
				<span class="articleDate"><?php the_time(get_option('date_format'));?></span>
			</li>
			<?php
			endwhile;
			?>
		</ul>
		<?php
		else:
		?>
		<p>no articles yet.</p>
		<?php
		endif;
		?>
	</section>
</div><?php //close Main?>
<?php get_footer();?>
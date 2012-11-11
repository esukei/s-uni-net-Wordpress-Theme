<?php get_header();?>

	<section id="Index">
		<?php
		if(have_posts()):
		?>
		<ul class="articleList">
			<?php
			while(have_posts()):
			the_post();
			?>
			<li>
				<a href="<?php the_permalink();?>">
					<time datetime="<?php the_time('c');?>" class="articleDate"><?php the_time(get_option('date_format'));?></time>
					<span class="articleTitle"><?php the_title();?></span>
				</a>
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
<?php get_header();?>
<div id="Main">
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
				<a class="articleTitle" href="<?php the_permalink();?>"><?php the_title();?></a>
				<span class="postDate"><?php the_date('Y-m-d H:i:s');?></span>
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
	?>
	</section>
</div>
<?php get_footer();?>
<?php get_header(); ?>
	
	<div id="content">
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
			<?php the_content(''); ?>
		<?php endwhile; ?>
	<?php endif; ?>

	</div>

<?php get_footer(); ?>
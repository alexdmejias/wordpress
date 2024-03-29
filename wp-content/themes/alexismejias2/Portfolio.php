<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

	<div id="content">
		<?php if(have_posts()): ?>
		<?php whilte (have_posts()):the_post(); ?>

			<?php the_content(''); ?>

		<?php endwhile; ?>

		<?php query_posts('cat=11'); ?>
		<?php if(have_posts()):while(have_posts()):the_post();?>

			<div class="portfolio-item">
				<?php // get article_image (custom field) ?>
				<?php $image = get_post_meta($post->ID, 'portfolio_image',true); ?>

				<a href="<?php the_permalink(); ?>"><img src="<?php echo $image; ?>" alt="View more info"></a>
				<p class="btn"><a href="<?php the_permalink(); ?>">See more</a></p>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query(); ?>
	<?php endif; ?>

	</div>

	<?php get_footer(); ?>
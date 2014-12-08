<?php get_header(); ?>

<div id="<?php echo get_post_type(); ?>-single" class="clearfix">
	<div class="wrap">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<?php the_content(); ?>
				</article>
			<?php endwhile; ?>
		<?php else: ?>
			<?php $post_type = get_post_type_object(get_post_type()); ?>
			<h2>Sorry no <?php echo $post_type->labels->singular_name; ?> found</h2>
		<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
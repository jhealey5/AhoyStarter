<?php get_header(); ?>

<div id="<?php echo get_post_type(); ?>-archive" class="clearfix">
	<div class="wrap">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<article>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="button">View More</a>
				</article>

			<?php endwhile; ?>
		<?php else: ?>
			<?php $post_type = get_post_type_object(get_post_type()); ?>
			<h2>Sorry no <?php echo $post_type->labels->name; ?> found</h2>
		<?php endif; ?>
	</div>
</div>

<?php if (have_posts()) : ?>
	<div id="pagination" class="clearfix">
		<div class="wrap">
			<?php
			global $wp_query;
			$big = 999999999;
			$paginate_links = paginate_links(array(
				'base' => str_replace($big, '%#%', get_pagenum_link($big)),
				'current' => max(1, get_query_var('paged')),
				'total' => $wp_query->max_num_pages,
				'mid_size' => 2,
				'prev_next' => true,
				'prev_text' => __('< Previous'),
				'next_text' => __('Next >')
			));
			if ($paginate_links) {
				echo '<div class="pagination">';
				echo $paginate_links;
				echo '</div>';
			}
			?>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>

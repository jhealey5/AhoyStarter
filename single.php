<?php get_header(); ?>

	<main role="main" class="page-content alignleft">
	

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				
				<h1><?php the_title(); ?></h1>

					
				<?php the_content(); ?>

					
				<footer class="post-meta">
					Tags: <?php the_tags( 'Tags: ', ', ', ''); ?>
					Posted in: <?php the_category(', ') ?>
					On: <?php the_date(); ?>
				</footer>

				
			</article>


			<div class="pagination cf">
				<span class="alignleft"><?php previous_post_link( '%link', 'Previous post' ); ?></span>
				<span class="alignright"><?php next_post_link( '%link', 'Next post' ); ?></span>
			</div>
			

			<?php comments_template(); ?>



		<?php endwhile; else: ?>

			<?php $post_type = get_post_type_object(get_post_type()); ?>

			<h2>Sorry no <?php echo $post_type->labels->singular_name; ?> found</h2>

			
		<?php endif; ?>


	</main><?php //End .page-content ?>



	<?php get_sidebar(); ?>


<?php get_footer(); ?>
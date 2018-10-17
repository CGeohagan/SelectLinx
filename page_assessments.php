<?php
/**
 * Template Name: Assessments Page
 *
 * @package selectlinx_theme
 */

get_header(); ?>

<main id="main" class="row full-width" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			<div class="container">
				<div class="box__header text-align">
					<h2 class="contact-title"><?php the_title(); ?></h2>
				</div>
				<figure class="featured__figure">
					<img src="<?php echo get_field('featured_image')['url']; ?>" alt="<?php echo get_field('featured_image')['alt']; ?>" />
				</figure>
				<div class="assessments">
					<div class="assessments__wrapper">
						<p class="assessments__text"><?php the_field('assessments_text'); ?></p>
						<div class="contact__form">
							<?php dynamic_sidebar('form-sidebar-2'); ?>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
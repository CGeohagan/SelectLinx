<?php
/**
 * Template Name: Full Width Page
 *
 * @package selectlinx_theme
 */

get_header(); ?>

<main id="main" class="row full-width" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			<section class="container">
				<div class="featured__wrapper">
					<figure class="featured__figure">
						<img src="<?php echo get_field('featured_image')['url']; ?>" alt="<?php echo get_field('featured_image')['alt']; ?>" />
					</figure>
				</div>
				<div class="intro intro-full">
					<div class="intro__wrapper intro__wrapper-full">
						<h2 class="intro__header intro__header-full"><?php the_title(); ?></h2>
						<?php 
							$text = get_field('intro_text');

							if ( !empty($text) ): ?>
							<p class="intro__text intro__text-full"><?php the_field('intro_text'); ?></p>
						<?php endif; ?>
					</div>
				</div>

				<div class="details">
					<div class="details__wrapper">
						<h3 class="details__header"><?php the_field('details_header'); ?></h3>
						<p class="details__text"><?php the_field('details_text'); ?></p>
					</div>
					<figure class="details__figure">
						<img src="<?php echo get_field('details_figure')['url']; ?>" alt="<?php echo get_field('details_figure')['alt']; ?>" />
					</figure>
				</div>
			</section>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
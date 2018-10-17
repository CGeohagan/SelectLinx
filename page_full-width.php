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
			<div class="container">
				<div class="box__header text-align">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="intro">
					<?php 
						$text = get_field('intro_text');

						if ( !empty($text) ): ?>
						<p class="intro__text intro__text-full"><?php the_field('intro_text'); ?></p>
					<?php endif; ?>
				</div>
				<figure class="featured__figure">
						<img src="<?php echo get_field('featured_image')['url']; ?>" alt="<?php echo get_field('featured_image')['alt']; ?>" />
				</figure>
				<div class="details details-1">
					<div class="details__wrapper">
						<h3 class="details__header"><?php the_field('details_header_1'); ?></h3>
						<p class="details__text"><?php the_field('details_text_1'); ?></p>
					</div>
				</div>
				<div class="details details-purple details-2">
					<div class="details__wrapper details__wrapper-flex">
						<div class="details__left">
							<h3 class="details__header details__header-left"><?php the_field('details_header_2'); ?></h3>
							<div class="details__text details__text-left"><?php the_field('details_text_2'); ?></div>
						</div>
						<figure class="details__right">
							<img src="<?php echo get_field('details_figure')['url']; ?>" alt="<?php echo get_field('details_figure')['alt']; ?>" />
						</figure> 
					</div>
				</div>
				<div class="details details-3">
					<div class="details__wrapper">
						<h3 class="details__header"><?php the_field('details_header_3'); ?></h3>
						<p class="details__text"><?php the_field('details_text_3'); ?></p>
					</div>
				</div>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
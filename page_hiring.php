<?php
/**
 * Template Name: Hiring Page
 *
 * @package selectlinx_theme
 */

get_header(); ?>

<main id="main" class="row full-width" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			<div class="container">
				<div class="box__header box__header-gold text-align">
					<h2><?php the_title(); ?></h2>
				</div>
				<figure class="featured__figure">
						<img src="<?php echo get_field('featured_image')['url']; ?>" alt="<?php echo get_field('featured_image')['alt']; ?>" />
				</figure>
				<div class="intro intro__full">
					<div class="intro__wrapper">
						<h3 class="intro__header">
							<?php the_field('intro_header'); ?>
						</h3>
						<?php 
							$text = get_field('intro_text');

							if ( !empty($text) ): ?>
							<p class="intro__text"><?php the_field('intro_text'); ?></p>
						<?php endif; ?>
					</div>
				</div>
				<div class="details details-1">
					<div class="details__wrapper">
						<div class="number">01</div>
						<h4 class="details__header"><?php the_field('details_header_1'); ?></h4>
						<p class="details__text"><?php the_field('details_text_1'); ?></p>
					</div>
					<div class="details__wrapper">
						<div class="number">02</div>
						<h4 class="details__header"><?php the_field('details_header_2'); ?></h4>
						<p class="details__text"><?php the_field('details_text_2'); ?></p>
					</div>
					<div class="details__wrapper">
						<div class="number">03</div>
						<h4 class="details__header"><?php the_field('details_header_3'); ?></h4>
						<p class="details__text"><?php the_field('details_text_3'); ?></p>
					</div>
					<div class="details__wrapper">
						<div class="number">04</div>
						<h4 class="details__header"><?php the_field('details_header_4'); ?></h4>
						<p class="details__text"><?php the_field('details_text_4'); ?></p>
					</div>
					<div class="details__wrapper">
						<div class="number">05</div>
						<h4 class="details__header"><?php the_field('details_header_5'); ?></h4>
						<p class="details__text"><?php the_field('details_text_5'); ?></p>
					</div>
					<div class="details__wrapper">
						<div class="number">06</div>
						<h4 class="details__header"><?php the_field('details_header_6'); ?></h4>
						<p class="details__text"><?php the_field('details_text_6'); ?></p>
					</div>
				</div>
				<div class="quote">
					<div class="quote__wrapper">
						<p class="quote__paragraph"><?php the_field('quote'); ?></p>
						<?php if( have_rows('quote_list') ): ?>
		          <ul class="quote__list">
		            <?php while( have_rows('quote_list') ): the_row(); 
		              // vars
		              $fact = get_sub_field('fact');
		              ?>

		              <li>
		              	<span>
		                	<?php if( $fact ): ?>
		                  	<?php echo $fact; ?>
		                	<?php endif; ?>
		              	</span>
		              </li>

		            <?php endwhile; ?>
		          </ul>
        		<?php endif; ?>
					</div>
				</div>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
<?php
/**
 * Template Name: Services Page
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
				<figure class="services__figure">
					<img src="<?php echo get_field('service_image_1')['url']; ?>" alt="<?php echo get_field('service_image_1')['alt']; ?>" />
				</figure>
				<section class="services">
					<div class="service">
						<div class="service__wrapper">
							<h3 class="service__header"><?php the_field('service_header_1'); ?></h3>
							<p class="service__text"><?php the_field('service_text_1'); ?></p>
						</div>
					</div>
					<div class="service">
						<div class="service__wrapper">
							<h3 class="service__header"><?php the_field('service_header_2'); ?></h3>
							<p class="service__text"><?php the_field('service_text_2'); ?></p>
						</div>
					</div>
				</section>
				<figure class="services__figure">
					<img src="<?php echo get_field('service_image_2')['url']; ?>" alt="<?php echo get_field('service_image_2')['alt']; ?>" />
				</figure>
				<section class="quote">
					<div class="quote__wrapper">
						<svg class="quote__svg" viewBox="0 0 214 214" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						    <g stroke="none" stroke-width="8" fill="none" fill-rule="evenodd">
					        <g transform="translate(-456.000000, -1398.000000)" stroke="#fff">
					            <g transform="translate(562.893756, 1504.504192) rotate(45.000000) translate(-562.893756, -1504.504192) translate(487.893756, 1429.504192)">
					                <rect x="0" y="0" width="150" height="150"></rect>
					            </g>
					        </g>
						    </g>
						</svg>
						<p class="quote__paragraph"><?php the_field('quote'); ?></p>
					</div>
				</section>
				<section class="testimonials slider">
					<h3 class="testimonials__header"><?php the_field('testimonials_header'); ?></h3>
			      <?php if( have_rows('testimonials') ): ?>
				    	<ul class="slider__list">
				      <?php while( have_rows('testimonials') ): the_row(); 
				        // vars
				        $description = get_sub_field('testimonial_description');
				        $contact = get_sub_field('testimonial_contact');
				        ?>

				        <li class="slider__item slider__item-services">
				        	<div class="testimonial">
					          <?php if( $description ): ?>
					            <p class="testimonial__description"><?php echo $description; ?></p>
					          <?php endif; ?>

					          <?php if( $contact ): ?>
					            <p class="testimonial__contact"><?php echo $contact; ?></p>
					          <?php endif; ?>
				          </div>
				        </li>

				      <?php endwhile; ?>
				    </ul>
			<!-- 	    <div class="slider__buttons">
				    	<button class="prev-button">
				    		<i class="fa fa-caret-left" aria-hidden="true"></i>
				    	</button>
				    	<button class="next-button">
				    		<i class="fa fa-caret-right" aria-hidden="true"></i>
				    	</button>
				    </div> -->
			  	<?php endif; ?>
				</section>

			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
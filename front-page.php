<?php
/**
 * Home Page
 *
 * @package selectlinx_theme
 */

get_header(); ?>

<main id="main" role="main" class="col">

<?php while ( have_posts() ) : the_post(); ?>

	<section class="background-image hero" style="background-image: url(<?php echo get_field('hero_background')['url']; ?>);">
		<div class="hero__wrapper">
			<div class="hero__content">
				<h3 class="hero__header">
					<?php the_field('hero_header'); ?>
				</h3>
				<p class="hero__text">
					<?php the_field('hero_text'); ?>
				</p>
			</div>
		</div>
	</section>
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
			<p class="quote__header"><?php the_field('quote_header'); ?></p>
		</div>
	</section>
	<section class="intro">
		<figure class="intro__figure">
			<img src="<?php echo get_field('intro_figure')['url']; ?>" alt="<?php echo get_field('intro_figure')['alt']; ?>" />
		</figure>
		<div class="intro__wrapper">
			<p class="intro__text intro__text-gold">
				<?php the_field('intro_text'); ?>
			</p>
		</div>
	</section>
	<section class="testimonials slider swiper-container">
		<h3 class="testimonials__header"><?php the_field('testimonials_header'); ?></h3>
      <?php if( have_rows('testimonials') ): ?>
	    	<div class="slider__list swiper-wrapper">
	      <?php while( have_rows('testimonials') ): the_row(); 
	        // vars
	        $description = get_sub_field('testimonial_description');
	        $contact = get_sub_field('testimonial_contact');
	        ?>

	        <div class="slider__item swiper-slide">
	        	<div class="testimonial">
	        		<!-- <i class="fa fa-quote-left"></i> -->
		          <?php if( $description ): ?>
		            <div class="testimonial__description"><?php echo $description; ?></div>
		          <?php endif; ?>

		          <?php if( $contact ): ?>
		            <p class="testimonial__contact"><?php echo $contact; ?></p>
		          <?php endif; ?>
	          </div>
	        </div>

	      <?php endwhile; ?>
	    </div>
	    <div class="swiper-pagination"></div>
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

	<section class="cards">
		<h2 class="cards__header">Services</h2>
		<div class="card__wrapper wrapper">
			<section class="card">
				<figure class="card__figure">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/modsquarepurple.svg" alt="">
				</figure>
				<div class="card__inner">
					<i class="fa fa-search" aria-hidden="true"></i>
					<h3><?php the_field('hiring_header'); ?></h3>
					<p class="card__text"><?php the_field('hiring_text'); ?></p>
					<a href="<?php the_field('hiring_link'); ?>">
		          <p class="card__link">Learn More</p>
		      </a>
				</div>
			</section>
			<section class="card">
				<figure class="card__figure">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/modsquarestan.svg" alt="">
				</figure>
				<div class="card__inner">
					<i class="fa fa-bolt" aria-hidden="true"></i>
					<h3><?php the_field('coaching_header'); ?></h3>
					<p class="card__text"><?php the_field('coaching_text'); ?></p>
					<a href="<?php the_field('coaching_link'); ?>">
		          <p class="card__link">Learn More</p>
		      </a>
				</div>
			</section>
		</div>
	</section>


<?php endwhile; // end of the loop. ?>

</main><!-- #primary -->

<?php get_footer(); ?>
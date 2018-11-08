<?php
/**
 * Template Name: About Page
 *
 * @package selectlinx_theme
 */

get_header(); ?>

<main id="main" class="row" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			<div class="container">
				<div class="box__header box__header-gold text-align">
					<h2><?php the_title(); ?></h2>
				</div>
				<section class="about">
					<div class="about__wrapper">
						<?php 
							$text = get_field('about_header_1');
							if( !empty($text) ): ?>
								<h3 class="about__header"><?php the_field('about_header_1'); ?></h3>
						<?php endif; ?>
						<div class="about__text">
							<?php 
								$text = get_field('about_text_1');
								if( !empty($text) ): ?>
									<p><?php the_field('about_text_1'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</section>
				<section class="team">
					<div class="triangle triangle-top"></div>
					<div class="triangle triangle-bottom"></div>
					<div class="team__wrapper">
						<div class="founder">
							<div class="founder__header">
								<h3><?php the_field('founder_header'); ?></h3>
								<h4>Founder</h4>
							</div>
							<div class="founder__wrapper">
								<div class="founder__text">
									<p><?php the_field('founder_text'); ?></p>
								</div>
								<figure class="founder__figure">
									<img src="<?php echo get_field('founder_image')['url']; ?>" alt="<?php echo get_field('founder_image')['alt']; ?>" />
								</figure>
							</div>
						</div>
						<div class="bios">
							<h3 class="bios__header">Meet our<br>SelectLinx Team</h3>
							<div class="bios__wrapper">
								<div class="bio">
									<figure class="bio__figure">
										<img src="<?php echo get_field('bio_image_1')['url']; ?>" alt="<?php echo get_field('bio_image_1')['alt']; ?>" />
									</figure>
									<h4 class="bio__header"><?php the_field('bio_header_1'); ?></h4>
									<p class="bio__text">
										<?php the_field('bio_text_1'); ?>
									</p>
								</div>
								<div class="bio">
									<figure class="bio__figure">
										<img src="<?php echo get_field('bio_image_2')['url']; ?>" alt="<?php echo get_field('bio_image_2')['alt']; ?>" />
									</figure>
									<h4 class="bio__header"><?php the_field('bio_header_2'); ?></h4>
									<p class="bio__text">
										<?php the_field('bio_text_2'); ?>
									</p>
								</div>
								<div class="bio">
									<figure class="bio__figure">
										<img src="<?php echo get_field('bio_image_3')['url']; ?>" alt="<?php echo get_field('bio_image_3')['alt']; ?>" />
									</figure>
									<h4 class="bio__header"><?php the_field('bio_header_3'); ?></h4>
									<p class="bio__text">
										<?php the_field('bio_text_3'); ?>
									</p>
								</div>
							</div>
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
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
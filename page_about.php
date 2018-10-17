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
				<div class="about pad">
					<div class="about__wrapper">
						<div class="about__header">
							<?php 
								$text = get_field('about_header_1');
								if( !empty($text) ): ?>
									<h3><?php the_field('about_header_1'); ?></h3>
							<?php endif; ?>
						</div>
						<div class="about__text">
							<?php 
								$text = get_field('about_text_1');
								if( !empty($text) ): ?>
									<p><?php the_field('about_text_1'); ?></p>
							<?php endif; ?>
						</div>
					</div>
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
					<div class="about__wrapper">
						<div class="about__header">
							<?php 
								$text = get_field('about_header_2');
								if( !empty($text) ): ?>
									<h3><?php the_field('about_header_2'); ?></h3>
							<?php endif; ?>
						</div>
						<div class="about__text">
							<?php 
								$text = get_field('about_text_2');
								if( !empty($text) ): ?>
									<p><?php the_field('about_text_2'); ?></p>
							<?php endif; ?>
						</div>
						<figure class="about__figure">
							<img src="<?php echo get_field('about_image')['url']; ?>" alt="<?php echo get_field('about_image')['alt']; ?>" />
						</figure>

					</div>
					<div class="bios">
						<div class="bios__wrapper">
							<div class="bio">
								<figure class="bio__figure">
									<img src="<?php echo get_field('bio_image_1')['url']; ?>" alt="<?php echo get_field('bio_image_1')['alt']; ?>" />
								</figure>
								<p class="bio__text">
									Sarah graduated with a Master's degree in Industrial Sociology with a focus on HR Management from Ruhr-University in Bochum, Germany. In the past she worked as an HR Recruiter and HR Generalist and owns an HR Consulting Company. Being bilingual in German and English, she has worked on international projects.<br>
									In her spare time, Sarah enjoys spending time with her husband and two children and is involved in several non-profit organizations in Stark County.
								</p>
							</div>
							<div class="bio">
								<figure class="bio__figure">
									<img src="<?php echo get_field('bio_image_2')['url']; ?>" alt="<?php echo get_field('bio_image_2')['alt']; ?>" />
								</figure>
								<p class="bio__text">
									Tammy graduated from Cleveland State University with a BA in Education.  She has taught in both private and public schools and is currently working on her Masters Degree in Reading Specialization.<br>
									In her spare time Tammy enjoys reading, spending time with her family and volunteering at the local Humane Society.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
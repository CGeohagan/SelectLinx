<?php
/**
 * Template Name: Full Width Page
 *
 * @package selectlinx_theme
 */

get_header(); ?>

<main id="main" class="row" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>		
			<div class="container">
				<div class="box__header text-align">
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="full-width">
					<div class="wrapper">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section><!-- #post-<?php the_ID(); ?> -->
	
	<?php endwhile; // end of the loop. ?>

</main><!-- #main-->

<?php get_footer(); ?>
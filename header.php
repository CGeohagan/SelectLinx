<?php
/**
 * The header template
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package selectlinx_theme
 */
?>

<!DOCTYPE html>
 
<!--[if lt IE 9]>
<html id="ie" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- favicon & links -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/x-icon">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- stylesheets are enqueued via functions.php -->

    <!-- all other scripts are enqueued via functions.php -->
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/html5shiv.js" type="text/javascript"></script>
    <![endif]-->

    <?php // Lets other plugins and files tie into our theme's <head>:
    wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
	<div id="page">
        <a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to content', 'selectlinx-theme' ); ?></a>
		<header id="site-header" role="banner" class="header">            
            <nav class="access" role="navigation">
                <div><a href="<?php echo esc_url( home_url() ); ?>/" class="logo-small">SelectLinx</a></div>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_class' => 'menu-container' ) ); ?>
                <button class="access__toggle">
                    <span></span>
                </button>
			</nav><!-- #access -->  
            <a href="<?php echo esc_url( home_url() ); ?>/" class="logo">
                <h1>SelectLinx</h1>
            </a>
		</header><!-- #branding -->

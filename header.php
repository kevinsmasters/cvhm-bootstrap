<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php

    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }

?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl p-0">
                <div class="navbar-brand">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>

                <div id="navs" class="justify-content-end">
                  <div class="navbar-brand">
                      <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                          <a href="<?php echo esc_url( home_url( '/' )); ?>">
                              <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                          </a>
                      <?php else : ?>
                          <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                      <?php endif; ?>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                  </div>

                  <?php // TODO: MAKE SURE THIS WORKS ON MOBILE
                  wp_nav_menu(array(
                  'theme_location'    => 'header',
                  'container'       => 'div',
                  'container_id'    => 'header-nav',
                  'container_class' => '',
                  'menu_id'         => false,
                  'menu_class'      => 'navbar-nav',
                  'depth'           => 3,
                  'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                  'walker'          => new wp_bootstrap_navwalker()
                  ));
                  ?>

                  <?php
                  wp_nav_menu(array(
                  'theme_location'    => 'primary',
                  'container'       => 'div',
                  'container_id'    => 'main-nav',
                  'container_class' => 'collapse navbar-collapse justify-content-end',
                  'menu_id'         => false,
                  'menu_class'      => 'navbar-nav',
                  'depth'           => 3,
                  'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                  'walker'          => new wp_bootstrap_navwalker()
                  ));
                  ?>
                  <div id="headerInfo" class="">
                    <span id="headLocation" class="header-info">Location: <?php echo get_option('address_field'); ?></span>
                    <span id="headPhone" class="header-info">Phone: <a href="tel:845-561-7075"><?php echo get_option('phone_field'); ?></a> </span>

                  </div>
                </div>
            </nav>
        </div>
        <div id="subHeader">
          <div id="rt-accessibility">
			<div class="rt-desc">Text Size</div>
			<div id="rt-buttons">
				<a href="#" id="decreaseText" title="Decrease Font Size" class="decrease" rel="nofollow"><span class="button"></span></a>
				<a href="#" id="increaseText" title="Increase Font Size" class="increase" rel="nofollow"><span class="button"></span></a>
			</div>
		</div>
          <div id="dateThing"><?php echo date("F j, Y"); ?></div>
          <span id="subheadLocation" class="header-info">Location: <?php echo get_option('address_field'); ?></span>
          <span id="subheadPhone" class="header-info">Phone: <a href="tel:845-561-7075"><?php echo get_option('phone_field'); ?></a> </span>
          <a id="headerSocial" href="https://www.facebook.com/CVHMPC" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/white-fb-icon.png" alt="facebook"></a>

        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page() && !get_theme_mod( 'header_banner_visibility' )): ?>
        <div id="page-sub-header" <?php if(has_header_image()) { ?>style="background-image: url('<?php header_image(); ?>');" <?php } ?>>
            <div class="container">
                <h1>
                    <?php
                    if(get_theme_mod( 'header_banner_title_setting' )){
                        echo esc_attr( get_theme_mod( 'header_banner_title_setting' ) );
                    }else{
                        echo 'WordPress + Bootstrap';
                    }
                    ?>
                </h1>
                <p>
                    <?php
                    if(get_theme_mod( 'header_banner_tagline_setting' )){
                        echo esc_attr( get_theme_mod( 'header_banner_tagline_setting' ) );
                }else{
                        echo esc_html__('To customize the contents of this header banner and other elements of your site, go to Dashboard > Appearance > Customize','wp-bootstrap-starter');
                    }
                    ?>
                </p>
                <a href="#content" class="page-scroller"><i class="fa fa-fw fa-angle-down"></i></a>
            </div>
        </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>

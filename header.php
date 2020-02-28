<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RegulGroup
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-4 col-md-2 ">
        <a href="<?php echo get_home_url(); ?>" class="logo">
          <div class="logo__inner"></div>
        </a>
      </div>
      <div class="d-none d-sm-none d-md-none d-lg-block col-lg-5">
        <nav class="menu-header">
          <?php
          wp_nav_menu( array(
            'menu'            => 'main_menu',
            'menu_class'      => 'menu-header__inner', 
          ) );
          ?>
        </nav>
      </div>
      <div class="col-8 col-md-4 col-lg-5">
        <a href="tel:<?php echo get_option('site_telephone_back'); ?>" class="phone"><i class="fas fa-phone"></i><?php echo get_option('site_telephone'); ?></a>
        <button class="button js-button-campaign">Заказать&nbsp;звонок</button>
      </div>
    </div>
  </div>
</header>
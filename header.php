<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gofish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'gofish'); ?></a>
    <!-- Masthead -->
    <header id="masthead" class="site-header">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" role="navigation">
        <div class="container my-2">
          <!-- Brand and toggle get grouped for better mobile display -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gofish-navbar-collapse-1" aria-controls="gofish-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="#"><?php the_custom_logo() ?></a>
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'menu-1',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'gofish-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ));
          ?>
          <ul id="menu-secondary" class="navbar-nav">
            <li class="nav-item">
              <a href="" class="nav-link">Contact Us</a>
            </li>
            <li class="nav-item"><button class="btn btn-outline-secondary btn-oval">Request a Proposal</button></li>
          </ul>
        </div>
      </nav>
    </header><!-- #masthead -->
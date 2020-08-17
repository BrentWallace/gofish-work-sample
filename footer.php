<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gofish
 */

?>

<footer id="colophon" class="site-footer">
  <div class="site-info mt-n4">
    <div class="container">
      <div class="row py-4">
        <div class="col-md-6 text-center">
          <h3 class="">Let's Get in Touch</h3>
          <button class="btn btn-oval btn-gofish-outline my-4">Contact Us</button>
          <p class="text-gofish">(703) 596-1353</p>
        </div>
        <div class="col-md-2">
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'footer-menu-1',
            'depth'             => 1,
            'menu_class'        => 'list-unstyled ml-0 text-center text-md-left',
            'container'         => 'ul',
          ));
          ?>
        </div>
        <div class="col-md-2">
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'footer-menu-2',
            'depth'             => 1,
            'menu_class'        => 'list-unstyled ml-0 text-center text-md-left',
            'container'         => 'ul',
          ));
          ?>
        </div>
        <div class="col-md-2">
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'footer-menu-3',
            'depth'             => 1,
            'menu_class'        => 'list-unstyled ml-0 text-center text-md-left',
            'container'         => 'ul',
          ));
          ?>
        </div>
      </div>
      <hr />
    </div>
    <div class="container">
      <div class="row py-4">
        <div class="col-lg-6 text-center text-lg-left py-2"><?php the_custom_logo() ?></div>
        <div class="col-lg-6">
          <?php
          wp_nav_menu(array(
            'theme_location'    => 'social-and-privacy',
            'depth'             => 1,
            'menu_class'        => 'list-inline py-4 text-center text-lg-right ml-0',
            'container'         => 'ul',
            'add_li_class'      => 'list-inline-item mx-2',
          ));
          ?>
        </div>
      </div>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
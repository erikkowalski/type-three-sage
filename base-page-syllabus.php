<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>


    <div class="wrap  <?php  echo Config\display_fullwidth(); ?>" role="document">
      <div class="content">
      <?php while (have_posts()) : the_post(); ?>
  <?php  get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>

       <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <?php // include Wrapper\sidebar_path(); ?>
            <hr class="hidden-xs">
  <h4>  Type 3 introduces the following information, concepts, and skills</h4>
            <ul>
              <li>Using a grid across a system of pages and/or projects</li>
              <li>Interactivity / Usability / Experience</li>
              <li>Web design and development • Technology: HTML, CSS (Web Production)</li>
            </ul>

<h4>Type 3 reinforces the following information, concepts, and skills covered earlier in the program</h4>
<ul>
<li>Presenting ideas to a client</li>
<li>How to research</li>
<li>Exploration of ideas and form • Gestault Theory &#40;continuation,
    similarity, proximity, and so on&#41; • Deconstruction of the grid</li>
<li>Relationship between typeand image</li>
<li>Experimental typography</li>
<li>Typographic systems &#40;hierarchy, spacing/chunking&#41;</li>
<li>Fine typography &#40; punctuation, numbers, ragged edges&#41;</li>
<li>History of typography &#40;Gutenberg thru new media&#41;</li>
</ul>

<h4>Supplies List</h4>
<ul>
<li>Sketchbook/Notebook</li>
<li>A storage device &#40;to back up your work&#41;
    Money on your UMass Pass for color printouts</li>
<li>Server space</li>
<li>&#40;Shawn Towne has negotiated with hawkhost.com. Price will be approx $25-30 for the year, including a domain name. I
    will provide more information in class. You will need either a credit card or paypal account to obtain server space.&#41;</li>
</ul>

<h4>Readings</h4>
             <ul>
              <li>Essays: You will be provided with all theory and history readings</li>
              <li>Book: Typographic Web Design: How to Think Like a Typographer in HTML and CSS by Laura Franz will be available online.</li>
          </ul>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <main class="main" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>

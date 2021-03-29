<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Azcods_Theme
 */


get_header(); ?>

<div class="container-fluid">
<div class="row">
  <div class="col-sm-12" style="padding:0 0px;">
        <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php
    while ( have_posts() ) : the_post();

the_content();

    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->
</div><!-- #primary -->
  </div>



</div>
</div>



<?php get_footer();
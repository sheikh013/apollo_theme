<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package apollo_solution_Theme
 */

get_header(); ?>

  <div class="container">
	<div class="row">
	  <div class="col-sm-9">
	  		<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'apollo_solution' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'layouts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'layouts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->
	  </div>

	  <div class="col-sm-3">
		<?php get_sidebar(); ?>
	  </div>

	</div>
  </div>



<?php get_footer();

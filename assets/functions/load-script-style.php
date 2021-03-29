<?php


/**
 * Enqueue scripts and styles.
 */
function apollo_solution_scripts() {

	/* Load vendor Style */
	wp_enqueue_style( 'apollo_solution-vendor-style', get_template_directory_uri() . '/assets/css/vendor.css' );
	/* Load Main Style */
	wp_enqueue_style( 'apollo_solution-style', get_stylesheet_uri() );
	/* Load vendor Javascript */
    wp_enqueue_script( 'apollo_solution-vendor-js', get_template_directory_uri() . '/assets/js/vendor.js', array(), '20161215', true );
	/* Load custom javascript */
    wp_enqueue_script( 'apollo_solution-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '20161215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'apollo_solution_scripts', 99 );
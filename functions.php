<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be called every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version as a constant so we can easily replace it throughout the theme
define( 'ROSIE_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'rosie' ),
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function rosie_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style( 'rosie-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
			
	// add fitvid
	wp_enqueue_script( 'rosie-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), ROSIE_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'rosie', get_template_directory_uri() . '/js/theme.min.js', array(), ROSIE_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'rosie_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header
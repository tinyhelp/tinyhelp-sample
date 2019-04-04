<?php
/**
 * Plugin Name: TinyHelp Sample
 * Description: A sample plugin that demostrates how TinyHelp library could be used.
 * Author: Arūnas Liuiza
 * Author URI: https://srunas.co/
 * Version: 1.0.0
*/

add_action( 'plugins_loaded', 'tinyhelp_sample' );
function tinyhelp_sample() {
	$args = array(
		'slug'        => 'tinycoffee',
		'name'        => __( 'tinyCoffee', 'tinyhelp-sample' ),
		'bottom_text' => __( 'This is a feature suggestion created by tinyHelp library', 'tinyhelp-sample' ),
		'modules'     => array(
			'test'  => array(
				'name'              => __( 'Test Module', 'tinyhelp-sample' ),
				'short_description' => __( 'Short description for this injected module goes here', 'tinyhelp-sample' ),
				'version'           => '0.1.0',
				'author_name'       => __( 'Arūnas', 'tinyhelp-sample' ),
				'author_uri'        => 'https://arunas.co',
				'search_terms'      => array( 'test.*', 'backup', 'coffee' ),
				'icons'             => array(
					'1x'  => 'https://placeholder.pics/png/128',
					'2z'  => 'https://placeholder.pics/png/256',
					'svg' => 'https://placeholder.pics/svg/300',
				),
				'links'             => array(
					array(
						'type'       => 'button',
						'title'      => __( 'Get started', 'tinyhelp-sample' ),
						'link'       => 'https://wp.org/plugins/tinycoffee',
						'attributes' => array(
							'target' => '_blank',
						),
					),
					array(
						'type'       => 'link',
						'title'      => __( 'Learn More', 'tinyhelp-sample' ),
						'link'       => 'https://arunas.co',
						'attributes' => array(
							'target' => '_blank',
						),
					),
				),
			),
			'test2' => array(
				'name'              => __( 'Test Module 2', 'tinyhelp-sample' ),
				'short_description' => __( 'Short description for this injected module goes here', 'tinyhelp-sample' ),
				'version'           => '0.1.0',
				'author_name'       => __( 'Arūnas', 'tinyhelp-sample' ),
				'author_uri'        => 'https://arunas.co',
				'search_terms'      => array( 'testing', 'beta', 'backup' ),
				'icons'             => array(
					'1x'  => 'https://placeholder.pics/png/128',
					'2z'  => 'https://placeholder.pics/png/256',
					'svg' => 'https://placeholder.pics/svg/300',
				),
				'links'             => array(
					array(
						'type'       => 'button',
						'title'      => __( 'Get started', 'tinyhelp-sample' ),
						'link'       => 'https://arunas.blog',
						'attributes' => array(
							'target' => '_blank',
						),
					),
				),
			),
		),
	);
	require_once( __DIR__ . '/vendor/autoload.php' );
	$th = new TinyHelp( $args );
}

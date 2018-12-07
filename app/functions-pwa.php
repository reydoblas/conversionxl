<?php
/**
 * PWA-related functions and filters.
 *
 * This file holds some actions for service workers supported by XWP PWA-WP plugin
 *
 * @package   
 * @author Rey Doblas   
 * @copyright 
 * @license   
 * @link      
 */

/**
 * Caches images using PWA-WP Caching feature.
 *
 * @return void
 */
add_action( 'wp_front_service_worker', function() {

	// Cache images for 24 hours.
	wp_register_service_worker_caching_route(
		'/wp-content/.*\.(?:png|gif|jpg|jpeg|svg|webp)(\?.*)?$',
			array(
				'strategy'  => WP_Service_Worker_Caching_Routes::STRATEGY_CACHE_FIRST,
				'cacheName' => 'images',
				'plugins'   => array(
					'expiration'        => array(
						'maxEntries'    => 60,
						'maxAgeSeconds' => 60 * 60 * 24,
				),
			),
		)
	);

} );

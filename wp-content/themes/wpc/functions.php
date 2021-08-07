<?php
require_once get_template_directory() . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'wpc_register_required_plugins' );

function wpc_register_required_plugins() {
$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		// array(
		// 	'name'               => 'TGM Example Plugin', // The plugin name.
		// 	'slug'               => 'tgm-example-plugin', // The plugin slug (typically the folder name).
		// 	'source'             => get_template_directory() . '/lib/plugins/tgm-example-plugin.zip', // The plugin source.
		// 	'required'           => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
		// 	'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
		// 	'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
		// 	'external_url'       => '', // If set, overrides default API URL and points to an external URL.
		// 	'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		// ),

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		// array(
		// 	'name'         => 'TGM New Media Plugin', // The plugin name.
		// 	'slug'         => 'tgm-new-media-plugin', // The plugin slug (typically the folder name).
		// 	'source'       => 'https://s3.amazonaws.com/tgm/tgm-new-media-plugin.zip', // The plugin source.
		// 	'required'     => true, // If false, the plugin is only 'recommended' instead of required.
		// 	'external_url' => 'https://github.com/thomasgriffin/New-Media-Image-Uploader', // If set, overrides default API URL and points to an external URL.
		// ),

		// This is an example of how to include a plugin from a GitHub repository in your theme.
		// This presumes that the plugin code is based in the root of the GitHub repository
		// and not in a subdirectory ('/src') of the repository.
		// array(
		// 	'name'      => 'Adminbar Link Comments to Pending',
		// 	'slug'      => 'adminbar-link-comments-to-pending',
		// 	'source'    => 'https://github.com/jrfnl/WP-adminbar-comments-to-pending/archive/master.zip',
		// ),

		// This is an example of how to include a plugin from the WordPress Plugin Repository.
		array(
			'name'      => 'WPGraphQL',
			'slug'      => 'wp-graphql',
			'required'  => true,
		),

		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => true,
		),

		// from https://github.com/wp-graphql/wp-graphql-woocommerce
		array(
			'name'      => 'WP GraphQL WooCommerce',
			'slug'      => 'wp-graphql-woocommerce',
			'source'    => 'https://github.com/wp-graphql/wp-graphql-woocommerce/archive/refs/tags/v0.10.1.zip',
			'required'  => true,
		),

		array(
			'name'      => 'WPGraphQL JWT Authentication',
			'slug'      => 'wp-graphql-jwt-authentication',
			'source'    => 'https://github.com/wp-graphql/wp-graphql-jwt-authentication/archive/refs/heads/master.zip',
			'required'  => true,
		),

		array(
			'name'      => 'WP GraphQL CORS',
			'slug'      => 'wp-graphql-cors',
			'source'    => 'https://github.com/funkhaus/wp-graphql-cors/archive/refs/heads/master.zip',
			'required'  => true,
		),
		
		// // This is an example of the use of 'is_callable' functionality. A user could - for instance -
		// // have WPSEO installed *or* WPSEO Premium. The slug would in that last case be different, i.e.
		// // 'wordpress-seo-premium'.
		// // By setting 'is_callable' to either a function from that plugin or a class method
		// // `array( 'class', 'method' )` similar to how you hook in to actions and filters, TGMPA can still
		// // recognize the plugin as being installed.
		// array(
		// 	'name'        => 'WordPress SEO by Yoast',
		// 	'slug'        => 'wordpress-seo',
		// 	'is_callable' => 'wpseo_init',
		// ),

	);

	$config = array(
		'id'           => 'wp-commerce',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'wpc-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => false,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

define( 'GRAPHQL_JWT_AUTH_SECRET_KEY', ',%wdU-tVsueWE]HTO@?buTJ+/_NA|uWb;nP@RnN+HI9&T6*>&hF+p2-*-f&chw)+' );

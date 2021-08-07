<?php
/**
 * WPObject Type - Simple_Attribute_Type
 *
 * Registers SimpleAttribute WPObject type
 *
 * @package WPGraphQL\WooCommerce\Type\WPObject
 * @since   0.10.1
 */

namespace WPGraphQL\WooCommerce\Type\WPObject;

/**
 * Class Simple_Attribute_Type
 */
class Simple_Attribute_Type {

	/**
	 * Register SimpleAttribute type to the WPGraphQL schema
	 */
	public static function register() {
		register_graphql_object_type(
			'SimpleAttribute',
			array(
				'description' => __( 'A simple attribute object', 'wp-graphql-woocommerce' ),
				'interfaces'  => array( 'Attribute' ),
				'fields'      => array(),
			)
		);
	}
}

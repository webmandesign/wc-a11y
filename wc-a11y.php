<?php
/**
 * Plugin Name:  Improving WooCommerce Accessibility
 * Plugin URI:   https://github.com/webmandesign/wc-a11y
 * Description:  Fixes accessibility issues in WooCommerce plugin templates.
 * Version:      1.0.0
 * Author:       WebMan Design, Oliver Juhas
 * Author URI:   https://www.webmandesign.eu/
 * License:      GNU General Public License v3
 * License URI:  http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:  wc-a11y
 * Domain Path:  /languages
 *
 * GitHub Plugin URI:  https://github.com/webmandesign/wc-a11y
 *
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, https://www.gnu.org/licenses/gpl-3.0.html
 *
 * @link  https://github.com/webmandesign/wc-a11y
 * @link  https://www.webmandesign.eu
 *
 * @package  Improving WooCommerce Accessibility
 *
 * Fixes https://github.com/woocommerce/woocommerce/issues/31210
 * with https://github.com/woocommerce/woocommerce/pull/31211
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Modifies WooCommerce template path.
 *
 * Overrides only native WooCommerce template files that has not
 * been overridden yet with a theme or other plugin.
 *
 * @since  1.0.0
 *
 * @param  string $template
 * @param  string $template_name
 * @param  string $template_path
 *
 * @return  string
 */
function wc_a11y_locate_template( $template, $template_name, $template_path ) {

	// Requirements check

		if (
			empty( $template )
			|| ! is_callable( 'WC' )
			|| ( defined( 'WC_TEMPLATE_DEBUG_MODE' ) && WC_TEMPLATE_DEBUG_MODE )
		) {
			return $template;
		}


	// Variables

		$default_path = WC()->plugin_path() . '/templates/';
		$plugin_path  = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/';
		$template_new = str_replace( $default_path, $plugin_path, $template );


	// Processing

		if (
			false !== strpos( $template, $default_path )
			&& file_exists( $template_new )
		) {
			$template = $template_new;
		}


	// Output

		return $template;

} // /wc_a11y_locate_template

add_filter( 'woocommerce_locate_template', 'wc_a11y_locate_template', 1, 3 );

=== Improving WooCommerce Accessibility ===
Contributors:      webmandesign
Donate link:       https://www.webmandesign.eu
Author URI:        https://www.webmandesign.eu
Plugin URI:        https://github.com/webmandesign/wc-a11y
Requires at least: 5.2
Tested up to:      5.8
Stable tag:        1.0.0
License:           GNU General Public License v3
License URI:       http://www.gnu.org/licenses/gpl-3.0.html
Tags:              webman, webman design, woocommerce, accessibility, a11y

Fixes accessibility issues in WooCommerce plugin templates.


== Description ==

This plugin fixes accessibility issues in WooCommerce plugin templates. You need to have WooCommerce plugin installed.

If you are not using WooCommerce plugin, do not install and use this plugin either.

Specifically, fixes [issue reported on GitHub](https://github.com/woocommerce/woocommerce/issues/31210) with related [pull request code](https://github.com/woocommerce/woocommerce/pull/31211).


== Installation ==

1. Unzip the plugin download file and upload `wc-a11y` folder into the `/wp-content/plugins/` directory.
2. Activate the plugin through the *"Plugins"* menu in WordPress.
3. Plugin has no options, works immediately after activation. The plugin requires WooCommerce plugin to be active.


== Frequently Asked Questions ==

= It does not work? =

The plugin requires WooCommerce plugin to be active. When both plugins are active, this plugin works quietly behind the scenes and fixes the accessibility HTML code issues within WooCommerce template files.

If a specific template file is overridden with your theme (or some other plugin), then this plugin won't help and you need to fix the code in your theme.


== Changelog ==

Please see the [`changelog.md` file](https://github.com/webmandesign/wc-a11y/blob/master/changelog.md) for details.


== Upgrade Notice ==

= 1.0.0 =
Initial release.

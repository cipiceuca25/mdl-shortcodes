<?php

/*
Plugin Name: MDL Shortcodes
Version: 1.0
Description: Material Design Lite (MDL) components are viewable at http://www.getmdl.io/components/
Author: TourKick (Clifford P)
Author URI: http://tourkick.com/
Plugin URI: http://tourkick.com/mdl-shortcodes/
Text Domain: mdl-shortcodes
Domain Path: /languages
License: GPLv3
*/

/*
LICENSE FAQ:
Why not "GPLv2" or "GPLv2 or later"?
Because:
- http://www.getmdl.io/started/index.html#license is licensed as Apache-2
- https://wordpress.org/plugins/about/guidelines/ requires "GPLv2 or later" (which includes GPLv3)
- https://www.gnu.org/licenses/rms-why-gplv3.html says GPLv3 is compatible with Apache licensing but GPLv2 is not
- http://www.apache.org/licenses/GPL-compatibility.html agrees Apache v2 is compatible with GPLv3 but not GPLv2
*/


/*
* START notes

TODO:
- Add icon font sizing. See https://github.com/google/material-design-lite/issues/1227#issuecomment-125573309

Inspirations:
https://medium.com/google-developers/introducing-material-design-lite-3ce67098c031
https://wordpress.org/themes/corpobox-lite/
http://www.premiumwp.com/premium-and-free-material-design-wordpress-themes/
http://themeforest.net/item/material-design-wordpress-theme-rare/11408042
http://www.getmdl.io/templates/
http://www.getmdl.io/components/
http://www.getmdl.io/styles/
http://www.getmdl.io/faq/
https://www.google.com/design/icons/
https://www.google.com/design/spec/components/
http://mdlhut.com/
http://www.materialpalette.com/light-blue/deep-orange
https://material.angularjs.org/
http://materialdesignblog.com/material-design-wordpress/
https://www.google.com/design/articles/expressing-brand-in-material/

Maybe complementary plugins:
https://wordpress.org/plugins/shortcode-factory/ is a great complement! Doesn't add any styles either. Just what I was looking for, especially if not using Views!
https://wordpress.org/plugins/display-posts-shortcode/ -- http://www.billerickson.net/code-tag/display-posts-shortcode/
https://wordpress.org/plugins/custom-sidebars/
https://wordpress.org/plugins/amr-shortcode-any-widget/
https://wordpress.org/plugins/wp-page-widget/
https://wordpress.org/plugins/custom-post-widget/


* END notes
*/



require_once dirname( __FILE__ ) . '/inc/class-mdl-shortcodes.php';

define( 'MDL_SHORTCODES_VERSION', '1.0' );
define( 'MDL_SHORTCODES_URL_ROOT', plugin_dir_url( __FILE__ ) );

/**
 * Load the MDL Shortcodes
 */
// @codingStandardsIgnoreStart
function MDL_Shortcodes() {
	return MDL_Shortcodes::get_instance();
}
// @codingStandardsIgnoreEnd
add_action( 'after_setup_theme', 'MDL_Shortcodes' );
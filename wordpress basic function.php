//////////////Serial for Wordpress Development//////////////
//////////////////////////////////////////////////////
1. Create a theme directory
2. Create all required files
3. Create all required folders
4. install required packages like
1.redux framework
2.tgm plugin activation
3.cmb2 framework
5.Add theme details
-> Basic Theme Details:
/**
Theme Name: Delicious Food Theme
Theme URI: http://github.com/deveripon
Author:Devripon
Author URI: http://github.com/deveripon
Version: 1.0.0
Description:Description: Our default theme for 2020 is designed to take full advantage of the flexibility of the block editor. Organizations and businesses have the ability to create dynamic landing pages with endless layouts using the group and column blocks. The centered content column and fine-tuned typography also makes it perfect for traditional blogs. Complete editor styles give you a good idea of what your content will look like, even before you publish. You can give your site a personal touch by changing the background colors and the accent color in the Customizer. The colors of all elements on your site are automatically calculated based on the colors you pick, ensuring a high, accessible color contrast for your visitors.
Tags: blog, one-column, custom-background, custom-colors, custom-logo, custom-menu, editor-style, featured-images, footer-widgets, full-width-template, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready, block-styles, wide-blocks,
Requires at least: 5.0
Tested up to: 5.4
Requires PHP: 7.0
License: GNU General Public License v2 or later
License URI: http://github.com/deveripon/
Text Domain: deliciousfood
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/

6.Add theme Supports
-> basic theme supports:

/**
* Essential theme supports
* */
function theme_setup()
{
/** automatic feed link*/
add_theme_support('automatic-feed-links');

/**Custom Widget Support*/
add_theme_support('widgets');

/**Custom menu Support*/
add_theme_support('menus');
/** tag-title **/
add_theme_support('title-tag');

/** post formats */
$post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
add_theme_support('post-formats', $post_formats);

/** post thumbnail **/
add_theme_support('post-thumbnails');

/** HTML5 support **/
add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

/** refresh widgest **/
add_theme_support('customize-selective-refresh-widgets');

/** custom background **/
$bg_defaults = array(
'default-image' => '',
'default-preset' => 'default',
'default-size' => 'cover',
'default-repeat' => 'no-repeat',
'default-attachment' => 'scroll',
);
add_theme_support('custom-background', $bg_defaults);

/** custom header **/
$header_defaults = array(
'default-image' => '',
'width' => 300,
'height' => 60,
'flex-height' => true,
'flex-width' => true,
'default-text-color' => '',
'header-text' => true,
'uploads' => true,
);
add_theme_support('custom-header', $header_defaults);

/** custom log **/
add_theme_support('custom-logo', array(
'height' => 60,
'width' => 400,
'flex-height' => true,
'flex-width' => true,
'header-text' => array('site-title', 'site-description'),
));
}
add_action('after_setup_theme', 'theme_setup');


7.Require Required packages
1.Redux framework
installation system:
require_once 'libs/redux-v2.3/ReduxCore/framework.php';
require_once 'libs/redux-v2.3/sample/config.php';
2.Cmb2 framework
installation system:
require_once "libs/CMB2/init.php";
require_once "libs/CMB2/example-functions.php";
3.Tgm framework
installation system:
require_once "libs/tgm/example.php";

8. Register Nav menus
example:
register_nav_menus([
'main-menu' => 'Main Menu',
]);

9. Basic Functions Setup
10.Css and Js File Enqueue
11.Page Templateing
12. Blogpost Dynamic
13.signle blog dynamic
14.Page create
15.Menu dynamic
16.page dynamic
17.Widget dynamic
<?php

/**
 * functions.php
 *
 * PHP Version 7.0
 *
 * @category   Theme
 * @package    JQ-Theme
 * @subpackage Core
 * @author     Jordan Quinn <jordanquinn11@hotmail.co.uk>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */

// Global defines
define('FOOTCOL_COUNT', 3);
define('JQ_TPL_URI',               get_template_directory_uri() . '/'   );
define('JQ_TPL_DIR',               get_template_directory()     . '/'   );
define('JQ_CSS_URI',               JQ_TPL_URI                   . 'css/');
define('JQ_CSS_DIR',               JQ_TPL_DIR                   . 'css/');
define('JQ_IMG_URI',               JQ_TPL_URI                   . 'assets/img/');
define('JQ_IMG_DIR',               JQ_TPL_DIR                   . 'assets/img/');
define('JQ_JS_URI',                JQ_TPL_URI                   . 'js/' );
define('JQ_JS_DIR',                JQ_TPL_DIR                   . 'js/' );

/*
* Create menu areas
*/
function jq_register_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Secondary Menu' )
      )
    );
  }
  add_action( 'init', 'jq_register_menus' );

/*
 * Create widget areas
 *
 * @sidebar 1
 * @footCol FOOTCOL_COUNT
 */
function generate_widgetareas() {
    if ( function_exists('register_sidebar') ) {

        // Primary sidebar
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar_primary',
            'before_widget' => '<div class="sb-main">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));

        for($fc_count = 0; $fc_count < FOOTCOL_COUNT; $fc_count++) {

            // Footer columns
            register_sidebar(array(
                'name' => 'Footer Column '.$fc_count.'',
                'id' => 'footcol_'.$fc_count.'',
                'before_widget' => '<div class="footcol-'.$fc_count.'">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
            ));
        }
    }
}
add_action( 'widgets_init', 'generate_widgetareas' );
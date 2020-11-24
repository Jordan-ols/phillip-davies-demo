<?php

/**
 * header.php
 *
 * PHP Version 7.0
 *
 * @category   Theme
 * @package    JQ-Theme
 * @subpackage Core
 * @author     Jordan Quinn <jordanquinn11@hotmail.co.uk>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>

<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="<?php echo JQ_CSS_URI . 'base/main.css'?>" type="text/css" media="screen" />
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Jordan Quinn demo</title>
        <?php wp_head(); ?>
        <style>
            html {
            margin-top:0!important;
        }
        </style>
    </head>
    <body>
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'Jordan-davies-demo' ); ?></a>

            <header class="jq-site-header">
                <div class="jq-site-header-bg"></div>
                <div class="container">
                    <div class="row">
                        <!-- JQ social links -->
                        <div class="social-header-icons col-6">
                            <a class="social-icon twitter" href="">
                                <img src="<?php echo JQ_IMG_URI . 'imdb-sml.png' ?>" alt="imdb logo"/>
                            </a>
                            <a class="social-icon linkedin" href="">
                                <img src="<?php echo JQ_IMG_URI . 'linkedin-logo.svg' ?>" alt="linkedin logo"/>
                            </a>
                            <a class="social-icon facebook" href="">
                                <img src="<?php echo JQ_IMG_URI . 'facebook-letter-logo.svg' ?>" alt="facebook logo"/>
                            </a>
                            <a class="social-icon instagram" href="">
                                <img src="<?php echo JQ_IMG_URI . 'instagram-logo.svg' ?>" alt="instagram logo"/>
                            </a>
                            <a class="social-icon twitter" href="">
                                <img src="<?php echo JQ_IMG_URI . 'twitter.svg' ?>" alt="twitter logo"/>
                            </a>
                        </div>
                        <div class="col-12">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-nav' ) ); ?>
                        </div>
                        <div class="get-in-touch col-6">
                            <a class="btn default bg-white text-dark rounded-pill border-dark" href="/contact">Get in touch</a>
                        </div>
                    </div>
                </div>
                <div class="site-title">
                    <h1 class="display-1 font-weight-bolder">Jordan Quinn</h1>
                    <h2 class="strapline display-4 font-weight-bold">Test Demo Theme</h2>
                </div>
                <div class="jq-header-assets">
                    <img src="<?php echo JQ_IMG_URI . 'love-monster-onward-journey-image-v2.png' ?>" class="love-monster" alt="Love monster onward journey image"/>
                    <img src="<?php echo JQ_IMG_URI . 'go-jetter-series-3-onward-journey-v2.png' ?>" class="" alt="Go jetter series 3 onward journey"/>
                    <img src="<?php echo JQ_IMG_URI . 'subtraction.png' ?>" class="subtraction" alt="Subtraction"/>
                </div>
            </header>
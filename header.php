<?php

/**
 * header.php
 *
 * PHP Version 7.0
 *
 * @category   Theme
 * @package    PD-Theme
 * @subpackage Core
 * @author     Jordan Quinn <jordanquinn11@hotmail.co.uk>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */
?>

<html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo PD_CSS_URI . 'base/main.css'?>" type="text/css" media="screen" />
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <title>Phillip Davies demo</title>
        <?php wp_head(); ?>
        <style>
            html {
            margin-top:0!important;
        }
        </style>
    </head>

    <body>
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'phillip-davies-demo' ); ?></a>

                <header class="pd-site-header">
                    <div class="pd-site-header-bg"></div>
                    <div class="container">
                        <div class="row">
                            <!-- PD social links -->
                            <div class="social-header-icons col-md-6">
                                <a class="social-icon linkedin" href="">
                                    <img src="<?php echo PD_IMG_URI . 'linkedin-logo.svg' ?>" alt="linkedin logo"/>
                                </a>
                                <a class="social-icon facebook" href="">
                                    <img src="<?php echo PD_IMG_URI . 'facebook-letter-logo.svg' ?>" alt="facebook logo"/>
                                </a>
                                <a class="social-icon instagram" href="">
                                    <img src="<?php echo PD_IMG_URI . 'instagram-logo.svg' ?>" alt="instagram logo"/>
                                </a>
                                <a class="social-icon twitter" href="">
                                    <img src="<?php echo PD_IMG_URI . 'twitter.svg' ?>" alt="twitter logo"/>
                                </a>
                            </div>
                            <div class="get-in-touch col-md-6">
                                <a class="btn default bg-white text-dark rounded-pill" href="/contact">Get in touch</a>
                            </div>
                        </div>
                    </div>
                    <div class="site-title">
                        <h1 class="display-1">Phillip Davies</h1>
                        <h2 class="strapline display-4">Scriptwriter</h2>
                    </div>
                    <div class="pd-header-assets">
                        <img src="<?php echo PD_IMG_URI . 'love-monster-onward-journey-image-v2.png' ?>" class="" alt="Love monster onward journey image"/>
                        <img src="<?php echo PD_IMG_URI . 'go-jetter-series-3-onward-journey-v2.png' ?>" class="" alt="Go jetter series 3 onward journey"/>
                        <img src="<?php echo PD_IMG_URI . 'subtraction.png' ?>" class="" alt="Subtraction"/>
                    </div>
                </header>
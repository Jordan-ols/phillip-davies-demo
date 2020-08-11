<?php

/**
 * index.php
 *
 * PHP Version 7.0
 *
 * @category   Theme
 * @package    PD-Theme
 * @subpackage Core
 * @author     Jordan Quinn <jordanquinn11@hotmail.co.uk>
 * @license    http://opensource.org/licenses/gpl-license.php GNU Public License
 */
 get_header(); ?>
 <div class="homepage-content bg-img-no-repeat" style="background-image:url('<?php echo PD_IMG_URI . 'union-4.svg'?>');">
    <section class="homepage-upper">
        <div class="container">
            <div class="row">
                <div class="pd-desc-img col-md-4">
                    <img src="<?php echo PD_IMG_URI . 'article_1.png'?>" alt="article demo"/>
                </div>
                <div class="pd-desc-content bg-img-no-repeat col-md-6" style="background-image:url('<?php echo PD_IMG_URI . 'union-6.svg'?>');">
                    <article>
                        <h3>This is a test</h3>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-lower bg-img-no-repeat">
        <div class="pd-desc-img col-md-6">
            <img src="<?php echo PD_IMG_URI . 'wow.svg'?>" alt="article demo"/>
        </div>
    </section>
 </div>
 <?php get_footer(); ?>
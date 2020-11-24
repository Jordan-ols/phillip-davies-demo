<?php

/**
 * front-page.php (template part)
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
<div class="homepage-content bg-img-no-repeat" style="background-image:url('<?php echo JQ_IMG_URI . 'union-4.svg'?>');">

    <!-- page banner generated here -->
    <section class="homepage-banner" style="background-inage:url(<?php // ACF image output field here ?>)">
        <div class="homepage-banner-content">
            <!-- acf text field output here -->
        </div>
    </section>

     <!-- Homepage center -->
    <section class="homepage-center">
        <div class="offset-lg-2">
            <div class="row">
            </div>
        </div>
        
        <div class="jq-carousel-outer offset-lg-2">
        <!--Carousel Wrapper-->
        <div class="carousel slide carousel-multi-item" id="pd_carousel">
            <div class="carousel-inner jq-carousel-inner" role="listbox">
                <div class="carousel-item jq-carousel active">
                    <div class="row">
                        <div class="jq-item col-md-3">
                            <div class="card mb-2">
                            <!-- img tag -->
                            <!-- card body tag -->
                            </div>
                        </div>

                        <div class="jq-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                            </div>
                        </div>

                        <div class="jq-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                            </div>
                        </div>
                        <div class="jq-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-next jq-control-right" href="#pd_carousel" role="button" data-slide="next">
                    <span class="carousel-control" aria-hidden="true"><img src="<?php echo JQ_IMG_URI . 'group-38.svg' ?>" class="sd-arrow" alt="Something different arrow"/></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->


        </div>
        
    </section>

    <!-- Homepage lower -->
    <section class="homepage-center">
        <div class="offset-lg-2">
            <div class="row">
                <img src="<?php echo JQ_IMG_URI . 'script_dev.png'?>" class="jq-carousel-lower-img col-3" alt="JQ carousel lower image"/>
                <div class="section-title col-9 d-flex">
                    <h2 class="align-self-end mb-md-5 font-weight-bold">Script Development</h2>
                </div>
            </div>
        </div>
        
        <div class="jq-carousel-outer offset-lg-2">

        <!--Carousel Wrapper-->
            <div class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="carousel-inner jq-carousel-inner" role="listbox">
                    <div class="carousel-item jq-carousel active">
                        <div class="row">
                            <div class="jq-item col-12 col-sm-6 col-md-3">
                                <div class="card mb-2">
                                </div>
                            </div>

                            <div class="jq-item col-12 col-sm-6 col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                </div>
                            </div>

                            <div class="jq-item col-12 col-sm-6 col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                </div>
                            </div>
                            <div class="jq-item col-12 col-sm-6 col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage-content-bottom">
        <div class="col-8 col-md-4 ml-auto">
        </div>
        <div class="inner-content bg-img-no-repeat">
            
            <div class="jq-container">
                <div class="row">
                </div>
            </div>
        </div>
    </section>
 </div>
<?php

/**
 * front-page.php (template part)
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
<div class="homepage-content bg-img-no-repeat" style="background-image:url('<?php echo PD_IMG_URI . 'union-4.svg'?>');">
    <section class="homepage-upper">
        <div class="container">
            <div class="row">
                <div class="pd-desc-img col-md-4">
                    <img src="<?php echo PD_IMG_URI . 'article_1.png'?>" alt="article demo"/>
                </div>
                <div class="pd-desc-content bg-img-no-repeat col-md-6" style="background-image:url('<?php echo PD_IMG_URI . 'union-6.svg'?>');">
                    <article>
                        <h2 class="font-weight-bold mb-4">About Philip</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique ultrices tellus.
                        In justo ex, ultrices et convallis a, ultricies eu lacus.</p>
                        <hr></hr>
                        <h2 class="font-weight-bold my-4">My services include</h2>
                        <ul>
                            <li class="font-weight-bold">1. TV Scriptwriting</li>
                            <li class="font-weight-bold">2. Script Development</li>
                            <li class="font-weight-bold">3. Something a little… different</li>
                        </ul>
                        
                    </article>
                </div>
            </div>
        </div>
    </section>

     <!-- Homepage center -->
    <section class="homepage-center">
        <div class="offset-lg-2">
            <div class="row">
                <img src="<?php echo PD_IMG_URI . 'p080wn14@2x.png'?>" class="pd-carousel-upper-img col-3" alt="PD carousel upper image"/>
                <div class="section-title col-9 d-flex">
                    <h2 class="align-self-end mb-md-5 font-weight-bold">TV Scriptwriting</h2>
                </div>
            </div>
        </div>
        
        <div class="pd-carousel-outer offset-lg-2">
        <!--Carousel Wrapper-->
        <div class="carousel slide carousel-multi-item" id="pd_carousel">
            <div class="carousel-inner pd-carousel-inner" role="listbox">
                <div class="carousel-item pd-carousel active">
                    <div class="row">
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'bfcb295c001fc831f5cece41ee11c582@2x.png'?>"
                                alt="tv scriptwriting image">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-2.png'?>"
                                alt="tv scriptwriting image">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-3.png'?>"
                                alt="tv scriptwriting image">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-4.png'?>"
                                alt="tv scriptwriting image">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-next pd-control-right" href="#pd_carousel" role="button" data-slide="next">
                    <span class="carousel-control" aria-hidden="true"><img src="<?php echo PD_IMG_URI . 'group-38.svg' ?>" class="sd-arrow" alt="Something different arrow"/></span>
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
                <img src="<?php echo PD_IMG_URI . 'script_dev.png'?>" class="pd-carousel-lower-img col-3" alt="PD carousel lower image"/>
                <div class="section-title col-9 d-flex">
                    <h2 class="align-self-end mb-md-5 font-weight-bold">Script Development</h2>
                </div>
            </div>
        </div>
        
        <div class="pd-carousel-outer offset-lg-2">

        <!--Carousel Wrapper-->
            <div class="carousel slide carousel-multi-item" data-ride="carousel">
                <div class="carousel-inner pd-carousel-inner" role="listbox">
                    <div class="carousel-item pd-carousel active">
                        <div class="row">
                            <div class="pd-item col-12 col-sm-6 col-md-3">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="<?php echo PD_IMG_URI . 'bfcb295c001fc831f5cece41ee11c582@2x.png'?>"
                                    alt="tv scriptwriting image">
                                    <div class="card-body">
                                        <h4 class="card-title">TV Scriptwriting</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pd-item col-12 col-sm-6 col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-2.png'?>"
                                    alt="tv scriptwriting image">
                                    <div class="card-body">
                                        <h4 class="card-title">TV Scriptwriting</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="pd-item col-12 col-sm-6 col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-3.png'?>"
                                    alt="tv scriptwriting image">
                                    <div class="card-body">
                                        <h4 class="card-title">TV Scriptwriting</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pd-item col-12 col-sm-6 col-md-3 clearfix d-none d-md-block">
                                <div class="card mb-2">
                                    <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-4.png'?>"
                                    alt="tv scriptwriting image">
                                    <div class="card-body">
                                        <h4 class="card-title">TV Scriptwriting</h4>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="controls">
                        <a class="carousel-control-next pd-control-right" href="#pd_carousel" role="button" data-slide="next">
                            <span class="carousel-control" aria-hidden="true"><img src="<?php echo PD_IMG_URI . 'group-38.svg' ?>" class="sd-arrow" alt="Something different arrow"/></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="homepage-content-bottom">
        <div class="col-8 col-md-4 ml-auto">
            <img src="<?php echo PD_IMG_URI . 'footer-upper.png' ?>" class="col-6" alt="upper footer image"/>
        </div>
        <div class="inner-content bg-img-no-repeat">
            
            <div class="pd-container">
                <div class="row">
                    <div class="pd-desc-img col-md-5">
                        <img src="<?php echo PD_IMG_URI . 'wow.svg'?>" class="col-6 col-md-12" alt="article demo"/>
                    </div>
                    <div class="pd-desc-content col-md-6 col align-self-end" style="background-image:url('<?php echo PD_IMG_URI . 'union-6.svg'?>');">
                        <article>
                            <h2 class="font-weight-bold mb-4">I'm also avaliable for</h2>
                            <ul>
                                <li class="font-weight-bold">1. School Visits</li>
                                <li class="font-weight-bold">2. Workshops</li>
                            </ul>
                            <hr></hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tristique ultrices tellus.
                            In justo ex, ultrices et convallis a, ultricies eu lacus.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
 </div>
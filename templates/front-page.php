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
                        <h3>This is a test</h3>
                    </article>
                </div>
            </div>
        </div>
    </section>

     <!-- Homepage center -->
    <section class="homepage-center">
        <div class="offset-sm-2">
            <div class="row">
                <img src="<?php echo PD_IMG_URI . 'p080wn14@2x.png'?>" class="pd-carousel-upper-img col-md-3" alt="PD carousel upper image"/>
                <div class="section-title col-md-9 d-flex">
                    <h2 class="display-2 align-self-end mb-5 font-weight-bold">TV Scriptwriting</h2>
                </div>
            </div>
        </div>
        
        <div class="pd-carousel-outer offset-sm-2">
        <!--Carousel Wrapper-->
        <div class="carousel slide carousel-multi-item" data-ride="carousel">
            <div class="carousel-inner pd-carousel-inner" role="listbox">
                <div class="carousel-item pd-carousel active">
                    <div class="row">
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'bfcb295c001fc831f5cece41ee11c582@2x.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-2.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-3.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item pd-carousel">
                    <div class="row">
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'bfcb295c001fc831f5cece41ee11c582@2x.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-2.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-3.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->


        </div>
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
    </section>

    <!-- Homepage lower -->
    <section class="homepage-center">
        <div class="offset-sm-2">
            <div class="row">
                <img src="<?php echo PD_IMG_URI . 'script_dev.png'?>" class="pd-carousel-lower-img col-md-3" alt="PD carousel lower image"/>
                <div class="section-title col-md-9 d-flex">
                    <h2 class="display-2 align-self-end mb-5m font-weight-bold">Script Development</h2>
                </div>
            </div>
        </div>
        
        <div class="pd-carousel-outer offset-sm-2">
        <!--Carousel Wrapper-->
        <div class="carousel slide carousel-multi-item" data-ride="carousel">

            
  
            <div class="carousel-inner pd-carousel-inner" role="listbox">
                <div class="carousel-item pd-carousel active">
                    <div class="row">
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'bfcb295c001fc831f5cece41ee11c582@2x.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-2.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-3.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item pd-carousel">
                    <div class="row">
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'bfcb295c001fc831f5cece41ee11c582@2x.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-2.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>

                        <div class="pd-item col-md-3 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="<?php echo PD_IMG_URI . 'tv-scriptwriting-3.png'?>"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="pd-item col-md-3">
                            <div class="card mb-2">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
                                alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title">TV Scriptwriting</h4>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante sem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->


        </div>
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            <li data-target="#multi-item-example" data-slide-to="2"></li>
        </ol>
    </section>

    <section class="homepage-content-bottom bg-img-no-repeat">
        <div class="pd-desc-img col-md-6">
            <img src="<?php echo PD_IMG_URI . 'wow.svg'?>" alt="article demo"/>
        </div>
    </section>
 </div>
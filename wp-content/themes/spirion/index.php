<?php

/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="wrapper" id="index-wrapper">

    <main class="site-main" id="main">
        <div class="promo_area" style="background:url('<?php bloginfo('template_url'); ?>/img/img1.png') no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1>The path to secure data begins here.</h1>
                <div class="btn text-uppercase">
                    <a href="#" class="btn-primary filled">CTA TEXT</a>
                    <a href="#" class="btn-primary">CTA TEXT</a>
                </div>
            </div>
        </div>
        <div class="video_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="vid_holder">
                            <img src="<?php bloginfo('template_url'); ?>/img/img2.png" class="img-responsive">
                            <a href="https://www.youtube.com/embed/1L4ubZGSbqg" class="vid_player" target="_blank">Play</a>
                        </div>
                        <p class="text-center">Rapid discovery, classification, and protection for all sensitive data<br>
                            across your network and the cloud.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="platforms">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 slide_col text-center">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon1.png"></div>
                                    <strong>Rapid Accurate Data <br>Discovery &<br> Classification</strong>
                                    <p>Accurately llocating all your sensitive data creates a foundation for effective
                                        data security.</p>
                                </div>
                                <div class="carousel-item">
                                    <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon1.png"></div>
                                    <strong>Rapid Accurate Data <br>Discovery &<br> Classification</strong>
                                    <p>Accurately llocating all your sensitive data creates a foundation for effective
                                        data security.</p>
                                </div>
                            </div>
                            <div class="slider_btns text-center">
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 slide_col text-center">
                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon2.png"></div>
                                    <strong>Real Time Analytics & <br>Visibility</strong>
                                    <p>Reduce your sensitive data footprint and prevent data leaks by securing data at
                                        its source.</p>
                                </div>
                                <div class="carousel-item">
                                    <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon2.png"></div>
                                    <strong>Real Time Analytics & <br>Visibility</strong>
                                    <p>Reduce your sensitive data footprint and prevent data leaks by securing data at
                                        its source.</p>
                                </div>
                            </div>
                            <div class="slider_btns text-center">
                                <a class="carousel-control-prev" href="#carouselExampleControls2" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls2" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 slide_col text-center">
                        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon3.png"></div>
                                    <strong>Leveraging Your Existing <br>Security Infrastructure</strong>
                                    <p>Integrate with any existing DLP technologies and respond to data security
                                        threats in real time before they reach the perimeter.</p>
                                </div>
                                <div class="carousel-item">
                                    <div class="img_holder"><img src="<?php bloginfo('template_url'); ?>/img/icon3.png"></div>
                                    <strong>Leveraging Your Existing <br>Security Infrastructure</strong>
                                    <p>Integrate with any existing DLP technologies and respond to data security
                                        threats in real time before they reach the perimeter.</p>
                                </div>
                            </div>
                            <div class="slider_btns text-center">
                                <a class="carousel-control-prev" href="#carouselExampleControls3" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls3" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row text-center btn_div">
                    <a href="#" class="btn-primary big filled">Tour Our Platform</a>
                </div>
            </div>
        </div>
        <div class="how_works">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>How it works</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 text-center work_col">
                        <strong class="title">
                            <div class="d-table">
                                <div class="v-middle">
                                    You can't protect what you can't accurately locate
                                </div>
                            </div>
                        </strong>
                        <div class="txt">
                            <img src="<?php bloginfo('template_url'); ?>/img/img3.png" alt="#">
                            <p>Accurate data descovery is the foundation to any effective data security program</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center work_col">
                        <strong class="title">
                            <div class="d-table">
                                <div class="v-middle">
                                    Visualize your protected vs unprotected risk
                                </div>
                            </div>
                        </strong>
                        <div class="txt">
                            <img src="<?php bloginfo('template_url'); ?>/img/img3.png" alt="#">
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center work_col">
                        <strong class="title">
                            <div class="d-table">
                                <div class="v-middle">
                                    Leverage existing IT security infrastructure - DLP, CASB, SEIM, UEBA, NGFW
                                </div>
                            </div>
                        </strong>
                        <div class="txt">
                            <img src="<?php bloginfo('template_url'); ?>/img/img3.png" alt="#">
                            <p>Lorem ipsum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="how_works get_started">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3>How to get started</h3>
                    </div>
                </div>
                <div class="row center_blocks">
                    <div class="col-12 col-sm-3">
                        <div class="col_holder">
                            <div class="col_header">
                                <span>1</span>
                                <img src="<?php bloginfo('template_url'); ?>/img/img4.png">
                            </div>
                            <div class="col_text">
                                <strong class="txt_heading">Schedule a demo</strong>
                                <p>Let us show you how Spirion can help your organization</p>
                                <a href="#" class="btn-primary big filled">Schedule Demo</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="col_holder">
                            <div class="col_header">
                                <span>2</span>
                                <img src="<?php bloginfo('template_url'); ?>/img/img5.png">
                            </div>
                            <div class="col_text">
                                <strong class="txt_heading">Install & see data in 30 minutes</strong>
                                <p>Sign up for a Spirion Cloud or On-premise trial for free.</p>
                                <a href="#" class="btn-primary big filled">Sign up for Spirion Cloud</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3">
                        <div class="col_holder">
                            <div class="col_header">
                                <span>3</span>
                                <img src="<?php bloginfo('template_url'); ?>/img/img6.png">
                            </div>
                            <div class="col_text">
                                <strong class="txt_heading">Finish: Protect & monitor data</strong>
                                <p>Start using the dashboard to secure your network and cloud environments and monitor
                                    your risk.</p>
                                <a href="#" class="btn-primary big filled">Lorem Ipsum</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="demo_area" style="background:url('<?php bloginfo('template_url'); ?>/img/img7.png') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="d-table">
                        <div class="v-middle">
                            <div class="col-12 pl-107 txt">
                                <h2>Start seeing your data<br> in less than an hour</h2>
                                <a href="#" class="btn-primary big filled ml-0">Request A Demo</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients" style="background:url('<?php bloginfo('template_url'); ?>/img/bg-clients.png') no-repeat; background-size: cover;">
            <div class="container">
                <div class="row text-center">
                    <h3 class="col-12 text-center">Our Clients</h3>
                </div>
                <div class="row text-center">
                    <div id="carouselExampleControls4" class="carousel clients_slider slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image active"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image active"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                            </div>
                            <div class="carousel-item">
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image active"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                                <div class="client_image"><img src="<?php bloginfo('template_url'); ?>/img/img8.png"></div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleControls4" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleControls4" data-slide-to="1"></li>
                            <li data-target="#carouselExampleControls4" data-slide-to="2"></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn-primary big filled ml-0">Request A Demo</a>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="articles">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-3 col-6 article_box">
                <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                <div class="txt">
                    <span class="date">Date</span>
                    <strong>Article Title</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-6 article_box">
                <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                <div class="txt">
                    <span class="date">Date</span>
                    <strong>Article Title</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-6 article_box">
                <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                <div class="txt">
                    <span class="date">Date</span>
                    <strong>Article Title</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-6 article_box">
                <img src="<?php bloginfo('template_url'); ?>/img/img9.png" class="max_width">
                <div class="txt">
                    <span class="date">Date</span>
                    <strong>Article Title</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipscing elit. In ut velit lectus.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</main><!-- #main -->
</div><!-- #index-wrapper -->
<?php endwhile;
endif; ?>
<?php get_footer(); ?>
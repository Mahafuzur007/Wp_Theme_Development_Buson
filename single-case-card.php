<?php

/** 
 * Template Name: About Us Page
 * 
 */
get_header(); ?>
<main>

    <!-- slider Area Start-->
    <div class="slider-area ">
        <!-- Mobile Menu -->
        <div class="single-slider slider-height2 d-flex align-items-center" style="background-image: url(' <?php echo get_template_directory_uri(); ?> /assets/img/breadcumb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->

    <!-- Services Details Start -->
    <div class="services-details section-padding2">
        <div class="container">
            <div class="row">
                <div class="offset-xl-12">
                    <div class="s-details-caption">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Details End -->
</main>
<footer>
    <!-- Footer Start-->
    <div class="footer-area footer-padding">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                    <div class="single-footer-caption mb-50">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit, sed do eiusmod</p>
                                </div>
                            </div>
                            <!-- social -->
                            <div class="footer-social">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="single-blog.html">Services</a></li>
                                <li><a href="#">Cases</a></li>
                                <li><a href="contact.html"> Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Services</h4>
                            <ul>
                                <li><a href="#">Commercial Cleaning</a></li>
                                <li><a href="#">Office Cleaning</a></li>
                                <li><a href="#">Building Cleaning</a></li>
                                <li><a href="#">Floor Cleaning</a></li>
                                <li><a href="#">Apartment Cleaning</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="single-footer-caption mb-50">
                        <div class="footer-tittle">
                            <h4>Get in Touch</h4>
                            <ul>
                                <li><a href="#">152-515-6565</a></li>
                                <li><a href="#"> Demomail@gmail.com</a></li>
                                <li><a href="#">New Orleans, USA</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom aera -->
    <?php
    get_footer();
    ?>
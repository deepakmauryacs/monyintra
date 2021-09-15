<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vinbullindia -  Business </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

      <!--   <link rel="manifest" href="site.html"> -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/web/assets/img/wbifabnic.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/themify-icons.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/meanmenu.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/flaticon.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/default.html">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/assets/css/responsive.css">

        <!-- Slider Revolution CSS Files -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/web/assets/rs/css/settings.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/web/assets/rs/css/layers.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/web/assets/rs/css/navigation.css">
        <script src="<?php echo base_url() ?>assets/web/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </head>
    <body>

    <!-- preloader -->
   <!--  <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div> -->
    <!-- preloader end  -->


        <!-- header-start -->
		<header>
            <div class="header-top-area d-none d-md-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 col-lg-10 col-md-10 d-flex align-items-center">
                            <div class="header-info">
                                <span class="for_ugf"><i class="far fa-map-marker-alt"></i>UGF-20 Gyan Bhawan Meena Bazar, Lucknow</span>
                                <span><i class="far fa-phone"></i> +91 9519541999</span>
                                <span class="mail-header-icon"><i class="far fa-envelope-open"></i> hello@vinbullindia.com </span>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <div class="header-right f-right ">
                                <div class="header-lang  pos-rel f-right">
                                    <div class="lang-icon">
                                        <i class="far fa-user-circle-o" aria-hidden="true"></i>
                                        <a href="https://tinyurl.com/yecfof48" class="btn" target="_blank" style="padding: 10px;color: white;margin-top: -25px;"> Open Free Demat Account </a>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 d-flex align-items-center">
                            <div class="logo">
                                <a href="<?php echo  base_url();  ?>"><img src="<?php echo base_url() ?>assets/web/assets/img/logo/Black on White.png" alt="" style="height: 85px;" /></a>
                            </div>

                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-bar f-right d-none d-lg-block">
                                <a class="info-bar" href="javascript:void(0);"><i class="fal fa-bars"></i></a>
                            </div>
                            <div class="main-menu text-right">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="<?php  echo base_url(); ?>">Home </a>
                                           
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>About">About Us </a></li>
                                        <li><a href="#">Services <i class="far fa-angle-down"></i></a>
                                            <ul class="sub-menu text-left">

                                                <?php
                                                 $services=$this->db->get_where('tbl_service_category',['id >'=>0])->result();
                                                 foreach($services as $row){
                                                ?>
                                                <li><a href="<?php echo base_url(); ?>Service/<?php  echo $row->slug  ?>"><?php  echo $row->category  ?></a>
                                                <?php } ?>




                                                
                                               
                                            </ul>
                                        </li>
                                      <!--   <li><a href="<?php // echo base_url() ?>Achievements">Achievements </a></li> -->
                                  
                                        <li><a href="case-2-col.html">Media<i class="far fa-angle-down"></i></a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="<?php  echo base_url(); ?>Blog">Blog</a></li>
                                                <li><a href="<?php  echo base_url(); ?>Article">Articles</a></li>
                                                <li><a href="<?php  echo base_url(); ?>Images">Images</a></li>
                                                <li><a href="<?php  echo base_url(); ?>Ebooks">eBooks</a></li>
                                                
                                            </ul>
                                        </li>
                                        <!--  <li><a href="<?php  // echo base_url(); ?>P2p_investment">P2P Investment </a></li>
                                         <li><a href="<?php // echo base_url();  ?>Credit_score">Get Credit Score </a></li> -->
                                         


                                        <li style="margin-right: 40px;"><a href="<?php echo base_url();  ?>Contact">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="extra-info">
                <div class="close-icon">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side" style="background-color: white;">
                    <a href="<?php echo  base_url();   ?>">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/logo/Black on White.png" alt="" style="height: 95px;" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>UGF-20 Gyan Bhawan Meena Bazar Kapoorthala Alignaj Lucknow 226024</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+91  9519541999</p>
                        <p>+91  7618879928</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p> hello@vinbullindia.com </p>
                     
                    </div>
                </div>
                <div class="instagram">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/portfolio/p1.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/portfolio/p2.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/portfolio/p3.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/portfolio/p4.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/portfolio/p5.jpg" alt="">
                    </a>
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/web/assets/img/portfolio/p6.jpg" alt="">
                    </a>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
        </header>
        <!-- header-start -->
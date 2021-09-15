            
             <!-- brand-area-start -->
             <div class="brand-area b-top pb-130 pt-125">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="brand-title text-center mb-75">
                                <span>Our Client’s</span>
                                <h1>More Than 1000+ World Wide Trusted Client’s</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row brand-active">
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="<?php echo base_url() ?>assets/web/1.jpeg" style="height: 75px;padding-right: 30px;" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="<?php echo base_url() ?>assets/web/2.jpg" style="height: 75px;padding-right: 30px;" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="<?php echo base_url() ?>assets/web/3.jpg" style="height: 75px;padding-right: 30px;" alt="" />
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="brand-img text-center">
                                <img src="<?php echo base_url() ?>assets/web/4.jpg" style="height: 75px;padding-right: 30px;" alt="" />
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

            <!-- footer-area-start -->
            <footer>
                <div class="footer-area pt-130" style="background-image:url(<?php echo base_url() ?>assets/web/assets/img/bg/bg-3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="newsletter-wrapper theme-bg mb-30">
                                    <img src="<?php echo base_url() ?>assets/web/assets/img/icon/icon.png" alt="">
                                    <div class="newsletter-text">
                                        <h2>Need A Consultation ?</h2>
                                        <span>Phone : +91 9519541999</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="newsletter-wrapper theme-bg mb-30">
                                    <img src="<?php echo base_url() ?>assets/web/assets/img/icon/icon-2.png" alt="">
                                    <div class="newsletter-text">
                                        <h2>Subscribe Newsletters</h2>
                                    </div>
                                    <div class="newsletter-form">
                                        <form id="subscribes" action method="POST">
                                            <input placeholder="Enter your email" name="email" type="email">
                                            <button> <i class="far fa-long-arrow-right"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-middle-area pt-50 pb-50">
                            <div class="row">
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="footer-wrapper mb-30">
                                        <div class="footer-logo">
                                            <a href="index.html"><img src="<?php echo base_url() ?>assets/web/assets/img/logo/Black on White.png" alt=""></a>
                                        </div>
                                        <div class="footer-text">
                                            <p>Vinbull India is an Indian investment firm that focuses on investing in high quality publicly....</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="footer-wrapper ml-60 mb-30">
                                        <div class="footer-title">
                                            <h3>Quick Links</h3>
                                        </div>
                                        <div class="footer-menu">
                                            <ul>
                                                <li><a href="<?php echo base_url() ?>"><i class="far fa-angle-right"></i> Home </a></li>
                                                <li><a href="<?php echo base_url() ?>About"><i class="far fa-angle-right"></i> About Us </a></li>
                                                <li><a href="<?php echo base_url() ?>Blog"><i class="far fa-angle-right"></i> Blog </a></li>
                                                <li><a href="<?php echo base_url() ?>Article"><i class="far fa-angle-right"></i> Article </a></li>
                                                <li><a href="<?php echo base_url() ?>Contact"><i class="far fa-angle-right"></i> Contact Us</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="footer-wrapper ml-60 mb-30">
                                        <div class="footer-title">
                                            <h3>Services</h3>
                                        </div>
                                        <div class="footer-menu">
                                            <ul>
                                                <?php
                                                 $services=$this->db->get_where('tbl_service_category',['id >'=>0])->result();
                                                 foreach($services as $row){
                                                ?>
                                                <li><a href="<?php echo base_url(); ?>Service/<?php  echo $row->slug  ?>"><i class="far fa-angle-right"></i><?php  echo $row->category  ?></a>
                                                <?php } ?>

                                                <!-- <li><a href="#"><i class="far fa-angle-right"></i> Setting & Privacy</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Need A Job?</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Meet With Us</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Special Services</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Get A Quote</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Latest News</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Our History</a></li>
                                                <li><a href="#"><i class="far fa-angle-right"></i> Quick Links</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 col-md-6">
                                    <div class="footer-wrapper mb-30">
                                        <div class="footer-title">
                                            <h3>Contact Us</h3>
                                        </div>
                                        <div class="footer-contact">
                                            <div class="footer-contact-address">
                                                <div class="footer-contact-icon">
                                                    <i class="far fa-envelope-open"></i>
                                                </div>
                                                <div class="footer-contact-text">
                                                    <span>hello@vinbullindia.com</span>
                                                </div>
                                            </div>
                                            <div class="footer-contact-address">
                                                <div class="footer-contact-icon">
                                                    <i class="far fa-map-marker-alt"></i>
                                                </div>
                                                <div class="footer-contact-text">
                                                    <span>UGF-20 Gyan Bhawan Meena Bazar Kapoorthala Alignaj Lucknow 226024</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="recent-news">
                                            <div class="recent-news-text">
                                                <h4><a href="#">The Essential Guide To Jacript’s Newest Data Type BigInt</a></h4>
                                                <div class="news-date">
                                                    <span><i class="far fa-calendar-alt"></i> 10 Sep 2019</span>
                                                </div>
                                            </div>
                                            <div class="recent-news-text">
                                                <h4><a href="#">Monthly Web Develop Update Modern Techniques.</a></h4>
                                                <div class="news-date">
                                                    <span><i class="far fa-calendar-alt"></i> 10 Sep 2019</span>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom-area f-bottom-border pt-20 pb-20">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="copyright">
                                        <p> Copyright <i class="far fa-copyright"></i><script> document.write(new Date().getFullYear())</script> <a href="#">Vinbull India.</a> All Rights Reserved</p>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6">
                                    <div class="footer-icon text-center text-md-right">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-google"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer-area-end -->
        </main>
		<!-- JS here -->
        <script src="<?php echo base_url() ?>assets/web/assets/js/vendor/modernizr-3.5.0.min.js"></script>
        
        <script src="<?php echo base_url() ?>assets/web/assets/js/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/slick.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/jquery.meanmenu.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/ajax-form.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/wow.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/jquery.scrollUp.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/plugins.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/js/main.js"></script>

        <!-- Slider Revolution core JavaScript files -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url() ?>assets/web/assets/rs/js/revolution-active.js"></script>

        <!-- Slider Revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/web/assets/rs/js/extensions/revolution.extension.video.min.js"></script>
        <script>
        $("#subscribes").submit(function(event) {
                event.preventDefault();
                $.ajax({
                        type: "POST", 
                        url: '<?php echo base_url('Admin/Subscribe/add');?>',
                        dataType:'json',
                        data: new FormData(this), 
                        contentType: false,
                        cache: false,
                        processData:false,
                        beforeSend:function()
                        {},
                        success:function(responce)
                        {
                          if(responce.status==0)
                          {
                           toastr.error(responce.message);
                          }else if(responce.status==1)
                          {
                            toastr.success(responce.message);
                            setTimeout(location.reload.bind('<?php echo base_url();?>'), 30000);
                          }  
                        },
                        error:function()
                        {
                          toastr.error('Something Went Wrong..');
                        },
                        complete:function()
                        {}
                    });
            })
        </script>
</body>
</html>
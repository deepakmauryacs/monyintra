        <main>
           <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(<?php echo base_url() ?>assets/web/assets/img/bg/02.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Service</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="<?php  echo base_url();  ?>">home</a></li>
                                    <li><span>Service Details</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->
            <!-- blog-area-start -->
            <div class="blog-area pt-130 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-4 mb-30">
                            
                            <div class="widget mb-40">
                                <div class="widget-title-box mb-30">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Popular Feeds</h3>
                                </div>
                                <ul class="recent-posts">
                                    <li>
                                        <div class="widget-posts-image">
                                            <a href="#"><img src="<?php echo base_url() ?>assets/web/assets/img/blog/img1.jpg" alt=""></a>
                                        </div>
                                        <div class="widget-posts-body">
                                            <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                                    cing elit, sed do.</a></h6>
                                            <div class="widget-posts-meta">October 18, 2018 </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-posts-image">
                                            <a href="#"><img src="<?php echo base_url() ?>assets/web/assets/img/blog/img2.jpg" alt=""></a>
                                        </div>
                                        <div class="widget-posts-body">
                                            <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                                    cing elit, sed do.</a></h6>
                                            <div class="widget-posts-meta">October 24, 2018 </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-posts-image">
                                            <a href="#"><img src="<?php echo base_url() ?>assets/web/assets/img/blog/img3.jpg" alt=""></a>
                                        </div>
                                        <div class="widget-posts-body">
                                            <h6 class="widget-posts-title"><a href="#">Lorem ipsum dolor sit
                                                    cing elit, sed do.</a></h6>
                                            <div class="widget-posts-meta">October 28, 2018 </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget mb-40">
                                <div class="widget-title-box mb-30">
                                    <span class="animate-border"></span>
                                    <h3 class="widget-title">Social Profile</h3>
                                </div>
                                <div class="social-profile">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            
                           
                        </div>
                        <div class="col-xl-8 col-lg-8 mb-30">
                            <div class="blog-wrapper mb-60">
                                <div class="blog-img" style="height: 390px;">
                                    <img src="<?php echo base_url(); ?>uploads/services/<?php echo $service->image; ?>"  style="background-size:cover;" alt="">
                                </div>
                                <div class="blog-text blog-02-text">
                                    <div class="blog-meta">
                                        <span><i class="far fa-user"></i> <a href="#">Admin</a></span>
                                        <span><i class="far fa-calendar-alt"></i> <a href="blog-deatils.html"><?php echo  date("d-M-Y", strtotime($service->created_at)) ?></a></span>
                                        
                                    </div>
                                    <h4><?php  echo $service->title;  ?></h4>
                                     <?php  echo $service->description;  ?>
                                </div>
                                
                                    
                            </div>
                            
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->
        </main>
        <!-- footer-area-start -->


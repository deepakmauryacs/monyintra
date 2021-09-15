<main>
<!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(<?php echo base_url() ?>assets/web/assets/img/bg/02.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Blog</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="<?php  echo base_url();  ?>">home</a></li>
                                    <li><span>Blog</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->


            <!-- blog-area-start -->
            <div class="blog-area pt-130 pb-130">
                <div class="container">
                    <div class="row">
                       
                       <?php if(!empty($blog)) { ?>
                       <?php foreach($blog as $row){ ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 " >
                            <div class="blog-wrapper mb-60 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <div class="blog-img">
                                    <a href="<?php  echo base_url();  ?>Web/blog_details/<?php echo $row->slug;  ?>"><img src="<?php echo base_url(); ?>uploads/blog/<?php echo $row->image; ?>"  style="height: 245px;" alt=""></a>
                                </div>
                                <div class="blog-text">
                                    <div class="blog-meta">
                                        <span><i class="far fa-calendar-alt"></i> <a href="blog-details.html"><?php echo  date("d-M-Y", strtotime($row->created_at)) ?> </a></span>
                                       
                                    </div>
                                    <h4><a href="<?php  echo base_url();  ?>Web/blog_details/<?php echo $row->slug;  ?>"><?php echo $row->title; ?></a></h4>
                                    <p><?php echo  word_limiter($row->description, 20); ?> </p>
                                    <a class="btn-border" href="<?php  echo base_url();  ?>Web/blog_details/<?php echo $row->slug;  ?>">read more <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                     <?php }} ?>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="basic-pagination text-center">
                                <ul class="pagination">
                                    <?php echo $pagelinks ?>
                                </ul>
                                <!-- <ul>
                                    <li><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog-area-end -->
        </main>

  
    
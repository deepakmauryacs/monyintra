<main>
<!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(<?php echo base_url() ?>assets/web/assets/img/bg/02.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Article</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="<?php  echo base_url();  ?>">home</a></li>
                                    <li><span>Article</span></li>
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
                       
                       <?php if(!empty($article)) { ?>
                       <?php foreach($article as $row){ ?>
                        <div class="col-xl-6 col-lg-6 col-md-6 " >
                            <div class="blog-wrapper mb-60 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <div class="blog-img" style="height: 500px;">
                                    <a href="<?php echo base_url(); ?>uploads/articles/<?php echo $row->image; ?>"><img src="<?php echo base_url(); ?>uploads/articles/<?php echo $row->image; ?>"   alt=""></a>
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

  
    
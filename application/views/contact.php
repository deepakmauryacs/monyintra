 <main>
            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(<?php echo base_url() ?>assets/web/assets/img/bg/02.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>contact</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="index.html">home</a></li>
                                    <li><span>contact</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->


            <section class="contact-box-area pt-125 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="area-title-blue text-center pr-30 pl-30 mb-70 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <span>contact info</span>
                                <h1>Meet With To Get More Busines Info</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="contact-box text-center mb-30 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <i class="fas fa-envelope"></i>
                                <h3>Mail Here</h3>
                                <p><a href="mailto:hello@vinbullindia.com"> hello@vinbullindia.com </a></p>
                             
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="contact-box text-center mb-30 wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".3">
                                <i class="fas fa-map-marker-alt"></i>
                                <h3>Visit Here</h3>
                                <p>UGF-20 Gyan Bhawan Meena Bazar Kapoorthala Alignaj Lucknow 226024</p>
                            </div>
                        </div>
                        <div class="col-xl-4  col-lg-4 col-md-4 ">
                            <div class="contact-box text-center mb-30 wow fadeInUp" data-wow-delay=".7s" data-wow-duration=".3">
                                <i class="fas fa-phone"></i>
                                <h3>Call Here</h3>
                                <p><a href="tel:9519541999">+91 9519541999</a></p>
                                <p><a href="tel:7618879928"> +91 7618879928</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           

            <!-- contact-area-start -->
            <div class="contact-area pt-125 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="area-title-blue text-center pr-30 pl-30 mb-70 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <span>Message us</span>
                                <h1>Don't Hesitate To Contact With Us</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <form id="forms" class="contacts-us-form"  method="POST">
                                <div class="row">
                                    <div class="col-md-4">
                                            <div class="contacts-icon">
                                                <input type="text" name="name" placeholder="Your Name.... " required>
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                            <div class="contacts-icon">
                                                <input type="text"  name="contact"  placeholder="Your Contact...." required>
                                            </div>
                                        </div>
                                         <div class="col-md-4">
                                            <div class="contacts-icon">
                                                <input type="email" name="city" placeholder="Enter City...." required>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="contacts-icon contactss-message">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Comments...." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contacts-us-form-button text-center">
                                            <button class="btn">send message <i class="far fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->

             <!-- map-area-start -->
             <div class="map-area">
                 <div class="container">
                    <div class="map-wrapper mb-30">
                   <iframe loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14156.819227659726!2d79.16049592542178!3d27.49400531041054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39759d63eebef6af%3A0x38f78b776b2b159d!2sAliganj%2C%20Uttar%20Pradesh%20207247!5e0!3m2!1sen!2sin!4v1627730448890!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                </div>
            </div> 

            <!-- map-area-end -->


        </main>
        <!-- footer-area-start -->
        <script>
$("#forms").submit(function(event) {
        event.preventDefault();
        $.ajax({
                type: "POST", 
                url: '<?php echo base_url('Admin/Contact/add');?>',
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
                    setTimeout(location.reload.bind('<?php echo base_url('Contact');?>'), 30000);
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
  
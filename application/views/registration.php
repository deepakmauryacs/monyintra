 <main>
            <!-- breadcrumb-area-start -->
            <div class="breadcrumb-area pt-230 pb-235" style="background-image:url(<?php echo base_url() ?>assets/web/assets/img/bg/02.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-text text-center">
                                <h1>Registration</h1>
                                <ul class="breadcrumb-menu">
                                    <li><a href="<?php echo base_url();  ?>">home</a></li>
                                    <li><span>Registration</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-start -->          

            <!-- contact-area-start -->
            <div class="contact-area pt-125 pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <div class="area-title-blue text-center pr-30 pl-30 mb-70 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                                <h1>Registration</h1>
                                <span style="margin-top:10px;">Fill Your Details.....</span>
                               
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                            <form  class="contacts-us-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-md-6">
                                            <div class="contacts-icon">
                                                <input type="text" name="first_name" placeholder="First Name.... " required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contacts-icon">
                                                <input type="text" name="last_name" placeholder="Last Email...." required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="contacts-icon">
                                                <input type="email" name="email" placeholder="Email ID...." required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="contacts-icon">
                                                <input type="password" name="password" placeholder="Password...." required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="contacts-icon">
                                                <input type="password" name="con_password" placeholder="Confirm Password..." required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="contacts-icon">
                                                <input type="number" min="0" name="contact" placeholder="Contact Number...." required>
                                            </div>
                                        </div>
                                    <div class="col-md-12">
                                        <div class="contacts-icon ">
                                            <textarea name="address" id="comments"  cols="30" rows="10" placeholder="Address...."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="contacts-us-form-button text-center">
                                            <button  type="submit" class="btn"> Submit <i class="far fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact-area-end -->
        </main>
        <!-- footer-area-start -->
        <script type="text/javascript">
        function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("con_password").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
  
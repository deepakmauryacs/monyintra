       <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        © <script>document.write(new Date().getFullYear())</script> VINBULL INDIA <span class="d-none d-sm-inline-block"> - Devloped  <i class="mdi mdi-heart text-danger"></i> by SSAK.</span>
                    </div>
                </div>
            </div>
        </footer>

        </div>
      
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
      
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/node-waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/select2/js/select2.min.js"></script>

      
        
        <!-- Required datatable js -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/jszip/jszip.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <script src="<?php echo base_url(); ?>assets/admin/assets/js/pages/form-advanced.init.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/libs/parsleyjs/parsley.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/assets/js/pages/form-validation.init.js"></script>


        <script src="<?php echo base_url(); ?>assets/admin/assets/js/app.js"></script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
      </script>
      <script type="text/javascript">
        toastr.options = {
                      "closeButton": false,
                      "debug": false,
                      "newestOnTop": false,
                      "progressBar": false,
                      "positionClass": "toast-top-right",
                      "preventDuplicates": false,
                      "onclick": null,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "5000",
                      "extendedTimeOut": "1000",
                      "showEasing": "swing",
                      "hideEasing": "linear",
                      "showMethod": "fadeIn",
                      "hideMethod": "fadeOut"
                  }
   //  Command: toastr["success"]('hello');
   
    <?php if($this->session->flashdata('success')){ ?>
       Command: toastr["success"]('<?php echo $this->session->flashdata('success'); ?>');
    <?php } ?>

    <?php if($this->session->flashdata('update')){ ?>
       Command: toastr["success"]('<?php echo $this->session->flashdata('update'); ?>');
    <?php } ?>

    <?php if($this->session->flashdata('error')){ ?>
       Command: toastr["error"]('<?php echo $this->session->flashdata('error'); ?>');
    <?php } ?>

    <?php if($this->session->flashdata('info')){ ?>
       Command: toastr["info"]('<?php echo $this->session->flashdata('info'); ?>');
    <?php } ?>

    $(function () {
     $('[data-toggle="tooltip"]').tooltip()
    })
   
   </script>
    </body>
</html>
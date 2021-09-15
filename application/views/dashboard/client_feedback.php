<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">
<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
            <div class="page-title-box">
               <h4> Clients Feedback </h4>
               <ol class="breadcrumb m-0">
                  <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                  <li class="breadcrumb-item active"> Clients Feedback </li>
               </ol>
            </div>
         </div>
      </div>
      <!-- end page title -->
      <!-- end row -->
      <div class="row d-flex justify-content-center">
         <div class="col-xl-10">
            <div class="card">
               <div class="card-body">
                  <div class="head d-flex justify-content-between align-items-center mb-4">
                     <h4 class="card-title">Service</h4>
                     <a  href="<?php  echo base_url('Admin/Feedback/all') ?>" style="border-radius: 0px;" class="btn btn-primary waves-effect waves-light">Go Back</a>
                  </div>
                  <hr>
                  <h4 class="card-title"> Service </h4>
                  <form id="forms" class="custom-validation"  method="POST">
                     <div class="mb-3">
                        <label class="form-label"> Iamge </label>
                        <input type="file" name="image"  class="form-control" >
                        <input type="hidden" name="old_image" value="<?php if(!empty($edit_feedback)) echo($edit_feedback->image) ?>"  class="form-control" >
                        <input type="hidden" name="edit_id" value="<?php if(!empty($edit_feedback)) echo($edit_feedback->id) ?>"  class="form-control" >
                     </div>
                     
                     <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="<?php if(!empty($edit_feedback)) echo($edit_feedback->name) ?>" class="form-control" required placeholder="Title" required>
                     </div>
                     <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea class="form-control ckeditor" id="description" name="description"><?php if(!empty($edit_feedback)) echo($edit_feedback->description) ?></textarea>
                        <script>CKEDITOR.replace( 'description' );</script>
                     </div>
                   
                     <div class="mb-0">
                        <div>
                           <button type="submit" class="btn btn-primary waves-effect">
                           Submit
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- end col -->
      </div>
      <!-- end row -->
   </div>
   <!-- container-fluid -->
</div>
<!-- End Page-content -->
</div>
<script>
   $("#forms").submit(function(event) {
           event.preventDefault();
             for ( instance in CKEDITOR.instances )
              {
              CKEDITOR.instances[instance].updateElement();
              }
           $.ajax({
                   type: "POST", 
                   url: '<?php echo base_url('Admin/Feedback/add');?>',
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
                       window.location.href= '<?php echo base_url('Admin/Feedback/all');?>';
                       
                      
                     }  
                   },
                   error:function()
                   {
                     toastr.error('Something Went Wrong..');
                   },
                   complete:function()
                   {
                   }
               });
       })
</script>
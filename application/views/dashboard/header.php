<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Dashboard | Lexa - Admin & Dashboard Template</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <!-- App favicon -->
      <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/assets/images/favicon.ico">
      <link href="<?php echo base_url(); ?>assets/admin/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
      <!-- DataTables -->
      <link href="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <link href="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Responsive datatable examples -->
      <link href="<?php echo base_url(); ?>assets/admin/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
      <!-- Bootstrap Css -->
      <link href="<?php echo base_url(); ?>assets/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="<?php echo base_url(); ?>assets/admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="<?php echo base_url(); ?>assets/admin/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
      <script src="<?php echo base_url(); ?>assets/admin/assets/libs/jquery/jquery.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
      <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
   </head>
   <body data-sidebar="dark">
      <!-- <body data-layout="horizontal" data-topbar="colored"> -->
      <!-- Begin page -->
      <div id="layout-wrapper">
      <header id="page-topbar">
         <div class="navbar-header">
            <div class="d-flex">
               <!-- LOGO -->
               <div class="navbar-brand-box">
                  <a href="index.html" class="logo logo-dark">
                  <span class="logo-sm">
                  <img src="<?php echo base_url(); ?>assets/admin/assets/images/admin-logo.png" style="height: 50px;width: 135px;" alt="" >
                  </span>
                  <span class="logo-lg">
                  <img src="<?php echo base_url(); ?>assets/admin/assets/images/admin-logo.png" style="height: 50px;width: 135px;"  alt="" >
                  </span>
                  </a>
                  <a href="index.html" class="logo logo-light">
                  <span class="logo-sm">
                  <img src="<?php echo base_url(); ?>assets/admin/assets/images/admin-logo.png" style="height: 50px;width: 135px;" alt="" >
                  </span>
                  <span class="logo-lg">
                  <img src="<?php echo base_url(); ?>assets/admin/assets/images/admin-logo.png" style="height: 50px;width: 135px;" alt="">
                  </span>
                  </a>
               </div>
               <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
               <i class="mdi mdi-menu"></i>
               </button>
            </div>
            <div class="d-flex">
               <div class="dropdown d-inline-block d-lg-none ms-2">
                  <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="mdi mdi-magnify"></i>
                  </button>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                     aria-labelledby="page-header-search-dropdown">
                     <form class="p-3">
                        <div class="form-group m-0">
                           <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                              <div class="input-group-append">
                                 <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="dropdown d-none d-lg-inline-block">
                  <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                  <i class="mdi mdi-fullscreen font-size-24"></i>
                  </button>
               </div>
               <div class="dropdown d-inline-block ms-1">
                  <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="ti-bell"></i>
                  <span class="badge bg-danger rounded-pill">3</span>
                  </button>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                     <div class="p-3">
                        <div class="row align-items-center">
                           <div class="col">
                              <h5 class="m-0"> Notifications (258) </h5>
                           </div>
                        </div>
                     </div>
                     <div data-simplebar style="max-height: 230px;">
                        <a href="javascript:void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                 <div class="avatar-xs">
                                    <span class="avatar-title border-success rounded-circle ">
                                    <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">Your order is placed</h6>
                                 <div class="text-muted">
                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href="javascript:void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                 <div class="avatar-xs">
                                    <span class="avatar-title border-warning rounded-circle ">
                                    <i class="mdi mdi-message"></i>
                                    </span>
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">New Message received</h6>
                                 <div class="text-muted">
                                    <p class="mb-1">You have 87 unread messages</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href="javascript:void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                 <div class="avatar-xs">
                                    <span class="avatar-title border-info rounded-circle ">
                                    <i class="mdi mdi-glass-cocktail"></i>
                                    </span>
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">Your item is shipped</h6>
                                 <div class="text-muted">
                                    <p class="mb-1">It is a long established fact that a reader will</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href="javascript:void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                 <div class="avatar-xs">
                                    <span class="avatar-title border-primary rounded-circle ">
                                    <i class="mdi mdi-cart-outline"></i>
                                    </span>
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">Your order is placed</h6>
                                 <div class="text-muted">
                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                        <a href="javascript:void(0);" class="text-reset notification-item">
                           <div class="d-flex">
                              <div class="flex-shrink-0 me-3">
                                 <div class="avatar-xs">
                                    <span class="avatar-title border-warning rounded-circle ">
                                    <i class="mdi mdi-message"></i>
                                    </span>
                                 </div>
                              </div>
                              <div class="flex-grow-1">
                                 <h6 class="mb-1">New Message received</h6>
                                 <div class="text-muted">
                                    <p class="mb-1">You have 87 unread messages</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 w-100 text-center" href="javascript:void(0)">
                        View all
                        </a>
                     </div>
                  </div>
               </div>
               <div class="dropdown d-inline-block">
                  <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                     data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>assets/admin/assets/images/users/user-4.jpg"
                     alt="Header Avatar">
                  </button>
                  <div class="dropdown-menu dropdown-menu-end">
                     <!-- item-->
                     <a class="dropdown-item" href="<?php echo base_url(); ?>Admin/Dashboard/profile"><i class="mdi mdi-account-circle font-size-17 text-muted align-middle me-1"></i> Profile</a>
                     <a class="dropdown-item d-block" href="<?php echo base_url(); ?>Admin/Dashboard/password"><span class="badge bg-success float-end">1</span><i class="mdi mdi-cog font-size-17 text-muted align-middle me-1"></i> Settings</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item text-danger" href="<?php echo base_url();   ?>Login/logout"><i class="mdi mdi-power font-size-17 text-muted align-middle me-1 text-danger"></i> Logout</a>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- ========== Left Sidebar Start ========== -->
      <div class="vertical-menu">
         <div data-simplebar class="h-100">
            <!--- Sidemenu -->
            <div id="sidebar-menu">
               <!-- Left Menu Start -->
               <ul class="metismenu list-unstyled" id="side-menu">
                  <li class="menu-title">Main</li>
                  <li>
                     <a href="<?php echo base_url();  ?>Admin/Dashboard" class="waves-effect">
                     <i class="mdi mdi-view-dashboard"></i>
                     <span>Dashboard</span>
                     </a>
                  </li>
                  <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Service</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo base_url();  ?>Admin/Service_category">Services Category</a></li>
                        <li><a href="<?php echo base_url();  ?>Admin/Service/All">Manage Services</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript: void(0);" class="has-arrow waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Blog</span>
                     </a>
                     <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo base_url();  ?>Admin/Blog_category">Blog Category</a></li>
                        <li><a href="<?php echo base_url();  ?>Admin/Blog/all">Manage Blog</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="<?php echo base_url();  ?>Admin/Articles/all" class="waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Articles</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo base_url();  ?>Admin/Images/all" class="waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Images</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo base_url();  ?>Admin/Ebook/all" class="waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>E-books Enquiry</span>
                     </a>
                  </li>


                  
                  <li>
                     <a href="<?php echo base_url();  ?>Admin/Contact/All" class="waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Contact-Us</span>
                     </a>
                  </li>
                  <li>
                     <a href="<?php echo base_url();  ?>Admin/Subscribe/All" class="waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Subscribe</span>
                     </a>
                  </li>
                  
                   <li>
                     <a href="<?php echo base_url();  ?>Admin/Feedback/all" class="waves-effect">
                     <i class="mdi mdi-buffer"></i>
                     <span>Client Feedback</span>
                     </a>
                  </li>
                  
               </ul>
            </div>
            <!-- Sidebar -->
         </div>
      </div>
      <!-- Left Sidebar End -->
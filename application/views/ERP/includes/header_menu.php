<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
     <li>
      <!--<h3>ERP SOFTWARE</h3>-->
     </li>
    </ul>
    <button class="btn btn-danger btn-sm" style="margin-left: auto;"><a style="color:white;" href="<?php echo base_url(); 
    ?>Admin/Logout_admin">Logout</a></button>
    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <img src="<?php echo base_url(); ?>/assets/img/fu_logo.png" width="100%" height="110px" />
    <!--<h4 style="font-weight:bold;color:#fff;padding:10px;">FUTURES AUTOMATIONS</h4>-->

    <!-- Sidebar -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url();?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Website
              </p>
            </a>
          </li>
		  <!------PRODUCT INFO--->
		
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                <span style="color:#dee2e6">Categories</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/categories/create_categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Categories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/categories/list_categories" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Categories</p>
                </a>
              </li>
            </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                <span style="color:#dee2e6">Sub Categories</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/sub_category/add_sub_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sub Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/sub_category/list_sub_category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Sub Category</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                <span style="color:#dee2e6">Products</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/products/create_products" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/products/list_products" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List Products</p>
                </a>
              </li>
            </ul>
          </li>
          
         
	

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                <span style="color:#dee2e6">General Setting</span>
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>View_admin/smtp/add_smtp" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SMTP</p>
                </a>
                <a href="<?php echo base_url(); ?>View_admin/smtp/privacy_policy" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy</p>
                </a>
              </li>
             
            </ul>
          </li>
         
		
          <!--------BILLING INFO------>
 
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

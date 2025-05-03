<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand brand_head" href="javascript:void(0)">
        <?php $info = $this->ERP_model->table_column('profile_setting');
             foreach($info as $row){ 
               echo strtoupper($row['company_name']);
                } ?>
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
          <li class="nav-item <?php if($this->uri->segment(1) == ''){ ?>active_live <?php } ?>">
              <a class="nav-link active" href="<?php echo base_url(); ?>Erp">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2) == 'departments'){ ?>active_live <?php } ?>">
            <!-- <a class="nav-link" href="<?php //echo base_url(); ?>Erp/View_erp/departments/list_departments"> -->
              <a class="nav-link" href="<?php echo base_url(); ?>erp/departments">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Departments</span>
              </a>
            </li>
            <!-- <li class="nav-item <?php if($this->uri->segment(3) == 'customer'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/customer/list_customer">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Customer</span>
              </a>
            </li> -->
            <li class="nav-item <?php if($this->uri->segment(2) == 'customers'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/customers">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Customer</span>
              </a>
            </li>
            <li class="nav-item  <?php if($this->uri->segment(2) == 'employees'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/employees">
                <i class="ni ni-tag text-primary"></i>
                <span class="nav-link-text">Employee</span>
              </a>
            </li>
            <!-- <li class="nav-item <?php if($this->uri->segment(3) == 'products'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/products/list_products">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Products</span>
              </a>
            </li> -->
            <li class="nav-item <?php if($this->uri->segment(2) == 'products'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/products">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">New Products</span>
              </a>
            </li>
            <!-- <li class="nav-item <?php if($this->uri->segment(3) == ''){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/departments/">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Quotation</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == ''){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/departments/">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Repairs</span>
              </a>
            </li> -->
            <li class="nav-item <?php if($this->uri->segment(2) == 'spare_list'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/spare_list">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Spares</span>
              </a>
            </li>
            <li class="nav-item  <?php if($this->uri->segment(3) == 'supplier'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/supplier/list_supplier">
                <i class="ni ni-tag text-default"></i>
                <span class="nav-link-text">Suppliers</span>
              </a>
            </li>
            <!-- <li class="nav-item  <?php if($this->uri->segment(2) == 'spares'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/spares">
                <i class="ni ni-tag text-default"></i>
                <span class="nav-link-text">Spares</span>
              </a>
            </li> -->
            <li class="nav-item <?php if($this->uri->segment(2) == 'invoice_generation_list'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/invoice_generation_list">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Invoice List</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2) == 'invoices'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/invoices">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Generate Invoices</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">General Settings</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
          <li class="nav-item <?php if($this->uri->segment(3) == 'profile'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/setting/profile" >
                <i class="ni ni-single-02 text-info"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == 'gst'){ ?>active_live <?php } ?>"">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/setting/gst">
                <i class="ni ni-ui-04 text-dark"></i>
                <span class="nav-link-text">GST Setting</span>
              </a>
            </li>
            <!-- <li class="nav-item <?php if($this->uri->segment(3) == 'smtp'){ ?>active_live <?php } ?>"">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/setting/smtp">
                <i class="ni ni-key-25 text-dark"></i>
                <span class="nav-link-text">SMTP Setting</span>
              </a>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
    <!-- Main content -->
    <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo base_url(); ?>assets/erp/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo strtoupper($this->session->userdata('name')); ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="<?php echo base_url(); ?>Erp/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    
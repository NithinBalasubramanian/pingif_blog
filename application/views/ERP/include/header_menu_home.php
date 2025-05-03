<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
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
            <li class="nav-item <?php if($this->uri->segment(3) == ''){ ?>active_live <?php } ?>">
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
            <li class="nav-item <?php if($this->uri->segment(2) == 'products'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>erp/products">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">New Products</span>
              </a>
            </li>
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
            <!-- <li class="nav-item <?php if($this->uri->segment(3) == 'departments'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/departments/list_departments">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Departments</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == 'customer'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/customer/list_customer">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Customer</span>
              </a>
            </li>
            <li class="nav-item  <?php if($this->uri->segment(3) == 'employee'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/employee/list_employee">
                <i class="ni ni-tag text-primary"></i>
                <span class="nav-link-text">Employee</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == 'products'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/products/list_products">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Products</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == 'departments'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/departments/list_departments">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Quotation</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == 'departments'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/departments/list_departments">
                <i class="ni ni-tag text-orange"></i>
                <span class="nav-link-text">Repairs</span>
              </a>
            </li>
            <li class="nav-item  <?php if($this->uri->segment(3) == 'supplier'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/supplier/list_supplier">
                <i class="ni ni-tag text-default"></i>
                <span class="nav-link-text">Suppliers</span>
              </a>
            </li> -->
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
            <li class="nav-item <?php if($this->uri->segment(3) == 'gst'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/setting/gst">
                <i class="ni ni-ui-04 text-dark"></i>
                <span class="nav-link-text">GST Setting</span>
              </a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(3) == 'smtp'){ ?>active_live <?php } ?>">
              <a class="nav-link" href="<?php echo base_url(); ?>Erp/View_erp/setting/smtp">
                <i class="ni ni-key-25 text-dark"></i>
                <span class="nav-link-text">SMTP Setting</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
           
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
     
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?php echo base_url(); ?>assets/erp/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold" ><?php echo strtoupper($this->session->userdata('name')); ?></span>
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
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Default</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total traffic</h5>
                      <span class="h2 font-weight-bold mb-0">350,897</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                        <i class="ni ni-active-40"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">New users</h5>
                      <span class="h2 font-weight-bold mb-0">2,356</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="ni ni-chart-pie-35"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Sales</h5>
                      <span class="h2 font-weight-bold mb-0">924</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Performance</h5>
                      <span class="h2 font-weight-bold mb-0">49,65%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
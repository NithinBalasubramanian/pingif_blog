<?php $this->load->view('ERP/include/header_part.php');?>
<body class="bg-default">
  <!-- Navbar -->
 
  <!-- Main content -->
  <div class="main-content mt--7" >
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-3">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white"><?php $info = $this->ERP_model->table_column('profile_setting');
             foreach($info as $row){ 
               echo strtoupper($row['company_name']);
                } ?></h1>
			</div>
          </div>
        </div>
      </div>
     
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
			  	<?php if($this->session->flashdata('msg_error')){ ?>
				  <div class="alert alert-danger" ><?php echo $this->session->flashdata('msg_error'); ?> </div>
				<?php } ?>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" method="post" action="<?php echo base_url(); ?>Erp/login/administration">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row " style="padding:20px;background-color:#825ee4;">
            <!-- <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <a href="" class="text-light"><small>Create new account</small></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
	  <p class="text-center pt-5" style="font-size:12px;color:#f2f2f2;">&copy; copyright
	   <script>
	    var d= new Date();
                var year=d.getFullYear();
                if(year != '2020'){
                 document.write('2020 -');
                }
                  document.write(year);
	   </script> - All Right Reserved <br>
	  <span style="font-weight:600;letter-spacing:1px;">Pingifinit Software Technology || +91 8838825568</span></p>
  </div>

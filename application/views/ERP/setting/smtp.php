<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Settings</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Settings</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">SMTP Setting</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
             
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">SMTP Setting</h3>
            </div>
            <?php $info = $this->ERP_model->table_column('smtp_setting');
             foreach($info as $row){ ?>
            <form class="container" method="post" action="<?php echo base_url() ;?>Update_all/smtp_setting/setting/1/smtp/smtp">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Email</label>
                        <input type="text" id="input-username" class="form-control" placeholder="SMTP Email" name="smtp_email" value="<?php echo $row['smtp_email']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">SMTP Host</label>
                        <input type="email" id="input-email" class="form-control" placeholder="SMTP Host" name="smtp_host" value="<?php echo $row['smtp_host']; ?>">
                      </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">SMTP Port</label>
                        <input type="text" id="input-username" class="form-control" placeholder="SMTP Port" name="smtp_port" value="<?php echo $row['smtp_port']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">SMTP Password</label>
                        <input type="password" id="input-username" class="form-control" placeholder="Password" name="smtp_pass" value="<?php echo $row['smtp_pass']; ?>">
                      </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-success mb-5" style="float:right;">Update</button>
                </div>
              </form>
            <?php } ?>
          </div>
        </div>
      </div>

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>

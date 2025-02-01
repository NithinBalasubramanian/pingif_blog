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
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">Profile</li>
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
              <h3 class="text-white mb-0">Profile</h3>
            </div>
            <?php $info = $this->ERP_model->table_column('profile_setting');
             foreach($info as $row){ ?>
            <form class="container" method="post" action="<?php echo base_url() ;?>Erp/Update_all/profile_setting/setting/1/profile/profile">
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Company Name</label>
                        <input type="text" id="input-username" class="form-control" placeholder="Username" name="company_name" value="<?php echo $row['company_name']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Contact</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="Contact" name="contact" value="<?php echo $row['contact']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Secondary Contact (optional)</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Secondary Contact" name="sec_contact" value="<?php echo $row['sec_contact']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Email</label>
                        <input  type="email" id="input-email" class="form-control"  name="email" value="<?php echo $row['email']; ?>" placeholder="user@example.com">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <textarea rows="4" class="form-control" name="address"><?php echo $row['address']; ?> </textarea>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">GSTIN & Banking</h6>
                <div class="pl-lg-4">
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">GSTIN</label>
                    <input  type="text" id="input-email" class="form-control" name="gstin" value="<?php echo $row['gstin']; ?>" placeholder="GSTIN">
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="form-control-label">Bank Name</label>
                    <input  type="text" id="input-email" class="form-control" placeholder="Bank Name">
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

<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Notification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Notification</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Notification</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Insert/notification/notification/add_notification/list_notification" enctype="multipart/form-data" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Plan Member</label>
                   <select class="form-control" name="plan">
                   <option>Select Plan</option>
                   <option value="All Member">All Member</option>
                    <option value="Free">Free</option>
                     <option value="Introductory">Introductory</option>
                      <option value="Premium">Premium</option>
                       <option value="Semi Premium">Semi Premium</option>
                   </select>
                     <input type="hidden" class="form-control" name="status" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Notification</label>
                    <textarea class="form-control" name="notification" id="exampleInputEmail1" placeholder="Enter Notification" rows="3"></textarea>
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
<?php $this->load->view('admin/includes/footer.php')?>
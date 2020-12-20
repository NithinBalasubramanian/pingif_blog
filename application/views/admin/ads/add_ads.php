<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Ads</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Ads</li>
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
                <h3 class="card-title">Add Ads</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Insert/ads/ads/add_ads/list_ads" enctype="multipart/form-data" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputEmail1" placeholder="Enter Title">
                     <input type="hidden" class="form-control" name="status" id="exampleInputEmail1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <div class="col-sm-12">
                    <input type="file" name="img" class="custom-file-input form-control mobile_full" id="exampleInputFile" >
                    <label class="custom-file-label" for="exampleInputFile">Choose Images</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Field</label>
                    <input type="text" class="form-control" name="field" id="exampleInputEmail1" placeholder="Enter Field">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" class="form-control" name="location" id="exampleInputEmail1" placeholder="Enter Location">
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
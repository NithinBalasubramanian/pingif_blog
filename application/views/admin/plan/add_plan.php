<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Plan</li>
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
                <h3 class="card-title">Add Plan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Insert/plan/plan/create_plan/list_plan" enctype="multipart/form-data" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Plan</label>
                    <input type="text" class="form-control" name="plan" id="exampleInputEmail1" placeholder="Enter Plan">
                     <input type="hidden" class="form-control" name="status" id="exampleInputEmail1" 
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" name="amount" id="exampleInputEmail1" placeholder="Enter Amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Discount</label>
                    <input type="text" class="form-control" name="discount" id="exampleInputEmail1" placeholder="Enter Discount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Final Price</label>
                    <input type="text" class="form-control" name="final_price" id="exampleInputEmail1" placeholder="Enter Final Price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Valid Month</label>
                    <input type="text" class="form-control" name="valid_month" id="exampleInputEmail1" placeholder="Enter Valid Month">
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
<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Privacy Policy</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Privacy Policy</li>
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
                <h3 class="card-title">Add Privacy Policy</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Edit_privacy/privacy/smtp/privacy_policy" enctype="multipart/form-data" method="post" >
              <?php $policy=$this->Admin_model->table_column('privacy');
              if(count($policy) > 0)
              {
                  foreach($policy as $row)
                  { ?>
                     <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Privacy Policy</label>
                    <textarea class="form-control" name="privacy" id="exampleInputEmail1" value="<?php echo $row['privacy']; ?>"><?php echo $row['privacy']; ?></textarea>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            <?php }
              }
              ?>
               
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
  <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        CKEDITOR.replace('privacy');
</script>
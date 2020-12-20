<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
				    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Post</th>
                    <th>Visit</th>
                    <th>Blog</th>
                    <th>Date Created</th>
                </tr>
                </thead>
                <tbody>
                <?php $profile = $this->Admin_model->table_column_desc("user");
					$i=1;
					if (count($profile) > 0) 
					{ 
						foreach($profile as $row)
						{ ?>
				<tr>
                  <td><?php echo $i; ?></td>
                  <td><h5 ><?php echo $row['fname']; ?></h5></td>
                  <td><h5 ><?php echo $row['lname']; ?></h5></td>
                  <td><h5 ><?php echo $row['email']; ?></h5></td>
                  <td><h5 ><?php echo $row['contact']; ?></h5></td>
                  
                   <td><label class="switch">
                        <input type="checkbox" class="switchery" data-rowid="<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" 
                        <?php if($row['status'] != 0){ ?>
                            checked
                        <?php  } ?>>
                        <span class="slider round"></span>
                 </label></td>
                  <td><h5 ><?php echo $row['posts']; ?></h5></td>
                  <td><h5 ><?php echo $row['visits']; ?></h5></td>
                  <td><h5 ><?php echo $row['block']; ?></h5></td>
                  <td><h5 ><?php echo $row['date_created']; ?></h5></td>
                  
                </tr>
				<?php  $i++; } } ?>
                </tbody>
                <tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <?php $this->load->view('admin/includes/footer.php')?>
  <script src="<?php echo base_url();?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
  $(document).ready(function(){
      
      $('.switchery').on('click',function(){
          alert("hii");
          var base_url="<?php echo base_url(); ?>";
          $.ajax({
              url:base_url+"Admin/status",
              type:'POST',
              dataType:'json',
              data:{
                  'id' = $(this).attr("#data-rowid"),
                  'tablename'='user'
              },
              success:function(data){

              }
          });
      });
  });
  </script>
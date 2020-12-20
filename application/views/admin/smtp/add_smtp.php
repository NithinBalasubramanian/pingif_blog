<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create SMTP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add SMTP</li>
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
                <h3 class="card-title">Add SMTP</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Edit_smtp/smtp/smtp/add_smtp" enctype="multipart/form-data" method="post" >
                <?php $smtp=$this->Admin_model->table_column('smtp');
                if(count($smtp) > 0)
                {
                    foreach($smtp as $row)
                    { ?>
                         <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <label class="switch">
                        <input type="checkbox" class="switchery" data-rowid="<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" <?php if($row['status'] != 0){ ?>
                            checked
                        <?php  } ?>>
                        <span class="slider round"></span>
                 </label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SMTP Port</label>
                    <input type="text" class="form-control" name="port" id="exampleInputEmail1" value="<?php echo $row['port']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SMTP Host</label>
                    <input type="text" class="form-control" name="host" id="exampleInputEmail1" value="<?php echo $row['host']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SMTP User</label>
                    <input type="text" class="form-control" name="user" id="exampleInputEmail1" value="<?php echo $row['user']; ?>">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">SMTP Password</label>
                    <input type="text" class="form-control" name="pass" id="exampleInputEmail1" value="<?php echo $row['pass']; ?>">
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
<script>
$(document).ready(function(){
    
$('.switchery').on('click', function (event) {
   
    var base_url = "<?php echo base_url(); ?>";
    $.ajax({
        url: base_url+"Admin/status",
        type: 'POST',
        dataType: 'json',
        data : {
            'id' : $(this).attr("data-rowid"),
            'tablename' : 'smtp'
        },
        success: function(data) {
            //console.log(data);
        }
    }); 
});
});
</script>
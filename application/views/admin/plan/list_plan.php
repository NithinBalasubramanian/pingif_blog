<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List Plan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List Plan</li>
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
              <h3 class="card-title">Plan List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
				    <th>Plan</th>
                    <th>Amount</th>
                    <th>Discount</th>
                    <th>Final Price</th>
                    <th>Valid Month</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $profile = $this->Admin_model->table_column_desc("plan");
					$i=1;
					if (count($profile) > 0) 
					{ 
						foreach($profile as $row)
						{ ?>
				<tr>
                  <td><?php echo $i; ?></td>
                  <td><h5 ><?php echo $row['plan']; ?></h5></td>
                   <td><h5 ><?php echo $row['amount']; ?></h5></td>
                    <td><h5 ><?php echo $row['discount']; ?></h5></td>
                     <td><h5 ><?php echo $row['final_price']; ?></h5></td>
                      <td><h5 ><?php echo $row['valid_month']; ?></h5></td>
                      <td><label class="switch">
                        <input type="checkbox" class="switchery" data-rowid="<?php echo $row['id']; ?>" value="<?php echo $row['status']; ?>" <?php if($row['status'] != 0){ ?>
                            checked
                        <?php  } ?>>
                        <span class="slider round"></span>
                 </label></td>
                  <td class="row">
                    <a href="<?php echo base_url(); ?>View_admin/plan/edit_plan/<?php echo $row['id']; ?>" class="btn btn-block btn-info col-md-6">Edit</a>
                    <a href="<?php echo base_url(); ?>Delete/plan/<?php echo $row['id']; ?>/plan/list_plan" class="col-md-6"><button type="button"  class="btn btn-block btn-danger">Delete</button></a>
                  </td>
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
            'tablename' : 'plan'
        },
        success: function(data) {
            //console.log(data);
        }
    }); 
});
});
</script>
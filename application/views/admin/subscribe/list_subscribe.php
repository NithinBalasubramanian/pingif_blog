<?php $this->load->view('admin/includes/header.php')?>
<?php $this->load->view('admin/includes/header_menu.php')?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              <h3 class="card-title">Subscriber List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
				    <th>Subscriber Email</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $profile = $this->Admin_model->table_column_desc("subscribe");
					$i=1;
					if (count($profile) > 0) 
					{ 
						foreach($profile as $row)
						{ ?>
				<tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td >
                    <a href="<?php echo base_url(); ?>Delete/subscribe/<?php echo $row['id']; ?>/subscribe/list_subscribe"><button type="button" style="margin-top:10px" class="btn btn-block btn-danger">Delete</button></a>
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
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
              <h3 class="card-title">Customer List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
				            <th>NEWS Heading</th>
                    <th>NEWS Reporter</th>
                    <th>NEWS Preview</th>
                    <th>NEWS Image</th>
                    <th>View</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $profile = $this->Admin_model->table_column_desc("news");
					$i=1;
					if (count($profile) > 0) 
					{ 
						foreach($profile as $row)
						{ ?>
				        <tr>
                  <td><?php echo $i; ?></td>
                  <td><h5 style="width:100%;height:150px;overflow:hidden;"><?php echo $row['news_heading']; ?></h5></td>
                  <td><h5><?php echo $row['news_reporter']; ?></h5></td>
                  <td><h5 style="width:100%;height:150px;overflow:hidden;"><?php echo $row['news_preview']; ?></h5></td>
                  
                  <td><img src="<?php echo base_url(); ?>assets/user/blogs/<?php echo $row['news_image']; ?>" alt="" width="150px" height="150px"></td>
                  <td><a href="<?php echo base_url(); ?>View_news/<?php echo $row['id']; ?>" class="btn btn-sm btn-info pb-2"> View </a>
                  <br>
                  <?php if($row['status'] == '1'){ ?>
                  <buttom class="btn btn-warning btn-sm hosting hosting_<?php echo $row['blog_id']; ?> mt-5" data-id="<?php echo $row['blog_id']; ?>" data-status="<?php echo $row['status']; ?>">Dehost</button>
                  <?php }else{ ?>
                  <buttom class="btn btn-success btn-sm hosting hosting_<?php echo $row['blog_id']; ?> mt-5" data-id="<?php echo $row['blog_id']; ?>" data-status="<?php echo $row['status']; ?>">Host</button>
                  <?php } ?>
                </td>
                  <td >
                    <a href="<?php echo base_url(); ?>Delete/news/<?php echo $row['id']; ?>/news/list_news"><button type="button" style="margin-top:10px" class="btn btn-block btn-danger">Delete</button></a>
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
    $(document).on('click','.hosting',function(){
      var id = $(this).data('id');
      var url ='<?php echo base_url(); ?>';
      $.ajax({
            type:'POST',
            url: url+'Home/host',
            data : 'id='+id,
            dataType : 'JSON',
            success:function(data){
              $('.hosting_'+id).toggleClass('btn-success');
              $('.hosting_'+id).toggleClass('btn-warning');
              $('.hosting_'+id).data('status',data.status);
              if(data.status == '0'){
                $('.hosting_'+id).html('Host');
              }else{
                $('.hosting_'+id).html('Dehost');
              }
            },
            error: function(data){
            }
        });
    });
  </script>
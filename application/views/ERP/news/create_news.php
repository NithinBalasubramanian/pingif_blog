<?php $this->load->view('includes/header.php')?>
<?php $this->load->view('includes/header_menu.php')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add NEWS</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add NEWS</li>
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
                <h3 class="card-title">Add NEWS</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php echo base_url(); ?>Insert/news/news/create_news/list_news" enctype="multipart/form-data" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NEWS Heading</label>
                    <input type="text" class="form-control" name="news_heading" id="exampleInputEmail1" placeholder="Enter NEWS Heading">
                  </div>
                  <div class="form-group">
                   
                   <label for="exampleInputEmail1">NEWS Category</label>
                   <select name="category_id" id="" class="form-control">
                    <option value="">Select a category</option>
                   <?php $category=$this->Admin_model->table_column('categories');
                     foreach($category as $categories_row){ ?>
                      <option value="<?php echo $categories_row['id']; ?>"><?php echo $categories_row['category_name']; ?></option>
                    <?php  }  ?>
                   </select>
                  
                 </div>
                  <div class="form-group">
                   
                   <label for="exampleInputEmail1">NEWS Reporter</label>
                   <input type="text" class="form-control" name="news_reporter" id="exampleInputEmail1" placeholder="Enter NEWS Reporter">                 
                  
                 </div>
                  <div class="form-group">
                   
                    <label for="exampleInputEmail1">NEWS Preview</label>
                    <input type="text" class="form-control" name="news_preview" id="exampleInputEmail1" placeholder="Enter NEWS preview">                 
                   
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NEWS Image</label>
                    <input type="file" class="form-control" name="news_image"  id="exampleInputEmail1" placeholder="Upload Image">     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">NEWS Content</label>
                    <textarea class="form-control" rows="5" name="news_cont" id="exampleInputEmail1" placeholder="Enter NEWS Content"></textarea>
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
  
<?php $this->load->view('includes/footer.php')?>
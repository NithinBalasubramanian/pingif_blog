<?php $this->load->view('admin/includes/header.php') ?>
<?php $this->load->view('admin/includes/header_menu.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Create Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Products</li>
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
                            <h3 class="card-title">Add Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form"
                            action="<?php echo base_url(); ?>Insert/products/products/create_products/list_products"
                            enctype="multipart/form-data" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select name="category_id" id="" class="form-control">
                                        <option value="">Select a category</option>
                                        <?php $category = $this->Admin_model->table_column('categories');
                                        foreach ($category as $categories_row) { ?>
                                            <option value="<?php echo $categories_row['id']; ?>">
                                                <?php echo $categories_row['category_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <label for="product_name">Product Name</label>
                                    <input type="text" class="form-control" name="product_name" id="product_name"
                                        placeholder="Enter Category Name">
                                </div>
                                <div class="form-group">
                                    <label for="product_image">Product Image</label>
                                    <input type="file" class="form-control" name="image" id="product_image"
                                        placeholder="Upload Image">
                                </div>
                                <div class="form-group">

                                    <label for="Price">Price</label>
                                    <input type="text" class="form-control" name="price" id="Price"
                                        placeholder="Enter Price">
                                </div>
                                <div class="form-group">

                                    <label for="discound">Discound</label>
                                    <input type="text" class="form-control" name="discound" id="discound"
                                        placeholder="Enter discound">
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

<?php $this->load->view('admin/includes/footer.php') ?>
<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Products</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Products</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#erp_products_entry" class="btn btn-sm btn-neutral">Add Products</a>
              <!-- <a href="javascript:void(0);" class="btn btn-sm btn-neutral list_del">List Deleted Products</a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">List Products</h3>
            </div>
            <div class="table-responsive ">
              <table id="escalation" class="table align-items-center  table-flush mydatatable">
                <thead class="">
                  <tr>
                    <th scope="col">S No</th>
                    <th scope="col">Products</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php foreach ($products as $product): ?>
                <tr class="dark_mode">
                    <td><?php echo $product['id']; ?></td>
                    <td><?php echo $product['name']; ?></td>
                    <td>
                    <button class="btn btn-info btn-sm edit" 
                                data-toggle="modal" 
                                data-target="#product_edit" 
                                data-id="<?php echo $product['id']; ?>"  data-name="<?php echo $product['name']; ?>">
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm status_change" data-table="products" data-id="<?php echo $product['id']; ?>">Delete</button>
                    </td>
                </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="card-footer bg-default py-4">
              
            </div>
          </div>
        </div>
      </div>
<!-- Modal for Editing product -->
<div class="modal fade" id="product_edit" tabindex="-1" role="dialog" aria-labelledby="productEditLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form id="product_list_data" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productEditLabel">Edit product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Hidden field to hold the product ID -->
          <input type="hidden" name="product_id" id="product_id">
          <div class="form-group">
            <label for="name">product Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter product Name" value="" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update product</button>
        </div>
      </div>
    </form>
  </div>
</div>
<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>
<script>
    // $(document).ready(function(){
    //     list_data();
    // });
    // function list_data()
    // {
    //     var base_url = "<?php echo base_url(); ?>";
    //     var table = 'erp_products';
    //     $.ajax({
    //         url: base_url+'Erp/List_erp_products',
    //         type: 'POST',
    //         data: "table=" + table,
    //         success: function(data) {
    //             $('.list').html(data);
    //             $('#escalation').DataTable();
    //         }
    //     });
    // }
    $(document).on('click','.list_del',function(){
        list_del_data();
        $(this).html('List Products');
        $('#page_now').html('List Deleted Products');
        $(this).removeClass('list_del');
        $(this).addClass('list_cus');
    });
    $(document).on('click','.list_cus',function(){
        list_data();
        $(this).html('List Deleted Products');
        $('#page_now').html('List Products');
        $(this).addClass('list_del');
        $(this).removeClass('list_cus');
    });
    function list_del_data()
    {
        var base_url = "<?php echo base_url(); ?>";
        var table = 'erp_products';
        $.ajax({
            url: base_url+'Erp/List_del_erp_products',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
                $('.list').html(data);
            }
        });
    }


    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');

        // Populate the modal fields
        $('#product_id').val(id);
        $('#product_edit input[name="name"]').val(name);
    
    // Set product ID in a hidden input for updating
    $('#product_edit').modal('show');
    });

    $('#product_list_data').submit(function(e) {
    e.preventDefault(); // Prevent form from reloading

    $.ajax({
        url: "<?php echo base_url(); ?>erp/product/update",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {
                alert("product updated successfully!");
                location.reload(); // Refresh page to reflect changes
            } else {
                alert("Failed to update product!");
            }
        },
        error: function() {
            alert("Error occurred while updating product!");
        }
    });
  });
</script>
<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Spares</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>erp/spare_list">Spares</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Spares</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#spare_entry" class="btn btn-sm btn-neutral">Add Spare</a>
              <a href="javascript:void(0);" class="btn btn-sm btn-neutral list_del">List Deleted Spares</a>
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
              <h3 class="text-white mb-0">List Spares</h3>
            </div>
            <div class="table-responsive ">
              <table id="escalation" class="table align-items-center  table-flush mydatatable">
                <thead class="">
                  <tr>
                    <th scope="col">S No</th>
                    <th scope="col">Spare Name</th>
                    <th scope="col">Spare Code</th>
                    <th scope="col">Sapre Type</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php foreach ($spares as $spare): ?>
                    <tr class="dark_mode">
                        <td><?php echo $spare['id']; ?></td>
                        <td><?php echo $spare['spare_name']; ?></td>
                        <td><?php echo $spare['spare_code']; ?></td>
                        <td><?php echo $spare['spare_type']; ?></td>
                        <td>
                        <button class="btn btn-info btn-sm edit" data-toggle="modal" 
                                data-target="#spare_edit" 
                                data-id="<?php echo $spare['id']; ?>"  
                                data-spare_name="<?php echo $spare['spare_name']; ?>"  
                                data-spare_code="<?php echo $spare['spare_code']; ?>"  
                                data-spare_type="<?php echo $spare['spare_type']; ?>"> 
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm status_change" data-table="spare" data-id="<?php echo $spare['id']; ?>">Delete</button>
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

<!-- add employee -->
<div class="modal fade" id="spare_entry" tabindex="-1" role="dialog" aria-labelledby="employeeEntryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Spare</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="spare_data" method="post">
                <div class="modal-body">
                    <input type="hidden" name="status" value="1">
        <div class="form-group">
            <label for="name">Spare Name</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Spare Name" name="spare_name" required>
        </div>
        <div class="form-group">
            <label for="name">Spare Code</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Spare Code" name="spare_code" required>
        </div>
        <div class="form-group">
            <label for="name">Spare Type</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Spare Type" name="spare_type" required>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal for Editing Employee -->
<div class="modal fade" id="spare_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Spare</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="spare_list_data" method="post">
      <div class="modal-body">
      <input type="hidden" name="spare_id" id="spare_id">
        <div class="form-group">
                <label for="name">Spare Name</label><span>*</span>
                <input type="text" class="form-control" placeholder="Enter Spare Name" name="spare_name" required>
            </div>
            <div class="form-group">
                <label for="name">Spare Code</label><span>*</span>
                <input type="text" class="form-control" placeholder="Enter Spare Code" name="spare_code" required>
            </div>
            <div class="form-group">
                <label for="name">Spare Type</label><span>*</span>
                <input type="text" class="form-control" placeholder="Enter Spare Type" name="spare_type" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
      </div>
      
      </form>
    </div>
  </div>
</div>

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>
<script>
    $(document).on('click','.list_del',function(){
        list_del_data();
        // $(this).html('List Spare');
        $('#page_now').html('List Deleted Spares');
        $(this).removeClass('list_del');
        $(this).addClass('list_cus');
    });
    $(document).on('click','.list_cus',function(){
        list_data();
        $(this).html('List Deleted Spares');
        $('#page_now').html('List Spares');
        $(this).addClass('list_del');
        $(this).removeClass('list_cus');
    });
    function list_del_data()
    {
        var base_url = "<?php echo base_url(); ?>";
        var table = 'spares';
        $.ajax({
            url: base_url+'erp/List_del_spares',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
                $('.list').html(data);
            }
        });
    }

    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        var name = $(this).data('spare_name');
        var code = $(this).data('spare_code');
        var type = $(this).data('spare_type');

        // Populate the modal fields
        $('#spare_id').val(id);
        $('#spare_edit input[name="spare_name"]').val(name);
        $('#spare_edit input[name="spare_code"]').val(code);
        $('#spare_edit input[name="spare_type"]').val(type);
    // Set spare ID in a hidden input for updating
    $('#spare_edit').modal('show');
    });

    $('#spare_list_data').submit(function(e) {
    e.preventDefault(); // Prevent form from reloading

    $.ajax({
        url: "<?php echo base_url(); ?>erp/spares/update",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {
                alert("Employee updated successfully!");
                location.reload(); // Refresh page to reflect changes
            } else {
                alert("Failed to update Spare!");
            }
        },
        error: function() {
            alert("Error occurred while updating Spare!");
        }
    });
});

// add spare
$(document).ready(function() {

    // Delete/Status Change Handler
    $('.status_change').click(function() {
        const id = $(this).data('id');
        const table = 'spares';
        
        if(confirm('Are you sure you want to delete this spare?')) {
            $.ajax({
                url: '<?= base_url('erp/status_change') ?>',
                method: 'POST',
                dataType: 'json',
                data: {
                    id: id,
                    table: table,
                    status: 0  // Setting status to 0 for deletion
                },
                success: function(response) {
                    if(response.success) {
                        alert('Spare deleted successfully!');
                        location.reload(); // Refresh the page
                    } else {
                        alert('Failed to delete spare!');
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    alert('Error deleting spare!');
                }
            });
        }
    });

    // Insert Spare Data
    $('#spare_data').submit(function(e) {
        e.preventDefault(); // Prevent default form submission
        $.ajax({
            url: "<?php echo base_url(); ?>erp/spares/add",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    alert("Spare added successfully!");
                    $('#employee_entry').modal('hide');
                    location.reload(); // Reload the page to reflect changes
                } else {
                    alert("Failed to add Spare. Please try again!");
                }
            },
            error: function() {
                alert("Error occurred while inserting spare data!");
            }
        });
    });
});



</script>
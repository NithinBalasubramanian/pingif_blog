<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Spares List</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Spares</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Spares</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#spare_entry" class="btn btn-sm btn-neutral">Add Spares</a>
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
                    <th scope="col">Spare Type</th>
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
                        <button class="btn btn-info btn-sm edit" 
                                data-toggle="modal" 
                                data-target="#spare_edit" 
                                data-id="<?= $spare['id'] ?>" 
                                data-name="<?= $spare['spare_name'] ?>" 
                                data-code="<?= $spare['spare_code'] ?>" 
                                data-type="<?= $spare['spare_type'] ?>">
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

<!-- add spare -->
<div class="modal fade" id="spare_entry" tabindex="-1" role="dialog" aria-labelledby="spareEntryModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add spare</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="spare_data" method="post">
                <div class="modal-body">
                    <input type="hidden" name="status" value="1">
        <div class="form-group">
            <label for="name">spare Name</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter spare Name" name="spare_name" required>
        </div>
        <div class="form-group">
            <label for="name">spare code</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter code" name="spare_code" required>
        </div>
        <div class="form-group">
            <label for="name">spare type</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter type Id" name="spare_type" required>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sm btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Edit Spare Modal -->
<div class="modal fade" id="spare_edit" tabindex="-1" role="dialog" aria-labelledby="editSpareModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Spare</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="spare_edit_form" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit_spare_id">
                    <div class="form-group">
                        <label>Spare Name <span>*</span></label>
                        <input type="text" class="form-control" name="spare_name" id="edit_spare_name" required>
                    </div>
                    <div class="form-group">
                        <label>Spare Code <span>*</span></label>
                        <input type="text" class="form-control" name="spare_code" id="edit_spare_code" required>
                    </div>
                    <div class="form-group">
                        <label>Spare Type <span>*</span></label>
                        <input type="text" class="form-control" name="spare_type" id="edit_spare_type" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-sm btn-primary">Update Spare</button>
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
        $(this).html('List Spares');
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
        var table = 'spare';
        $.ajax({
            url: base_url+'erp/List_del_spare',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
                $('.list').html(data);
            }
        });
    }

// Handle Edit Button Click
$(document).on('click', '.edit', function() {
    // Get data from button attributes
    const id = $(this).data('id');
    const name = $(this).data('name');
    const code = $(this).data('code');
    const type = $(this).data('type');

    // Set values in edit modal
    $('#edit_spare_id').val(id);
    $('#edit_spare_name').val(name);
    $('#edit_spare_code').val(code);
    $('#edit_spare_type').val(type);
});

// Handle Edit Form Submission
$('#spare_edit_form').submit(function(e) {
    e.preventDefault();
    
    $.ajax({
        url: "<?= base_url('erp/update_spare') ?>",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {
                alert("Spare updated successfully!");
                $('#spare_edit').modal('hide');
                location.reload();
            } else {
                alert("Failed to update spare: " + response.message);
            }
        },
        error: function(xhr) {
            alert("Error occurred while updating spare!");
        }
    });
});

// Fetch Departments when Modal Opens
$(document).ready(function() {
    // Insert spare Data
    $('#spare_data').submit(function(e) {
        e.preventDefault(); // Prevent default form submission
        $.ajax({
            url: "<?php echo base_url(); ?>erp/spares/add",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    alert("spare added successfully!");
                    $('#spare_entry').modal('hide');
                    location.reload(); // Reload the page to reflect changes
                } else {
                    alert("Failed to add spare. Please try again!");
                }
            },
            error: function() {
                alert("Error occurred while inserting spare data!");
            }
        });
    });
});



</script>
<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<style>
  .link-white-hover-blue {
  color: white;           
  text-decoration: none; 
  transition: color 0.3s ease;
}

.link-white-hover-blue:hover {
  color: #5e72e4;           
}

</style>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Customers</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Customers</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Customers</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#customer_add" class="btn btn-sm btn-neutral">Add Customer</a>
              <!-- <a href="javascript:void(0);" class="btn btn-sm btn-neutral list_del">List Deleted Customers</a> -->
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
              <h3 class="text-white mb-0">List Customer</h3>
            </div>
            <div class="table-responsive ">
              <table id="escalation" class="table align-items-center  table-flush mydatatable tablePage">
                <thead class="">
                  <tr>
                    <th scope="col">S No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Secondary Contact</th>
                    <th scope="col">Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php foreach ($customers as $customer): ?>
                <tr class="dark_mode">
                        <td><?php echo $customer['id']; ?></td>
                        <td>
                          <a class="link-white-hover-blue" href="<?= base_url('erp/customer_dashboard/'.$customer['id']) ?>">
                            <?= $customer['name']; ?>
                          </a>
                        </td>
                        <td><?php echo $customer['contact']; ?></td>
                        <td><?php echo $customer['email']; ?></td>
                        <td><?php echo $customer['sec_contact']; ?></td>
                        <td><?php echo $customer['address']; ?></td> 
                        <td>
                        <button class="btn btn-info btn-sm edit" data-toggle="modal" 
                                data-target="#customer_edit" 
                                data-id="<?php echo $customer['id']; ?>"  
                                data-name="<?php echo $customer['name']; ?>"  
                                data-contact="<?php echo $customer['contact']; ?>"  
                                data-email="<?php echo $customer['email']; ?>"  
                                data-address="<?php echo $customer['address']; ?>"  
                                data-sec-contact="<?php echo $customer['sec_contact']; ?>"  
                                data-due="<?php echo $customer['due']; ?>">
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm status_change" data-table="customer" data-id="<?php echo $customer['id']; ?>">Delete</button>
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

      <!-- add customer -->
    <div class="modal fade" id="customer_add" tabindex="-1" role="dialog" aria-labelledby="customerEntryModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="customer_data_add" method="post">
                    <div class="modal-body">
                        <input type="hidden" name="status" value="1">
            <div class="form-group">
                <label for="name">customer Name</label><span>*</span>
                <input type="text" class="form-control" placeholder="Enter customer Name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">Contact</label><span>*</span>
                <input type="text" class="form-control" placeholder="Enter Contact" name="contact" required>
            </div>
            <div class="form-group">
                <label for="name">Email Id</label><span>*</span>
                <input type="text" class="form-control" placeholder="Enter Email Id" name="email" required>
            </div>
            <div class="form-group">
                <label for="name">Address</label><span>*</span>
                <textarea type="text" class="form-control" placeholder="Enter Address" name="address" required></textarea>
            </div>
            <div class="form-group">
              <label for="department">Department</label><span></span>
              <select class="form-control" name="department" id="department">
                  <option value="">Select Department</option>
              </select>
            </div>
            <div class="form-group">
                <label for="name">Secondary Contact</label><span>(optional)</span>
                <input type="text" class="form-control" placeholder="Enter Secondary Contact" name="sec_contact">
            </div>
            <div class="form-group">
                <label for="name">Due</label><span>(optional)</span>
                <input type="text" class="form-control" placeholder="Enter Due Amount" name="due">
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

      <!-- Modal for Editing customer -->
<div class="modal fade" id="customer_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="customer_list_data" method="post">
      <div class="modal-body">
      <input type="hidden" name="customer_id" id="customer_id">
        <div class="form-group">
            <label for="name">customer Name</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter customer Name" name="name">
        </div>
        <div class="form-group">
            <label for="name">Contact</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Contact" name="contact">
        </div>
        <div class="form-group">
            <label for="name">Email Id</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Email Id" name="email">
        </div>
        <div class="form-group">
            <label for="name">Address</label><span>*</span>
            <textarea type="text" class="form-control" placeholder="Enter Address" name="address"></textarea>
        </div>
        <div class="form-group">
            <label for="name">Secondary Contact</label>
            <input type="text" class="form-control" placeholder="Enter Secondary Contact" name="sec_contact">
        </div>
        <div class="form-group">
            <label for="name">Due</label>
            <input type="text" class="form-control" placeholder="Enter Due Amount" name="due">
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

  // Fetch Departments when Modal Opens
$(document).ready(function() {
    $('#customer_add').on('shown.bs.modal', function () {
        $.ajax({
            url: "<?php echo base_url(); ?>erp/json/departments",
            type: "GET",
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    let departmentDropdown = $("#department");
                    console.log("oi-cus",departmentDropdown);
                    
                    departmentDropdown.empty();
                    departmentDropdown.append('<option value="">Select Department</option>');
                    $.each(response.departments, function(index, department) {
                        departmentDropdown.append('<option value="' + department.id + '">' + department.name + '</option>');
                    });
                }
            }
        });
    });
    // Insert customer Data
    $('#customer_data_add').submit(function(e) {
        e.preventDefault(); // Prevent default form submission
        $.ajax({
            url: "<?php echo base_url(); ?>erp/customer/add",
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                if (response.status === "success") {
                    alert("customer added successfully!");
                    $('#customer_add').modal('hide');
                    location.reload(); // Reload the page to reflect changes
                } else {
                    alert("Failed to add customer. Please try again!");
                }
            },
            error: function() {
                alert("Error occurred while inserting customer data!");
            }
        });
    });
    // $(document).ready(function(){
    //     list_data();
    // });
    // function list_data()
    // {
    //     var base_url = "<?php echo base_url(); ?>";
    //     var table = 'customer';
    //     $.ajax({
    //         url: base_url+'Erp/List_customer',
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
        $(this).html('List Customers');
        $('#page_now').html('List Deleted Customers');
        $(this).removeClass('list_del');
        $(this).addClass('list_cus');
    });

    $(document).on('click', '.edit', function() {
        var id = $(this).data('id');
        var name = $(this).data('name');
        var contact = $(this).data('contact');
        var email = $(this).data('email');
        var address = $(this).data('address');
        var secContact = $(this).data('sec-contact');
        var due = $(this).data('due');

        // Populate the modal fields
        $('#customer_id').val(id);
        $('#customer_edit input[name="name"]').val(name);
        $('#customer_edit input[name="contact"]').val(contact);
        $('#customer_edit input[name="email"]').val(email);
        $('#customer_edit textarea[name="address"]').val(address);
        $('#customer_edit input[name="sec_contact"]').val(secContact);
        $('#customer_edit input[name="due"]').val(due);
    
    // Set customer ID in a hidden input for updating
    $('#customer_edit').modal('show');
    });

    $('#customer_list_data').submit(function(e) {
    e.preventDefault(); // Prevent form from reloading

    $.ajax({
        url: "<?php echo base_url(); ?>erp/customer/update",
        type: "POST",
        data: $(this).serialize(),
        dataType: "json",
        success: function(response) {
            if (response.status === "success") {
                alert("customer updated successfully!");
                location.reload(); // Refresh page to reflect changes
            } else {
                alert("Failed to update customer!");
            }
        },
        error: function() {
            alert("Error occurred while updating customer!");
        }
    });
});
});

    // $(document).on('click','.list_cus',function(){
    //     list_data();
    //     $(this).html('List Deleted Customers');
    //     $('#page_now').html('List Customers');
    //     $(this).addClass('list_del');
    //     $(this).removeClass('list_cus');
    // });
    // function list_del_data()
    // {
    //     var base_url = "<?php echo base_url(); ?>";
    //     var table = 'customer';
    //     $.ajax({
    //         url: base_url+'Erp/List_del_customer',
    //         type: 'POST',
    //         data: "table=" + table,
    //         success: function(data) {
    //             $('.list').html(data);
    //             $('#escalation').DataTable();
    //         }
    //     });
    // }
</script>
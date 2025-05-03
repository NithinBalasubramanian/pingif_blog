<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Departments</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Departments</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Departments</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#department_entry" class="btn btn-sm btn-neutral">Add Departments</a>
              <a href="javascript:void(0);" class="btn btn-sm btn-neutral list_del">List Deleted Departments</a>
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
              <h3 class="text-white mb-0">List Departments</h3>
            </div>
            <div class="table-responsive ">
              <table class="table align-items-center  table-flush mydatatable">
                <thead class="">
                  <tr>
                    <th scope="col">S No</th>
                    <th scope="col">Department</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php foreach ($departments as $department): ?>
                    <tr class="dark_mode">
                        <td><?php echo $department['id']; ?></td>
                        <td> 
                        <!-- Wrap department name in a clickable link -->
                        <a href="#" class="dept-employees"  style="font-size: .8125rem;color: #fff;"
                          data-id="<?php echo $department['id']; ?>" 
                          data-name="<?php echo $department['name']; ?>">
                          <?php echo $department['name']; ?>
                        </a>
                        </td>
                        <td>
                        <button class="btn btn-info btn-sm edit" 
                                data-toggle="modal" 
                                data-target="#department_edit" 
                                data-id="<?php echo $department['id']; ?>"  data-name="<?php echo $department['name']; ?>">
                            Edit
                        </button>
                        <button class="btn btn-danger btn-sm status_change" data-table="departments" data-id="<?php echo $department['id']; ?>">Delete</button>
                           
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
<!-- Modal for Editing Department -->
<div class="modal fade" id="department_edit" tabindex="-1" role="dialog" aria-labelledby="departmentEditLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="<?php echo site_url('erp/departments/update'); ?>" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="departmentEditLabel">Edit Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Hidden field to hold the department ID -->
          <input type="hidden" name="id" value="">
          <div class="form-group">
            <label for="name">Department Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Department Name" value="" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update Department</button>
        </div>
      </div>
    </form>
  </div>
</div>


 <!-- New Modal for Displaying Employees in a Department -->
 <div class="modal fade" id="employeesModal" tabindex="-1" role="dialog" aria-labelledby="employeesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="employeesModalLabel">Employees for Department: <span id="deptNameTitle"></span></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Container for employee data -->
          <div id="deptEmployeesContent">
            <!-- Employee data will be loaded here via AJAX -->
            <p class="text-center">Loading employees...</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>
<script>
    // $(document).ready(function(){
    //     list_data();
    // });
    function list_data()
    {
        var base_url = "<?php echo base_url(); ?>";
        console.log("base",base_url);
        
        var table = 'departments';
        $.ajax({
            url: base_url+'Erp/List_departments',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
            console.log('test',data);
            
                $('.list').html(data);
            }
        });
    }
    $(document).on('click','.list_del',function(){
        list_del_data();
        $(this).html('List Departments');
        $('#page_now').html('List Deleted Departments');
        $(this).removeClass('list_del');
        $(this).addClass('list_cus');
    });
    $(document).on('click','.list_cus',function(){
        list_data();
        $(this).html('List Deleted Departments');
        $('#page_now').html('List Departments');
        $(this).addClass('list_del');
        $(this).removeClass('list_cus');
    });
    function list_del_data()
    {
        var base_url = "<?php echo base_url(); ?>";
        var table = 'departments';
        $.ajax({
            url: base_url+'Erp/List_del_departments',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
                $('.list').html(data);
            }
        });
    }

    // When an Edit button is clicked, fetch department details via AJAX
    $(document).on('click', '.edit', function(){
        var departmentId = $(this).data('id');
        $.ajax({
            url: "<?php echo site_url('departments/get_department'); ?>",
            method: "POST",
            data: { id: departmentId },
            dataType: "json",
            success: function(data) {
                // Fill the modal form fields with the returned data
                $('#department_edit input[name="id"]').val(data.id);
                $('#department_edit input[name="name"]').val(data.name);
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error: " + status + error);
            }
        });
    });

    $('#department_edit').on('show.bs.modal', function(e) {
        var button = $(e.relatedTarget); // Button that triggered the modal
        var departmentId = button.data('id'); // Extract info from data-* attributes
        var departmentName = button.data('name');

        // Update the modal's form fields
        var modal = $(this);
        modal.find('input[name="id"]').val(departmentId);
        modal.find('input[name="name"]').val(departmentName);
    });


    // department employee
    $(document).on('click', '.dept-employees', function(e) {
    e.preventDefault();
    var departmentId = $(this).data('id');
    var departmentName = $(this).data('name');

    // Set the modal title
    $('#deptNameTitle').text(departmentName);

    // Show the employees modal
    $('#employeesModal').modal('show');

    // Show loading message while data is fetched
    $('#deptEmployeesContent').html('<p class="text-center">Loading employees...</p>');

    // AJAX call to fetch employees for the department
    $.ajax({
        url: "<?php echo site_url('Employee/getDepartmentEmployees'); ?>",
        type: "POST",
        data: { department_id: departmentId },
        dataType: "json",  // Ensure the response is JSON
        success: function(response) {
            console.log(response);

            var employeesHtml = `<table id="escalation" class="table align-items-center  table-flush mydatatable">
                <thead >
                    <tr class="dark_mode">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>`;

            if (response.employees.length > 0) {
                $.each(response.employees, function(index, employee) {
                    employeesHtml += `
                        <tr class="dark_mode">
                            <td>${employee.id}</td>
                            <td>${employee.name}</td>
                            <td>${employee.email}</td>
                            <td>${employee.contact}</td>
                        </tr>`;
                });
            } else {
                employeesHtml += `<tr><td colspan="4" class="text-center text-danger">There is no data belonging to this department</td></tr>`;
            }

            employeesHtml += `</tbody></table>`;

            // Load the returned HTML into the modal body container
            $('#deptEmployeesContent').html(employeesHtml);
        },
        error: function(xhr, status, error) {
            console.error("AJAX Error: " + status + " " + error);
            $('#deptEmployeesContent').html('<p class="text-danger text-center">Unable to load employees.</p>');
        }
    });
});



</script>
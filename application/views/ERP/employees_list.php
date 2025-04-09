<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Employees</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Employees</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Employees</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#employee_entry" class="btn btn-sm btn-neutral">Add Employee</a>
              <!-- <a href="javascript:void(0);" class="btn btn-sm btn-neutral list_del">List Deleted Employees</a> -->
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
              <h3 class="text-white mb-0">List Employees</h3>
            </div>
            <div class="table-responsive ">
              <table id="escalation" class="table align-items-center  table-flush mydatatable">
                <thead class="">
                  <tr>
                    <th scope="col">S No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <!-- <th scope="col">Secondary Contact</th> -->
                    <th scope="col">Address</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                <?php foreach ($employees as $employee): ?>
                    <tr class="dark_mode">
                        <td><?php echo $employee['id']; ?></td>
                        <td><?php echo $employee['name']; ?></td>
                        <td><?php echo $employee['contact']; ?></td>
                        <td><?php echo $employee['email']; ?></td>
                        <td><?php echo $employee['address']; ?></td>
                        <!-- <td>
			<button class="btn btn-info btn-sm edit" data-url="http://localhost/futures/Erp/View_erp/departments/edit_department" data-id="3" fdprocessedid="fp5ctj">Edit</button>
			<button class="btn btn-danger btn-sm status_change" data-table="departments" data-id="3" fdprocessedid="x0m4q">Delete</button>
		   </td> -->
                        <td>
                            <a href="<?php echo site_url('employee/edit/'.$employee['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?php echo site_url('employee/delete/'.$employee['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>
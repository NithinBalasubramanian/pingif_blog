<div class="modal fade" id="customer_entry" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="<?php echo base_url(); ?>Erp/insert_cont/customer" method="post" id="customer_data">
      <div class="modal-body">
      <input type="hidden" name="status" value="1">
        <div class="form-group">
            <label for="name">Customer Name</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Customer Name" name="name" required>
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

<div class="modal fade" id="employee_entry" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="<?php echo base_url(); ?>Erp/insert_cont/employee" method="post" id="employee_data">
      <div class="modal-body">
      <input type="hidden" name="status" value="1">
        <div class="form-group">
            <label for="name">Employee Name</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Employee Name" name="name" required>
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

<div class="modal fade" id="supplier_entry" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="<?php echo base_url(); ?>Erp/insert_cont/supplier" method="post" id="supplier_data">
      <div class="modal-body">
      <input type="hidden" name="status" value="1">
        <div class="form-group">
            <label for="name">Supplier Name</label><span>*</span>
            <input type="text" class="form-control" placeholder="Enter Supplier Name" name="name" required>
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
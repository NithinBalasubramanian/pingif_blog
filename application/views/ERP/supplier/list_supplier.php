<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Suppliers</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Suppliers</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="page_now">List Suppliers</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="javascript:void(0);" data-toggle="modal" data-target="#supplier_entry" class="btn btn-sm btn-neutral">Add Supplier</a>
              <a href="javascript:void(0);" class="btn btn-sm btn-neutral list_del">List Deleted Suppliers</a>
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
              <h3 class="text-white mb-0">List Suppliers</h3>
            </div>
            <div class="table-responsive ">
              <table class="table align-items-center  table-flush mydatatable">
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
<script>
    $(document).ready(function(){
        list_data();
    });
    function list_data()
    {
        var base_url = "<?php echo base_url(); ?>";
        var table = 'supplier';
        $.ajax({
            url: base_url+'Admin/List_supplier',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
                $('.list').html(data);
            }
        });
    }
    $(document).on('click','.list_del',function(){
        list_del_data();
        $(this).html('List Suppliers');
        $('#page_now').html('List Deleted Suppliers');
        $(this).removeClass('list_del');
        $(this).addClass('list_cus');
    });
    $(document).on('click','.list_cus',function(){
        list_data();
        $(this).html('List Deleted Suppliers');
        $('#page_now').html('List Suppliers');
        $(this).addClass('list_del');
        $(this).removeClass('list_cus');
    });
    function list_del_data()
    {
        var base_url = "<?php echo base_url(); ?>";
        var table = 'supplier';
        $.ajax({
            url: base_url+'Admin/List_del_supplier',
            type: 'POST',
            data: "table=" + table,
            success: function(data) {
                $('.list').html(data);
            }
        });
    }
</script>
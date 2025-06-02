<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Customer Dashboard</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="<?= base_url('erp/customers') ?>">Customers</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $customer['name'] ?></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <button class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#addProductModal">
                        Add Product
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <!-- Customer Details Card -->
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Customer Details</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="text-white"><strong>Name:</strong> <?= $customer['name'] ?></p>
                            <p class="text-white"><strong>Contact:</strong> <?= $customer['contact'] ?></p>
                            <p class="text-white"><strong>Email:</strong> <?= $customer['email'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <p class="text-white"><strong>Address:</strong> <?= $customer['address'] ?></p>
                            <p class="text-white"><strong>Secondary Contact:</strong> <?= $customer['sec_contact'] ?></p>
                            <p class="text-white"><strong>Due Amount:</strong> ₹<?= number_format($customer['due'], 2) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Products Container -->
    <div class="row mt-4" id="productsContainer">
        <?php foreach ($products as $product): ?>
        <div class="col-md-4 mb-4">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent">
                    <h5 class="text-white mb-0"><?= $product['product_name'] ?></h5>
                </div>
                <div class="card-body">
                    <p class="text-white mb-1"><strong>Installed On:</strong> <?= date('d M Y', strtotime($product['installed_on'])) ?></p>
                    <p class="text-white mb-1"><strong>Warranty:</strong> <?= $product['warranty_months'] ?> months</p>
                    <p class="text-white mb-1"><strong>Installed By:</strong> <?= $product['installed_by'] ?></p>
                    <p class="text-white mb-0"><small class="text-muted">Added on <?= date('d M Y', strtotime($product['created_at'])) ?></small></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="productForm">
                <div class="modal-body">
                    <input type="hidden" name="customer_id" value="<?= $customer['id'] ?>">
                    <div class="form-group">
                    <label for="product_name">Product Name</label><span></span>
                    <select class="form-control" name="product_name" id="product_name" required>
                        <option value="">Select Products</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Installation Date</label>
                        <input type="date" class="form-control" name="installation_date" required>
                    </div>
                    <div class="form-group">
                        <label>Installed By</label>
                        <input type="text" class="form-control" name="installed_by" required>
                    </div>
                    <div class="form-group">
                        <label>Warranty (months)</label>
                        <input type="number" class="form-control" name="warranty_months" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>

<script>

$(document).ready(function() {
     // Fetch Products when Modal Opens
    $('#addProductModal').on('shown.bs.modal', function () {
        $.ajax({
            url: "<?php echo base_url(); ?>erp/json/products",
            type: "GET",
            dataType: "json",
            success: function(response) {
                console.log("yyyyyy", response);
                
                if (response.status === "success") {
                    let productDropdown = $("#product_name");
                    console.log("oi-cus",productDropdown);
                    
                    productDropdown.empty();
                    productDropdown.append('<option value="">Select Products</option>');
                    $.each(response.products, function(index, product) {
                        productDropdown.append('<option value="' + product.name + '">' + product.name + '</option>');
                    });
                }
            }
        });
    });

    $('#productForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: '<?= base_url('erp/customer_products/add') ?>',
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                $('#addProductModal').modal('hide');
                // Add new product card
                const product = JSON.parse(response);
                const productCard = `
                <div class="col-md-4 mb-4">
                    <div class="card bg-default shadow">
                        <div class="card-header bg-transparent">
                            <h5 class="text-white mb-0">${product.product_name}</h5>
                        </div>
                        <div class="card-body">
                            <p class="text-white mb-1"><strong>Installed On:</strong> ${product.installed_on}</p>
                            <p class="text-white mb-1"><strong>Warranty:</strong> ${product.warranty_months} months</p>
                            <p class="text-white mb-1"><strong>Installed By:</strong> ${product.installed_by}</p>
                        </div>
                    </div>
                </div>`;
                $('#productsContainer').append(productCard);
            }
        });
    });
});
</script>
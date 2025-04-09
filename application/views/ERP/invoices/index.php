<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Create Invoice</h6>
                </div>
            </div>
            
            <!-- Customer Selection -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <select class="form-control" id="customerSelect" required>
                        <option value="">Select Customer</option>
                        <?php foreach($customers as $customer): ?>
                            <option value="<?= $customer['id'] ?>"><?= $customer['name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Invoice Details</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="invoiceTable">
                        <thead class="thead-light">
                            <tr>
                                <th>Type</th>
                                <th>Product/Spare</th>
                                <th>Code/ID</th>
                                <th>Description</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr class="invoice-row">
                                <td>
                                    <select class="form-control type-select">
                                        <option value="product">Product</option>
                                        <option value="spare">Spare</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="product-select-wrapper" style="display:none;">
                                        <select class="form-control product-select">
                                            <option value="">Select Product</option>
                                            <?php foreach($products as $product): ?>
                                                <option value="<?= $product['id'] ?>"><?= $product['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="spare-select-wrapper">
                                        <select class="form-control spare-select">
                                            <option value="">Select Spare</option>
                                            <?php foreach($spares as $spare): ?>
                                                <option value="<?= $spare['id'] ?>"><?= $spare['spare_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                     <input type="text" class="form-control item-code" readonly value="">
                                </td>
                                <td><input type="text" class="form-control description"></td>
                                <td><input type="number" class="form-control qty" min="1" value="1"></td>
                                <td><input type="number" class="form-control price" step="0.01"></td>
                                <td><input type="text" class="form-control total" readonly></td>
                                <td>
                                    <button class="btn btn-success btn-sm add-row">+</button>
                                    <button class="btn btn-danger btn-sm remove-row">X</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer bg-default">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-white">Subtotal:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="subtotal" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-white">Tax (%):</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="tax" step="0.1" value="0">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label text-white">Grand Total:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="grandTotal" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-primary" id="saveInvoice">Save</button>
                                    <button class="btn btn-success" id="saveDownload">Save & Download</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>

<script>
$(document).ready(function() {
    // Initialize first row
    initializeRow($('.invoice-row:first'));

    // Add new row
    $(document).on('click', '.add-row', function() {
        const newRow = $(this).closest('tr').clone();
        initializeRow(newRow);
        $(this).closest('tr').after(newRow);
        calculateTotals();
    });

    // Remove row
    $(document).on('click', '.remove-row', function() {
        $(this).closest('tr').remove();
        calculateTotals();
    });

    // Handle type selection change
    $(document).on('change', '.type-select', function() {
        const row = $(this).closest('tr');
        const type = $(this).val();
        
        row.find('.product-select-wrapper, .spare-select-wrapper').hide();
        row.find('.' + type + '-select-wrapper').show();
        row.find('.item-code').val('');
        calculateTotals();
    });

    // Handle item selection
    $(document).on('change', '.product-select, .spare-select', function() {
        const row = $(this).closest('tr');
        const type = row.find('.type-select').val();
        const itemId = $(this).val();
        if(itemId) {
            $.ajax({
                url: `<?= base_url('erp/get_item_code/') ?>${type}`,
                method: 'POST',
                data: { item_id: itemId },
                dataType: 'json',
                success: function(response) {
                    console.log("Full response:", response); // Debugging
                    const itemCode = response.code || '';
                    row.find('.item-code').val(itemCode);
                }
            });
        }
        calculateTotals();
    });

    // Calculate totals on input
    $(document).on('input', '.qty, .price, #tax', calculateTotals);

    // Save handlers
    $('#saveInvoice, #saveDownload').click(function() {
        const download = $(this).attr('id') === 'saveDownload';
        saveInvoice(download);
    });

    function initializeRow(row) {
        row.find('select').val('');
        row.find('input').val('');
        row.find('.type-select').trigger('change');
    }

    function calculateTotals() {
        let subtotal = 0;
        
        $('.invoice-row').each(function() {
            const qty = parseFloat($(this).find('.qty').val()) || 0;
            const price = parseFloat($(this).find('.price').val()) || 0;
            const total = qty * price;
            $(this).find('.total').val(total.toFixed(2));
            subtotal += total;
        });

        const taxPercentage = parseFloat($('#tax').val()) || 0;
        const taxAmount = subtotal * (taxPercentage / 100);
        const grandTotal = subtotal + taxAmount;

        $('#subtotal').val(subtotal.toFixed(2));
        $('#grandTotal').val(grandTotal.toFixed(2));
    }

    function saveInvoice(download = false) {
        const customerId = $('#customerSelect').val();
        const invoiceData = [];
        
        if(!customerId) {
            alert('Please select a customer');
            return;
        }

        $('.invoice-row').each(function() {
            const row = $(this);
            const type = row.find('.type-select').val();
            const itemId = row.find('.' + type + '-select').val();
            const itemCode = row.find('.item-code').val(); // Get the code
            
            if(itemId) {
                invoiceData.push({
                    type: type,
                    item_id: itemId,
                    code: itemCode,
                    qty: row.find('.qty').val(),
                    price: row.find('.price').val(),
                    description: row.find('.description').val()
                });
            }
        });

        if(invoiceData.length === 0) {
            alert('Please add at least one item');
            return;
        }

        $.ajax({
            url: '<?= base_url('erp/save_invoice') ?>',
            method: 'POST',
            dataType: 'json',
            data: {
                customer_id: customerId,
                items: invoiceData,
                subtotal: $('#subtotal').val(),
                tax: $('#tax').val(),
                grand_total: $('#grandTotal').val()
            },
            success: function(response) {
                if(download) {
                    // Trigger PDF download
                    window.location.href = '<?= base_url('erp/generate_invoice_pdf/') ?>' + response.invoice_id;
                }
                alert('Invoice saved successfully!');
            }
        });
    }
});
</script>
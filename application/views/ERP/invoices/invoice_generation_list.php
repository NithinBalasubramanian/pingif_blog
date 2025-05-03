<?php $this->load->view('ERP/include/header_part.php');?>
<?php $this->load->view('ERP/include/popup.php'); ?>
<?php $this->load->view('ERP/include/header_menu');?>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Invoice List</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Invoice</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List Invoices</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="<?= base_url('erp/invoices') ?>" class="btn btn-sm btn-neutral">Create New Invoice</a>
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
                    <h3 class="text-white mb-0">Invoice List</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <thead class="thead-dark">
                            <tr>
                                <th>Invoice ID</th>
                                <th>Date</th>
                                <th>Customer Name</th>
                                <th>Subtotal</th>
                                <th>Tax</th>
                                <th>Grand Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($invoices_lists as $invoice): ?>
                            <tr>
                                <td><?= $invoice['id'] ?></td>
                                <td><?= date('d M Y', strtotime($invoice['invoice_date'])) ?></td>
                                <td><?= $invoice['customer_name'] ?></td>
                                <td><?= number_format($invoice['subtotal'], 2) ?></td>
                                <td><?= number_format($invoice['tax_amount'], 2) ?></td>
                                <td><?= number_format($invoice['grand_total'], 2) ?></td>
                                <td>
                                    <a href="<?= base_url('erp/generate_invoice_pdf/'.$invoice['id']) ?>" 
                                       class="btn btn-sm btn-primary">
                                        Download PDF
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('ERP/include/footer');?>
<?php $this->load->view('ERP/include/footer_script');?>
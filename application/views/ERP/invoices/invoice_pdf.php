<!DOCTYPE html>
<html>
<head>
    <title>Invoice #<?= $invoice['id'] ?></title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        .totals { margin-top: 20px; float: right; }
    </style>
</head>
<body>
    <div class="header">
        <h2>Invoice #<?= $invoice['id'] ?></h2>
        <p>Date: <?= date('d/m/Y', strtotime($invoice['invoice_date'])) ?></p>
        <p>Customer: <?= $invoice['customer_name'] ?></p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Description</th>
                <th>Qty</th>
                <th>Unit Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($items as $item): ?>
            <tr>
                <td><?= $item['item_type'] == 'product' ? 'Product' : 'Spare' ?></td>
                <td><?= $item['description'] ?></td>
                <td><?= $item['quantity'] ?></td>
                <td><?= number_format($item['unit_price'], 2) ?></td>
                <td><?= number_format($item['quantity'] * $item['unit_price'], 2) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <div class="totals">
        <p>Subtotal: <?= number_format($invoice['subtotal'], 2) ?></p>
        <p>Tax (<?= $invoice['tax_amount'] ?>%): <?= number_format($invoice['subtotal'] * $invoice['tax_amount'] / 100, 2) ?></p>
        <p>Grand Total: <?= number_format($invoice['grand_total'], 2) ?></p>
    </div>
</body>
</html>
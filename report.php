<?php include __DIR__ . '/../layout/header.php'; ?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Sales Report</h2>

    <?php if (!empty($salesReport)): ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Product Name</th>
                        <th>Total Quantity Sold</th>
                        <th>Total Sales (₱)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($salesReport as $report): ?>
                        <tr>
                            <td><?= htmlspecialchars($report['product_name']) ?></td>
                            <td><?= htmlspecialchars($report['total_quantity']) ?></td>
                            <td><?= number_format($report['total_sales'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info text-center" role="alert">
            No sales data found.
        </div>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="index.php?page=sales" class="btn btn-primary">Back to Sales</a>
    </div>
</div>

<?php include __DIR__ . '/../layout/footer.php'; ?>

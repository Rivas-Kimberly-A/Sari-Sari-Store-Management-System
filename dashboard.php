<?php include 'app/views/layout/header.php'; ?>

<!-- DataTables CSS -->
<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" />

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<style>
  body {
    background-color: #ffffff;
    color: #004d4d;
  }

  h2 {
    color: #008080;
  }

  table {
    background-color: white;
    border-color: #008080;
  }

  thead th {
    background-color: #008080;
    color: white;
  }

  tbody td, tbody tr {
    color: #004d4d;
  }

  tbody tr.table-danger {
    background-color: #ffecec !important;
    color: #990000;
  }

  .dataTables_filter {
    display: flex;
    align-items: center;
    gap: 8px;
  }

  .dataTables_filter input {
    background-color: #f0fafa;
    color: #004d4d;
    border: 1px solid #008080;
    padding: 5px 10px;
    border-radius: 4px;
  }

  .dataTables_filter button {
    background-color: #008080;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
  }

  .dataTables_filter button:hover {
    background-color: #006666;
  }

  .dataTables_length select {
    background-color: #f0fafa;
    color: #004d4d;
    border: 1px solid #008080;
    padding: 4px;
    border-radius: 4px;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button {
    color: #008080 !important;
    border-radius: 4px;
    padding: 4px 8px;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background-color: #008080 !important;
    color: white !important;
    border: none;
  }

  .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #006666 !important;
    color: white !important;
    border: none;
  }

  .table-bordered th, .table-bordered td {
    border: 1px solid #008080 !important;
  }
</style>

<h2>Dashboard</h2>

<table id="productTable" class="table table-bordered">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $p): ?>
    <tr <?php if ($p['quantity'] < 5) echo 'class="table-danger" title="Low stock"'; ?>>
      <td><?= $p['id'] ?></td>
      <td><?= htmlspecialchars($p['name']) ?></td>
      <td><?= number_format($p['price'], 2) ?></td>
      <td><?= $p['quantity'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<!-- DataTables Initialization -->
<script>
  $(document).ready(function () {
    const table = $('#productTable').DataTable({
      paging: true,
      searching: true,
      lengthChange: true,
      info: false,
      ordering: false,
      lengthMenu: [5, 10, 25, 50],
      language: {
        search: "_INPUT_",
        searchPlaceholder: "Search...",
        lengthMenu: "Show _MENU_ entries"
      }
    });

    // Add search button beside the input
    const $filterWrapper = $('#productTable_filter');
    $filterWrapper.append('<button id="dtSearchBtn">Search</button>');

    $('#dtSearchBtn').on('click', function () {
      const query = $filterWrapper.find('input').val();
      table.search(query).draw();
    });
  });
</script>

<?php include 'app/views/layout/footer.php'; ?>

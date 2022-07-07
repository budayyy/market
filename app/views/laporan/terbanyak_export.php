<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace | Export Penjualan</title>

  <style>
    body{
      font-family: sans-serif;
    }
    table{
      margin: 20px auto;
      border-collapse: collapse;
    }
    table th,
    table td{
      border: 1px solid #3c3c3c;
      padding: 3px 8px;
  
    }
	</style>
</head>
<body>

  <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Laporan Penjualan Terbanyak.xls");
	?>

<center>
  <h3>Data Laporan Penjualan | Bina Apps</h3>
</center>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Total Terjual</th>
        <th>Harga Total</th>
      </tr>
    </thead>
    <tbody>
    <?php $i = 1; ?>
    <?php foreach( $data['terbanyak'] as $row ) : ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $row['odd_prd_name']; ?></td>
        <td><?php echo $row['odd_qty']; ?></td>
        <td>Rp.<?php echo number_format($row['odd_totalprice']); ?></td>
      </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
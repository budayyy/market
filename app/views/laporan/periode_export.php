<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marketplace | Export Periode</title>

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
    header("Content-Disposition: attachment; filename=Data Laporan Periode Penjualan.xls");
	?>

<center>
  <h3>Data Laporan Periode Penjualan | Bina Apps</h3>
</center>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Bulan</th>
          <th>Total Barang Terjual</th>
          <th>Harga Total</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1; ?>
      <?php foreach($data['periode'] as $row) : ?>
        <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo date('F', strtotime($row['odd_create'])); ?></td>
          <td><?php echo $row['total_terjual']; ?></td>
          <td><?php echo $row['harga_total']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
</body>
</html>
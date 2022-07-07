<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Marketplace | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <small class="float-right"> <b>Date: <?= date("Y-m-d", strtotime($data['orderId']['odr_date'])); ?></b></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
            <strong><?= $data['orderId']['rtl_name']  ?></strong><br>
                    <?= $data['orderId']['rtl_addres']  ?>
                    <br>
                    No HP: <?= $data['orderId']['rtl_phone']  ?><br>
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        Kepada
          <address>
            <strong><?= $data['orderId']['mb_name']; ?></strong><br>
                    <?= $data['orderId']['adr_address']; ?>
                    <br>
                    No HP: <?= $data['orderId']['mb_phone']; ?>
                    <br>
                    Email: <?= $data['orderId']['mb_email']; ?>
                  </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
      <br>
                  <b>ID Order:</b> #<?= $data['orderId']['odr_id']; ?>
                  <br>
                  <b>Dibayar Pada: </b><?= date("Y-m-d", strtotime($data['orderId']['odr_date'])); ?>
                  <br>
                  <b>Pengiriman : </b> <?=$data['orderId']['shp_name']; ?> <br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Qty</th>
                <th>Produk</th>
                <th>Category</th>
                <th>Satuan</th>
                <th>Harga</th>
              </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach ( $data['allProduct'] as $row ) : ?>
                <tr>
                  <td><?= $row['odd_qty'];  ?></td>
                  <td><?= $row['odd_prd_name'];  ?></td>
                  <td><?= $row['ctg_name']; ?></td>
                  <td>IDR <?= number_format($row['odd_price']);  ?></td>
                  <td>IDR <?= number_format($row['odd_totalprice']);  ?></td>
                </tr>
                <?php $total += $row['odd_totalprice']; ?>
                <?php endforeach; ?>
            </tbody>
          </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
                  <p class="lead">Metode Pembayaran:</p>
                  <b><?php echo $data['orderId']['pay_name'] ?></b>
        <!-- <img src="../../dist/img/credit/visa.png" alt="Visa">
        <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="../../dist/img/credit/american-express.png" alt="American Express">
        <img src="../../dist/img/credit/paypal2.png" alt="Paypal"> -->
      </div>
      <!-- /.col -->
      <div class="col-6">
      <p class="lead">Pembayaran pada  
                    <?= date("Y-m-d", strtotime($data['orderId']['odr_date'])); ?>
                  </p>

        <div class="table-responsive">
          <table class="table">
                      <tr>
                        <th style="width:50%">Total Produk:</th>
                        <td>IDR <?= number_format($total); ?></td>
                      </tr>
                      <!-- <tr>
                        <th>Biaya Admin</th>
                        <td>IDR 2.500</td>
                      </tr> -->
                      <tr>
                        <th>Biaya Pengiriman:</th>
                        <td>IDR <?= number_format($data['orderId']['odr_ongkir']);  ?></td>
                      </tr>
                      <tr>
                        <th>Total yang dibayar:</th>
                        <td>IDR  <?= number_format($totalBayar = $total + $data['orderId']['odr_ongkir']);  ?></td>
                      </tr>
                    </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <a href="<?= BASEURL; ?>/orders"><i class="fas fa-arrow-left"></i></a> Orders / #<?php echo $data['orderId']['odr_id']; ?>
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Detail Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3 callout callout-info">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <small class="float-right"><b>Date: 
                      <?= date("Y-m-d", strtotime($data['orderId']['odr_date'])); ?>
                    </b></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Dari
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
                        <?php if ($data['orderId']['odr_status'] == 'Belum Dibayar') { ?>
                          <p class="badge badge-danger">Belum Dibayar</p>
                        <?php } elseif ( $data['orderId']['odr_status'] == 'Dikirim' ) { ?>
                          <p class="badge badge-primary">Dikirim</p>
                        <?php } elseif ( $data['orderId']['odr_status'] == 'Dikemas') { ?>
                          <p class="badge badge-warning">Dikemas</p>
                        <?php } elseif ( $data['orderId']['odr_status'] == 'Selesai') { ?>
                          <p class="badge badge-success">Selesai</p>
                        <?php } elseif ( $data['orderId']['odr_status'] == 'Dibatalkan' ) { ?>
                          <p class="badge badge-secondary">Dibatalkan</p>
                        <?php } ?>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <tr>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
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

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="<?php echo BASEURL; ?>/orders/invoice/<?= $row['odr_id']?>" target="_blank" class="btn btn-primary float-right text-white text-decoration-none">
                      <i class="fas fa-print"></i> Print
                  </a>
                </div>
              </div>
            </div>
            <!-- /.invoice -->
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
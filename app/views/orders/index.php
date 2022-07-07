  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper pt-4">
    <!-- Content Header (Page header) -->
    <!-- <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div>
        </div>
      </div>
    </section> -->

    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            <?php FLasher::flash(); ?>
          </div>
        </div>
      </div>  
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <h5><b>Daftar Orders</b></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-striped text-center">
                  <thead>
                  <tr>
                    <th>ID order</th>
                    <th>Tanggal</th>
                    <th>Nama</th>
                    <th>Pengiriman</th>
                    <th>Retail</th>
                    <th>Payment</th>
                    <th>Alamat</th>
                    <th>Total Pembayaran</th>
                    <th>Orders Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ( $data['order'] as $row ) : ?>
                    <tr>
                      <td><a href="<?php echo BASEURL;?>/orders/detail/<?= $row['odr_id']?>"><?= $row['odr_id']; ?>
                    </a></td>
                      <td><?= date("d/m/Y", strtotime($row['odr_date'])); ?></td>
                      <td><?= $row['mb_name']; ?></td>
                      <td><?= $row['shp_name']; ?></td>
                      <td><?= $row['rtl_name']; ?></td>
                      <td><?= $row['pay_name']; ?></td>
                      <td><?= $row['adr_address']; ?></td>
                      <td>
                        Rp. <?= number_format($row['total_bayar']); ?>
                      </td>
                      <td>
                        <?php if ($row['odr_status'] == 'Belum Dibayar') { ?>
                          <p class="badge badge-danger">Belum Dibayar</p>
                        <?php } elseif ( $row['odr_status'] == 'Dikirim' ) { ?>
                          <p class="badge badge-primary">Dikirim</p>
                        <?php } elseif ( $row['odr_status'] == 'Dikemas') { ?>
                          <p class="badge badge-warning">Dikemas</p>
                        <?php } elseif ( $row['odr_status'] == 'Selesai') { ?>
                          <p class="badge badge-success">Selesai</p>
                        <?php } elseif ( $row['odr_status'] == 'Dibatalkan' ) { ?>
                          <p class="badge badge-secondary">Dibatalkan</p>
                        <?php } ?>
                      </td>
                      <td>
                        <a href="<?= BASEURL; ?>/orders/validasi/<?php echo $row['odr_id']?>" class="btn btn-primary" data-toggle="modal" data-target="#validasiModalOrder<?php echo $row['odr_id']?>" >Validasi</a>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->


<!-- validasi status order -->
<?php foreach ( $data['order'] as $row ) : ?>
<div class="modal fade" id="validasiModalOrder<?php echo $row['odr_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Validasi Status Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/orders/validasi" method="POST">
      <input type="hidden" id="odr_id" name="odr_id" value="<?php echo $row['odr_id'];?>">
      
      <label> Order ID : <?php echo $row['odr_id']; ?></label>
      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="odr_status">
            <option value="Belum Dibayar" <?php if ( $row['odr_status'] == 'Belum Dibayar' ) { echo "Selected"; } ?>>Belum Dibayar</option>
            <option value="Dikemas" <?php if ( $row['odr_status'] == 'Dikemas' ) { echo "Selected"; } ?>>Dikemas</option>
            <option value="Dikirim" <?php if ( $row['odr_status'] == 'Dikirim' ) { echo "Selected"; } ?>>Dikirim</option>
            <option value="Selesai" <?php if ( $row['odr_status'] == 'Selesai' ) { echo "Selected"; } ?>>Selesai</option>
            <option value="Dibatalkan" <?php if ( $row['odr_status'] == 'Dibatalkan' ) { echo "Selected"; } ?>>Dibatalkan</option>
        </select>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Validasi Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
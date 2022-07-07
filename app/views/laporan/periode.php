  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Laporan Penjualan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <a target="_blank" href="<?php echo BASEURL;?>/laporan/periode_pdf" class="btn btn-primary mr-3"><i class="fas fa-print"></i> Print</a>
              <a href="<?php echo BASEURL;?>/laporan/periode_export" class="btn btn-success"><i class="fas fa-file-excel"></i> Export</a>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3">
            <div class="info-box">
              <span class="info-box-icon bg-success">
              <i class="fas fa-sort-amount-up nav-icon"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Total Terjual</span>
                <span class="info-box-number"><?php echo $data['total_terjual']?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="info-box">
              <span class="info-box-icon bg-danger">
              <i class="fas fa-dollar-sign nav-icon"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Harga Total </span>
                <span class="info-box-number">Rp.<?php echo number_format($data['harga_total'])?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <div class="row">
              <!-- <div class="col-lg-3">
                    <form action="<?php echo BASEURL;?>/laporan/penjualan_cari" method="POST">
                      <div class="row">
                        <div class="col">
                          <div class="form-group">
                            <input type="date" class="form-control" name="tanggal">
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cari</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div> -->
      
                </div>
                <table id="laporan" class="table table-hover table-striped text-center">
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
                      <td>Rp.<?php echo number_format($row['harga_total']); ?></td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    

</div>
<!-- /.content-wrapper -->
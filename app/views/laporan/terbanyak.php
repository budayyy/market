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
            <a target="_blank" href="<?php echo BASEURL;?>/laporan/terbanyak_pdf" class="btn btn-primary mr-3"><i class="fas fa-print"></i> Print</a>
              <a href="<?php echo BASEURL;?>/laporan/terbanyak_export" class="btn btn-success"><i class="fas fa-file-excel"></i> Export</a>
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
              <span class="info-box-icon bg-info">
                <i class="fas fa-clone nav-icon"></i>
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Jumlah Barang</span>
                <span class="info-box-number"><?php echo $data['jumlah_barang']?></span>
              </div>
            </div>
          </div>
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

                  <div class="col-lg-3">
                      <div class="row">
                        <div class="col">
                          <div class="form-group ">
                              <select class="form-control" id="kategoriTerbanyak" name="">
                                <option value="" disabled selected hidden>Pilih Kategori</option>
                                <?php foreach ($data['ctg'] as $row) : ?>
                                  <option value="<?= $row['ctg_id'];?>"> - <?= $row['ctg_name'];  ?></option>
                                <?php endforeach; ?>
                              </select>
                          </div>
                        </div>
                      </div>
                  </div>

                
                </div>
                <table id="laporan" class="terbanyak table table-hover table-striped text-center">
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
            </div>
          </div>
        </div>
      </div>
    </section>

    

</div>
<!-- /.content-wrapper -->
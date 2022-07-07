  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Shipping</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Shipping</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

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
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalShipping">Tambah Shipping</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Metode Pengiriman</th>
                    <th>Jenis</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  <?php foreach( $data['shp'] as $row ) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $row['shp_name'];?></td>
                      <td><?= $row['shp_jenis'];?></td>
                      <td><?= date("d/m/Y", strtotime($row['shp_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/shipping/ubah/<?php echo $row['shp_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalShipping<?php echo $row['shp_id']?>">Edit</a>
                        <a href="<?= BASEURL;?>/shipping/hapus/<?php echo $row['shp_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalShipping<?php echo $row['shp_id']?>">Hapus</a>
                      </td>
                    </tr>
                    <?php $i++; ?>
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


<!-- Modal Tambah -->
<div class="modal fade" id="tambahModalShipping" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Tambah Data Shipping</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/shipping/tambah" method="POST">
      
      <div class="form-group">
        <label for="nama">Nama Metode Pengiriman</label>
        <input type="text" class="form-control" name="shp_name">
      </div>
      <div class="form-group">
        <label for="kurir">Jenis Kurir</label>
        <select class="form-control" name="shp_jenis">
          <option value="Reguler">Reguler</option>
          <option value="Cargo">Cargo</option>
        </select>
      </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit -->
<?php foreach ( $data['shp'] as $row ) : ?>
<div class="modal fade" id="ubahModalShipping<?php echo $row['shp_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Edit Data Shipping</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/shipping/ubah" method="POST">
        <div class="form-group">
          <label for="ctg_id">Category Id</label>
          <input type="text" class="form-control" id="shp_id" name="shp_id" value="<?php echo $row['shp_id'];?>" readonly>
        </div>  
        <div class="form-group">
          <label for="nama">Nama Metode Pengiriman</label>
          <input type="text" class="form-control" id="shp_name" name="shp_name" value="<?php echo $row['shp_name'];?>">
        </div>
        <div class="form-group">
        <label for="kurir">Jenis Kurir</label>
        <select class="form-control" name="shp_jenis">
          <option value="Reguler">Reguler</option>
          <option value="Cargo">Cargo</option>
        </select>
      </div>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Edit Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- Modal Hapus -->
<?php foreach ( $data['shp'] as $row ) : ?>
<div class="modal fade" id="hapusModalShipping<?php echo $row['shp_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Shipping</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/shipping/hapus/<?php echo $row['shp_id']?>" method="POST">
      <p>Apakah anda yakin ingin menghapus metode pengiriman <b> <?php echo $row['shp_name']; ?></b> ? </p>
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Hapus Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>
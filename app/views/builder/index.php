  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Builder</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Builder</li>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalBuilder">Tambah Builder</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-hover table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Builder</th>
                    <th>No Handphone</th>
                    <th>Harga Sewa</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ( $data['bld'] as $row ) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['hs_name']; ?></td>
                      <td><?php echo $row['hs_phone']; ?></td>
                      <td>Rp.<?php echo number_format($row['hs_harga']); ?>/hari</td>
                      <td><?= date("d/m/Y", strtotime($row['hs_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/builder/ubah/<?php echo $row['hs_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalBuilder<?php echo $row['hs_id']?>">Ubah</a>
                        <a href="<?= BASEURL;?>/builder/hapus/<?php echo $row['hs_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalBuilder<?php echo $row['hs_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalBuilder" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelBuilder">Tambah Data Builder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/builder/tambah" method="POST">
      
      <div class="form-group">
        <label for="hs_name">Nama Tukang Bangunan</label>
        <input type="text" class="form-control" name="hs_name" required>
      </div>
      <div class="form-group">
        <label for="hs_phone">No Handphone</label>
        <input type="number" class="form-control" name="hs_phone" required>
      </div>
      <div class="form-group">
        <label for="hs_harga">Harga Jasa</label>
        <input type="number" class="form-control" name="hs_harga" required>
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


<!-- Modal Hapus -->
<?php foreach ( $data['bld'] as $row ) : ?>
<div class="modal fade" id="ubahModalBuilder<?= $row['hs_id']?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelBuilder">Ubah Data Builder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/builder/ubah" method="POST">
      
      <div class="form-group">
        <label for="hs_name">ID Builder</label>
        <input type="text" class="form-control" name="hs_id" value="<?= $row['hs_id'] ?>" readonly>
      </div>
      <div class="form-group">
        <label for="hs_name">Nama Tukang Bangunan</label>
        <input type="text" class="form-control" name="hs_name" value="<?= $row['hs_name'] ?>" required>
      </div>
      <div class="form-group">
        <label for="hs_phone">No Handphone</label>
        <input type="number" class="form-control" name="hs_phone" value="<?= $row['hs_phone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="hs_harga">Harga Jasa</label>
        <input type="number" class="form-control" name="hs_harga" value="<?= $row['hs_harga'] ?>" required>
      </div>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>


<!-- Modal Hapus -->
<?php foreach ( $data['bld'] as $row ) : ?>
<div class="modal fade" id="hapusModalBuilder<?= $row['hs_id']?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelBuilder">Hapus Data Builder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/builder/hapus/<?= $row['hs_id']; ?>" method="POST">
        <p>Apakah kamu yakin akan menghapus Tukang <b><?= $row['hs_name'];  ?></b> </p>
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

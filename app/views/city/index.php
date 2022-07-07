  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Provinsi dan Kota</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kota</li>
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalCity">Tambah Daerah</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Provinsi</th>
                    <th>Nama Kota & Kabupaten</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  <?php foreach ( $data['city'] as $row ) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?= $row['prv_name']; ?></td>
                      <td><?= $row['cty_name']; ?></td>
                      <td><?= date("d/m/Y", strtotime($row['cty_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/city/ubah/<?php echo $row['cty_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalCity<?php echo $row['cty_id']?>">Ubah</a>
                        <a href="<?= BASEURL;?>/city/hapus/<?php echo $row['cty_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalCity<?php echo $row['cty_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalCity" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Tambah Data Daerah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/city/tambah" method="POST">
        <div class="form-group">
          <label for="nama">Nama Provinsi</label>
          <select class="form-control" name="namaProvinsi">
            <?php foreach ( $data['province'] as $row ) : ?>
              <option value="<?php echo $row['prv_id'];?>"><?php echo $row['prv_name'];?></option>
              <?php endforeach; ?>
          </select>
        </div>
        <div class="form-group">
          <label for="namaKota">Nama Kota / Kabupaten</label>
          <input type="text" class="form-control" id="namakota" name="namaKota">
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


<!-- Modal Ubah -->
<?php foreach ( $data['city'] as $row ) : ?>
<div class="modal fade" id="ubahModalCity<?php echo $row['cty_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Ubah Data Daerah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/city/ubah" method="POST">
        <input type="hidden" id="cty_id" name="cty_id" value="<?php echo $row['cty_id'];?>">
        <div class="form-group">
          <label for="nama">Nama Provinsi</label>
          <select class="form-control" name="namaProvinsi">
              <option value="<?= $row['cty_prv_id'];?>"><?= $row['prv_name']; ?></option>
          </select>
        </div>
        <div class="form-group">
          <label for="namaKota">Nama Kota / Kabupaten</label>
          <input type="text" class="form-control" id="namakota" name="namaKota" value="<?php echo $row['cty_name'];?>">
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
<?php foreach ( $data['city'] as $row ) : ?>
<div class="modal fade" id="hapusModalCity<?php echo $row['cty_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Kota/Kabupaten</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/city/hapus/<?php echo $row['cty_id']?>" method="POST">
      <p>Apakah anda yakin ingin menghapus <?php echo $row['cty_name']; ?> </p>
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
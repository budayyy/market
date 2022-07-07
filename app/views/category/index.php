  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
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
                <button type="button" class="btn btn-primary tampilDataCategory" data-toggle="modal" data-target="#tambahModalCategory">Tambah Category</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Category</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  <?php foreach ( $data['ctg'] as $ctg ) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?php echo $ctg['ctg_name']; ?></td>
                    <td><?= date("d/m/Y", strtotime($ctg['ctg_create'])); ?></td>
                    <td>
                      <a href="<?php echo BASEURL;?>/category/ubah" class="badge badge-success" data-toggle="modal" data-target="#ubahModalCategory<?php echo $ctg['ctg_id']?>">ubah</a>
                      <a href="<?= BASEURL;?>/category/hapus/<?php echo $ctg['ctg_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalCategory<?php echo $ctg['ctg_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalCategory" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Tambah Data Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/category/tambah" method="POST">
          <input type="hidden" name="ctg_id" id="ctg_id">
        <div class="form-group">
          <label for="nama">Nama Category</label>
          <input type="text" class="form-control" id="namaCategory" name="ctg_name">
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
<?php foreach ( $data['ctg'] as $row ) : ?>
<div class="modal fade" id="ubahModalCategory<?php echo $row['ctg_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Edit Data Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/category/ubah" method="POST">
        <div class="form-group">
          <label for="ctg_id">Category Id</label>
          <input type="text" class="form-control" id="ctg_id" name="ctg_id" value="<?php echo $row['ctg_id'];?>" readonly>
        </div>  
        <div class="form-group">
          <label for="nama">Nama Category</label>
          <input type="text" class="form-control" id="namaCategory" name="ctg_name" value="<?php echo $row['ctg_name'];?>">
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
<?php foreach ( $data['ctg'] as $row ) : ?>
<div class="modal fade" id="hapusModalCategory<?php echo $row['ctg_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/category/hapus/<?php echo $ctg['ctg_id']?>" method="POST">
      <p>Apakah anda yakin ingin menghapus <?php echo $row['ctg_name']; ?> </p>
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
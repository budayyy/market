  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Consultant Architect</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Consultant Architect</li>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalConsultant">Tambah Consultant</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Consultant</th>
                    <th>Email</th>
                    <th>No Handphone</th>
                    <th>Perusahaan</th>
                    <th>Harga Jasa</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ( $data['consult'] as $row ) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['ac_name']; ?></td>
                      <td><?php echo $row['ac_email']; ?></td>
                      <td><?php echo $row['ac_phone']; ?></td>
                      <td><?php echo $row['name_pt']; ?></td>
                      <td>Rp.<?php echo number_format($row['ac_payment']); ?></td>
                      <td><?= date("d/m/Y", strtotime($row['ac_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/consultant/ubah/<?php echo $row['ac_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalConsultant<?php echo $row['ac_id']?>">Ubah</a>
                        <a href="<?= BASEURL;?>/consultant/hapus/<?php echo $row['ac_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalConsultant<?php echo $row['ac_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalConsultant" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Tambah Data Consultant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/consultant/tambah" method="POST">
      
      <div class="form-group">
        <label for="ac_name">Nama Consultant</label>
        <input type="text" class="form-control" name="ac_name" required>
      </div>
      <div class="form-group">
        <label for="ac_email">Email</label>
        <input type="email" class="form-control" name="ac_email" required>
      </div>
      <div class="form-group">
        <label for="ac_phone">No Handphone</label>
        <input type="number" class="form-control" name="ac_phone" required>
      </div>
      <div class="form-group">
        <label for="name_pt">Nama Perusahaan</label>
        <input type="text" class="form-control" name="name_pt" required>
      </div>
      <div class="form-group">
        <label for="ac_payment">Harga Jasa</label>
        <input type="number" class="form-control" name="ac_payment" required>
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
<?php foreach ( $data['consult'] as $row ) : ?>
<div class="modal fade" id="ubahModalConsultant<?= $row['ac_id']?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">ubah Data Consultant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/consultant/ubah" method="POST">

      <div class="form-group">
        <label for="ac_name">ID Consultant</label>
        <input type="text" class="form-control" name="ac_id"  value="<?= $row['ac_id'] ?>" readonly>
      </div>
        
      <div class="form-group">
        <label for="ac_name">Nama Consultant</label>
        <input type="text" class="form-control" name="ac_name"  value="<?= $row['ac_name'] ?>" required>
      </div>
      <div class="form-group">
        <label for="ac_email">Email</label>
        <input type="email" class="form-control" name="ac_email" value="<?= $row['ac_email'] ?>" required>
      </div>
      <div class="form-group">
        <label for="ac_phone">No Handphone</label>
        <input type="number" class="form-control" name="ac_phone" value="<?= $row['ac_phone'] ?>" required>
      </div>
      <div class="form-group">
        <label for="name_pt">Nama Perusahaan</label>
        <input type="text" class="form-control" name="name_pt" value="<?= $row['name_pt'] ?>" required>
      </div>
      <div class="form-group">
        <label for="ac_payment">Harga Jasa</label>
        <input type="number" class="form-control" name="ac_payment" value="<?= $row['ac_payment'] ?>" required>
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
<?php foreach ( $data['consult'] as $row ) : ?>
<div class="modal fade" id="hapusModalConsultant<?= $row['ac_id']?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Consultant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/consultant/hapus/<?= $row['ac_id']; ?>" method="POST">
        <p>Apakah kamu yakin akan menghapus consultan <b><?= $row['ac_name'];  ?></b> </p>
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
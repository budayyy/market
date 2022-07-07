  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalPayment">Tambah Payment</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Bank</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ( $data['pay'] as $row ) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['pay_name']; ?></td>
                      <td><?= date("d/m/Y", strtotime($row['pay_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/payment/ubah/<?php echo $row['pay_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalPayment<?php echo $row['pay_id']?>">Edit</a>
                        <a href="<?= BASEURL;?>/payment/hapus/<?php echo $row['pay_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalPayment<?php echo $row['pay_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalPayment" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Tambah Data Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/payment/tambah" method="POST">
      
      <div class="form-group">
        <label for="nama">Nama Metode Pembayaran</label>
        <input type="text" class="form-control" name="pay_name">
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
<?php foreach ( $data['pay'] as $row ) : ?>
<div class="modal fade" id="ubahModalPayment<?php echo $row['pay_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Ubah Data Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/payment/ubah" method="POST">
        <div class="form-group">
          <label for="nama">Payment ID</label>
          <input type="text" class="form-control" name="pay_id" value="<?= $row['pay_id'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="nama">Nama Metode Pembayaran</label>
          <input type="text" class="form-control" name="pay_name" value="<?= $row['pay_name'] ?>">
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
<?php foreach ( $data['pay'] as $row ) : ?>
<div class="modal fade" id="hapusModalPayment<?php echo $row['pay_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Payment</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/payment/hapus/<?php echo $row['pay_id']?>" method="POST">
      <p>Apakah anda yakin ingin menghapus metode pembayaran <b> <?php echo $row['pay_name']; ?></b> ? </p>
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
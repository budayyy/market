  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalMember">Tambah Members</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Username</th>
                    <th>Type</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ( $data['mbr'] as $row ) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><?php echo $row['mb_name']; ?></td>
                      <td><?php echo $row['mb_email']; ?></td>
                      <td><?php echo $row['mb_phone']; ?></td>
                      <td><?php echo $row['mb_username']; ?></td>
                      <td><?php echo $row['mb_type']; ?></td>
                      <td><?= date("d/m/Y", strtotime($row['mb_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/members/ubah/<?php echo $row['mb_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalMember<?php echo $row['mb_id']?>">Edit</a>
                        <a href="<?= BASEURL;?>/members/hapus/<?php echo $row['mb_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalMember<?php echo $row['mb_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalMember" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Tambah Data Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/members/tambah" method="POST">
        <div class="form-group">
          <label for="nama">Nama Pengguna</label>
          <input type="text" class="form-control" id="nama" name="mb_name">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="mb_email">
        </div>
        <div class="form-group">
          <label for="no_hp">No HP</label>
          <input type="number" class="form-control" id="mb_phone" name="mb_phone">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="mb_username">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="mb_password">
        </div>
        <div class="form-group">
          <label for="mb_type">Type</label>
          <select class="form-control" name="mb_type">
            <option value="client">Client</option>
            <option value="seller">Seller</option>
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
<?php foreach ( $data['mbr'] as $row ) : ?>
<div class="modal fade" id="ubahModalMember<?php echo $row['mb_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Edit Data Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/members/ubah" method="POST">
          <input type="hidden" class="form-control" id="mb_id" name="mb_id" value="<?php echo $row['mb_id'];?>">
        <div class="form-group">
          <label for="nama">Nama Pengguna</label>
          <input type="text" class="form-control" id="nama" name="mb_name" value="<?php echo $row['mb_name'];?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="mb_email" value="<?php echo $row['mb_email'];?>">
        </div>
        <div class="form-group">
          <label for="no_hp">No Handphone</label>
          <input type="number" class="form-control" id="no_hp" name="mb_phone" value="<?php echo $row['mb_phone'];?>">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="mb_username" value="<?php echo $row['mb_username'];?>">
        </div>
        <div class="form-group">
          <label for="mb_type">Type</label>
          <select class="form-control" name="mb_type">
            <option value="client">Client</option>
            <option value="seller">Seller</option>
          </select>
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
<?php foreach ( $data['mbr'] as $row ) : ?>
<div class="modal fade" id="hapusModalMember<?php echo $row['mb_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Category</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/members/hapus/<?php echo $row['mb_id']?>" method="POST">
      <p>Apakah anda yakin ingin menghapus <b><?php echo $row['mb_name']; ?></b>..?</p>
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
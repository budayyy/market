  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalUser">Tambah Users</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>No Hanphone</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Created</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; ?>
                    <?php foreach ( $data['user'] as $row ) : ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $row['adm_name']; ?></td>
                      <td><?php echo $row['adm_phone']; ?></td>
                      <td><?php echo $row['adm_email']; ?></td>
                      <td><?php echo $row['adm_username']; ?></td>
                      <td><?php echo $row['role']; ?></td>
                      <td><?= date("d/m/Y", strtotime($row['adm_create'])); ?></td>
                      <td>
                        <a href="<?= BASEURL;?>/user/ubah/<?php echo $row['adm_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalUser<?php echo $row['adm_id']?>">Ubah</a>
                        <a href="<?= BASEURL;?>/user/hapus/<?php echo $row['adm_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalUser<?php echo $row['adm_id']?>">Hapus</a>
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
<div class="modal fade" id="tambahModalUser" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelUser">Tambah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/user/tambah" method="POST">
      
      <div class="input-group mb-3">
          <input type="text" name="adm_name" class="form-control" placeholder="Nama Lengkap" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="adm_username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="adm_email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="adm_phone" class="form-control" placeholder="No Handphone" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password1" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <select class="form-control" name="role_id">
            <?php foreach ( $data['role'] as $row ) : ?>
              <option value="<?php echo $row['id'];?>"><?php echo $row['role'];?></option>
              <?php endforeach; ?>
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


<!-- Modal Ubah -->
<?php foreach ( $data['user'] as $row ) : ?>
<div class="modal fade" id="ubahModalUser<?= $row['adm_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelUser">Ubah Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/user/ubah" method="POST">

      <input type="hidden" name="adm_id" value="<?= $row['adm_id'] ?>">
      
      <div class="input-group mb-3">
          <input type="text" name="adm_name" class="form-control" placeholder="Nama Lengkap" value="<?= $row['adm_name']; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="adm_username" class="form-control" placeholder="Username" value="<?= $row['adm_username']; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="adm_email" class="form-control" placeholder="Email" value="<?= $row['adm_email']; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="number" name="adm_phone" class="form-control" placeholder="No Handphone" value="<?= $row['adm_phone']; ?>" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password1" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password2" class="form-control" placeholder="Konfirmasi Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <select class="form-control" name="role_id">
            <?php foreach ( $data['role'] as $row ) : ?>
              <option value="<?php echo $row['id'];?>"><?php echo $row['role'];?></option>
              <?php endforeach; ?>
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
<?php foreach ( $data['user'] as $row ) : ?>
<div class="modal fade" id="hapusModalUser<?= $row['adm_id']?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelBuilder">Hapus Data User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/user/hapus/<?= $row['adm_id']; ?>" method="POST">
        <p>Apakah kamu yakin akan menghapus User <b><?= $row['adm_name'];  ?></b> </p>
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

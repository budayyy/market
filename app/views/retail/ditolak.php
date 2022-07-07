  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Retail</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Retail</li>
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
              <!-- <div class="card-header">
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahModalRetail">Tambah Retail</a>
              </div> -->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="dataTable" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Retail</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Nama Member</th>
                    <th>Kota</th>
                    <th>Created</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=1; ?>
                  <?php foreach( $data['retail'] as $row ) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td><a href="<?= BASEURL;?>/retail/detail/<?= $row['rtl_id']?>"><?= $row['rtl_name'];?></a></td>
                      <td><?= $row['rtl_addres'];?></td>
                      <td><?= $row['rtl_phone'];?></td>
                      <td><?= $row['mb_name'];?></td>
                      <td><?= $row['cty_name'];?></td>
                      <td><?= date("d/m/Y", strtotime($row['rtl_create'])); ?></td>
                      <td>
                        <?php if ($row['rtl_status'] == 'Review') { ?>
                          <a href="#" class="badge badge-primary">Review</a>
                        <?php } elseif ( $row['rtl_status'] == 'Validate' ) { ?>
                          <a href="#" class="badge badge-success">Validate</a>
                        <?php } elseif ( $row['rtl_status'] == 'Rejected') { ?>
                          <a href="#" class="badge badge-danger">Rejected</a>
                        <?php } elseif ( $row['rtl_status'] == 'Nonactive') { ?>
                          <a href="#" class="badge badge-secondary">Nonactive</a>
                        <?php } ?>
                      </td>
                      <td>
                        <a href="<?= BASEURL; ?>/retail/validasi/<?php echo $row['rtl_id']?>" class="btn btn-primary" data-toggle="modal" data-target="#validasiModalRetail<?php echo $row['rtl_id']?>" >Validasi</a>
                        <!-- <a href="<?= BASEURL;?>/retail/ubah/<?php echo $row['rtl_id']?>" class="badge badge-success" data-toggle="modal" data-target="#ubahModalRetail<?php echo $row['shp_id']?>">Edit</a>
                        <a href="<?= BASEURL;?>/retail/hapus/<?php echo $row['rtl_id']?>" class="badge badge-danger ml-2" data-toggle="modal" data-target="#hapusModalRetail<?php echo $row['rtl_id']?>">Hapus</a> -->
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
<!-- <div class="modal fade" id="tambahModalRetail" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelRetail">Tambah Data Retail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/retail/tambah" method="POST">
        
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="nama">Nama Retail</label>
              <input type="text" class="form-control" name="rtl_name">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="phone">No HP</label>
              <input type="number" class="form-control" name="rtl_phone">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="nama">Kota Retail</label>
              <input type="text" class="form-control" name="rtl_name">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <label for="nama">Nama Member</label>
              <select class="form-control" name="nameMember">
                <option >Silahkan pilih member</option>
                <?php foreach ( $data['member'] as $row ) : ?>
                  <option value="<?php echo $row['mb_id'];?>"><?php echo $row['mb_name'];?></option>
                <?php endforeach; ?>
          </select>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="rtl_addres" class="col-form-label">Alamat Retail</label>
          <textarea class="form-control" id="rtl_addres" name="rtl_addres"></textarea>
        </div>
    
      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
      </div>
    </div>
  </div>
</div> -->


<!-- Modal Hapus -->
<?php foreach ( $data['retail'] as $row ) : ?>
<div class="modal fade" id="hapusModalRetail<?php echo $row['rtl_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Hapus Data Retail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/retail/hapus/<?php echo $row['rtl_id']?>" method="POST">
      <p>Apakah anda yakin ingin menghapus retail <b> <?php echo $row['rtl_name']; ?></b> ? </p>
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

<?php foreach ( $data['retail'] as $row ) : ?>
<div class="modal fade" id="validasiModalRetail<?php echo $row['rtl_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Form Validasi Status Retail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/retail/validasi" method="POST">
      <input type="hidden" id="rtl_id" name="rtl_id" value="<?php echo $row['rtl_id'];?>">
      
      <label> Nama Retail : <?php echo $row['rtl_name']; ?></label>
      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="rtl_status">
            <option value="Review" <?php if ( $row['rtl_status'] == 'Review' ) { echo "Selected"; } ?>>Review</option>
            <option value="Validate" <?php if ( $row['rtl_status'] == 'Validate' ) { echo "Selected"; } ?>>Validate</option>
            <option value="Rejected" <?php if ( $row['rtl_status'] == 'Rejected' ) { echo "Selected"; } ?>>Rejected</option>
            <option value="Nonactive" <?php if ( $row['rtl_status'] == 'Nonactive' ) { echo "Selected"; } ?>>Nonactive</option>
        </select>

      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Validasi Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?>


<!-- Modal Edit Validasi -->
<!-- <?php foreach ( $data['retail'] as $row ) : ?>
<div class="modal fade" id="validasiModalRetail<?php echo $row['rtl_id'];?>" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabelCategory">Form Validasi Status Retail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= BASEURL; ?>/retail/validasi/<?php echo $row['rtl_id']?>" method="POST">
      
      <label> Nama Retail : <?php echo $row['rtl_name']; ?></label>
      <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="rtl_status">
            <option value="1" <?php if ( $row['rtl_status'] == "1" ) { echo "Selected"; } ?>>Review</option>
            <option value="2" <?php if ( $row['rtl_status'] == "2" ) { echo "Selected"; } ?>>Validate</option>
            <option value="3" <?php if ( $row['rtl_status'] == "3" ) { echo "Selected"; } ?>>Rejected</option>
            <option value="4" <?php if ( $row['rtl_status'] == "4" ) { echo "Selected"; } ?>>Nonactive</option>
        </select>

      </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Validasi Data</button>
      </form>
      </div>
    </div>
  </div>
</div>
<?php endforeach; ?> -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
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
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?= BASEURL; ?>/img/<?= $data['dataSession']['picture'] ?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?= $data['dataSession']['adm_name']; ?></h3>

                <p class="text-muted text-center">IT Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                  <form>
                    <input type="file">
                  </form>
                  <!-- <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li> -->
                </ul>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#setting" data-toggle="tab">Setting</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ubahPassword" data-toggle="tab">Ubah Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="setting">
                    <form action="<?= BASEURL; ?>/profile/ubah" method="POST" class="form-horizontal">
                    <input type="hidden" name="adm_id" value="<?= $data['dataSession']['adm_id'] ?>">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="adm_name" value="<?= $data['dataSession']['adm_name'] ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="adm_email" value="<?= $data['dataSession']['adm_email'] ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">No. Handphone</label>
                        <div class="col-sm-10">
                          <input type="nummber" class="form-control" name="adm_phone" value="<?= $data['dataSession']['adm_phone'] ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="adm_username" value="<?= $data['dataSession']['adm_username'] ?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                    </form> 

                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="ubahPassword">
                    
                  <form action="<?= BASEURL; ?>/profile/ubah_password" method="POST" class="form-horizontal">
                      <input type="hidden" name="adm_id" value="<?= $data['dataSession']['adm_id'] ?>">
                      <div class="form-group row">
                        <label for="passwordLama" class="col-sm-2 col-form-label">Password Lama</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="passwordLama" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="passwordBaru1" class="col-sm-2 col-form-label">Password Baru</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="passwordBaru1" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="passwordBaru2" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" name="passwordBaru2">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Ubah Password</button>
                        </div>
                      </div>
                    </form>

                  </div>
                  <!-- /.tab-pane -->

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    
  </div>
  <!-- /.content-wrapper -->
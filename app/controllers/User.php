<?php 

class User extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Users';
    $data['user'] = $this->model('User_model')->getAllUser();
    $data['role'] = $this->model('User_model')->jumlahRole();
    $this->view('templates/header', $data);
    $this->view('users/index', $data);
    $this->view('templates/footer');

  }


  public function tambah(){

    if ( $_POST['password1'] == $_POST['password2'] ){

      $row = $this->model('Auth_model')->cekUsername();
      if($row['adm_username'] == $_POST['adm_username']){
        header('Location:'.BASEURL.'/user');
        exit;

      } else {

        if($this->model('Auth_model')->tambahUser($_POST) > 0 ){
          
          Flasher::setFlash('Registrasi','berhasil', 'dibuat','success');
          header('Location:'.BASEURL.'/user');
          exit;

        }else {
          Flasher::setFlash('Registrasi','gagal', 'dibuat','danger');
          header('Location:'.BASEURL.'/user');
          exit;
        }
      }
    
    }else{
      Flasher::setFlash('Registrasi','gagal', 'dibuat, password harus sama','danger');
      header('Location:'.BASEURL.'/user');
      exit;
    
    }

  }

  public function hapus($id){

    if ( $this->model('User_model')->hapusDataUser($id) > 0 ){

      Flasher::setFlash('User', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/user');
      exit;

    }else{

      Flasher::setFlash('User', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/user');
      exit;

    }

  }

  public function ubah(){

    if ( $this->model('User_model')->ubahDataUser($_POST) > 0 ){

      Flasher::setFlash('User', 'berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/user');
      exit;

    }else{

      Flasher::setFlash('Builder', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/user');
      exit;

    }

  }




}
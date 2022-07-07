<?php 


class Profile extends Controller {

  public function __construct(){

    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }

  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Profile';
    $data['dataSession'] = $this->model('Profile_model')->dataSession();
    $this->view('templates/header', $data);
    $this->view('profile/index', $data);
    $this->view('templates/footer');
    
  }

  public function ubah(){

    var_dump($_POST);

    if( $this->model('Profile_model')->ubahDataProfile($_POST) > 0 ) {
      Flasher::setFlash('Profile', 'berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/profile');
      exit;
    }else{
      Flasher::setFlash('Profile', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/profile');
      exit;
    }

  }

  public function ubah_password(){

    
    $password = $_POST['passwordLama'];
    $cekPassword = $this->model('Profile_model')->cekPassword($_POST);

    if ( password_verify($password, $cekPassword['adm_password']) ){
      

      if( $this->model('Profile_model')->ubahPassword($_POST) > 0 ){

        Flasher::setFlash('Password', 'berhasil', 'diubah', 'success');
        header('Location: ' . BASEURL . '/profile');
        exit;

      }else{

        Flasher::setFlash('Password', 'gagal', 'diubah', 'danger');
        header('Location: ' . BASEURL . '/profile');
        exit;

      }

    } else {

      Flasher::setFlash('Password', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/profile');
      exit;

    }

  }


}
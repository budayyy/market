<?php 

class Consultant extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Consultant';
    $data['consult'] = $this->model('Consultant_model')->getAllConsultant();
    $this->view('templates/header', $data);
    $this->view('consultant/index', $data);
    $this->view('templates/footer');

  }

  public function tambah(){
    
    if ( $this->model('Consultant_model')->tambahDataConsultant($_POST) > 0 ) {
      
      Flasher::setFlash('Consultant', 'berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/consultant');
      exit;

    }else{

      Flasher::setFlash('Consultant', 'gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/consultant');
      exit;
    
    }

  }


  public function hapus($id){
    
    if ( $this->model('Consultant_model')->hapusDataConsultant($id) > 0 ) {
      
      Flasher::setFlash('Consultant', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/consultant');
      exit;

    }else{

      Flasher::setFlash('Consultant', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/consultant');
      exit;
    
    }
    
  }

  public function ubah(){

    var_dump($_POST);
    
    if ( $this->model('Consultant_model')->ubahDataConsultant($_POST) > 0 ) {
      
      Flasher::setFlash('Consultant', 'berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/consultant');
      exit;

    }else{

      Flasher::setFlash('Consultant', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/consultant');
      exit;
    
    }
    
  }

}
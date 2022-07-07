<?php 

class Builder extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Builder';
    $data['bld'] = $this->model('Builder_model')->getAllBuilder();
    $this->view('templates/header', $data);
    $this->view('builder/index', $data);
    $this->view('templates/footer');

  }


  public function tambah(){

    if ( $this->model('Builder_model')->tambahDataBuilder($_POST) > 0 ){

      Flasher::setFlash('Builder', 'berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/builder');
      exit;

    }else{

      Flasher::setFlash('Builder', 'gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/builder');
      exit;

    }

  }

  public function hapus($id){

    if ( $this->model('Builder_model')->hapusDataBuilder($id) > 0 ){

      Flasher::setFlash('Builder', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/builder');
      exit;

    }else{

      Flasher::setFlash('Builder', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/builder');
      exit;

    }

  }

  public function ubah(){

    if ( $this->model('Builder_model')->ubahDataBuilder($_POST) > 0 ){

      Flasher::setFlash('Builder', 'berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/builder');
      exit;

    }else{

      Flasher::setFlash('Builder', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/builder');
      exit;

    }

  }




}
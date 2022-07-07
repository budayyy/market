<?php 


class Shipping extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Shipping';
    $data['shp'] = $this->model('Shipping_model')->getAllShipping();
    $this->view('templates/header', $data);
    $this->view('shipping/index', $data);
    $this->view('templates/footer');
    
  }

  public function tambah(){

    if( $this->model('Shipping_model')->tambahDataShipping($_POST) > 0 ) {
      Flasher::setFlash('Shipping', 'berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/shipping');
      exit;
    }else{
      Flasher::setFlash('Shipping', 'gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/shipping');
      exit;
    }
  
  }

  public function hapus($id){

    if( $this->model('Shipping_model')->hapusDataShipping($id) > 0 ) {
      Flasher::setFlash('Shipping', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/shipping');
      exit;
    }else{
      Flasher::setFlash('Shipping', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/shipping');
      exit;
    }

  }

  public function ubah(){

    if( $this->model('Shipping_model')->ubahDataShipping($_POST) > 0 ) {
      Flasher::setFlash('Shipping', 'berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/shipping');
      exit;
    }else{
      Flasher::setFlash('Shipping', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/shipping');
      exit;
    }
  
  }


}
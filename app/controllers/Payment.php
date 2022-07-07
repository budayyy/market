<?php 


class Payment extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index() {

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Payment';
    $data['pay'] = $this->model('Payment_model')->getAllPayment();
    $this->view('templates/header', $data);
    $this->view('payment/index', $data);
    $this->view('templates/footer');

  }

  public function tambah(){

    if( $this->model('Payment_model')->tambahDataPayment($_POST) > 0 ) {
      Flasher::setFlash('Payment', 'berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/payment');
      exit;
    }else{
      Flasher::setFlash('Payment', 'gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/payment');
      exit;
    }

  }

  public function hapus($id){

    if( $this->model('Payment_model')->hapusDataPayment($id) > 0 ) {
      Flasher::setFlash('Payment', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/payment');
      exit;
    }else{
      Flasher::setFlash('Payment', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/payment');
      exit;
    }

  }

  public function ubah(){

    if( $this->model('Payment_model')->ubahDataPayment($_POST) > 0 ) {
      Flasher::setFlash('Payment', 'berhasil', 'ditambah', 'success');
      header('Location: ' . BASEURL . '/payment');
      exit;
    }else{
      Flasher::setFlash('Payment', 'gagal', 'ditambah', 'danger');
      header('Location: ' . BASEURL . '/payment');
      exit;
    }

  }


}
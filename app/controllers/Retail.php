<?php 

class Retail extends Controller {

  public function __construct(){
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }

  }

  public function index(){

    $data['judul'] = 'Retail';
    $data['retail'] = $this->model('Retail_model')->getAllRetail();
    $this->view('templates/header', $data);
    $this->view('retail/index', $data);
    $this->view('templates/footer');
  
  }

  public function detail($id){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Retail';
    $data['retailId'] = $this->model('Retail_model')->getRetailById($id);
    $data['product'] = $this->model('Retail_model')->getAllProduct($id);
    $data['jumlahProduct'] = $this->model('Retail_model')->jumlahProduct($id);
    $this->view('templates/header', $data);
    $this->view('retail/detail', $data);
    $this->view('templates/footer');
  
  }

  public function aktif(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Retail';
    $data['subjudul'] = 'aktif';

    $data['retail'] = $this->model('Retail_model')->getAllValidate();
    $this->view('templates/header', $data);
    $this->view('retail/index', $data);
    $this->view('templates/footer');
  
  }

  public function ditolak(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Retail';
    $data['subjudul'] = 'ditolak';

    $data['retail'] = $this->model('Retail_model')->getAllRejected();
    $this->view('templates/header', $data);
    $this->view('retail/index', $data);
    $this->view('templates/footer');
  
  }

  public function review(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Retail';
    $data['subjudul'] = 'review';

    $data['retail'] = $this->model('Retail_model')->getAllRiview();
    $this->view('templates/header', $data);
    $this->view('retail/index', $data);
    $this->view('templates/footer');
  
  }

  public function hapus($id){

    if( $this->model('Retail_model')->hapusDataRetail($id) > 0 ) {
      Flasher::setFlash('Retail', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/retail/aktif');
      exit;
    }else{
      Flasher::setFlash('Retail', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/retail/aktif');
      exit;
    }

  }

  public function validasi(){

    if( $this->model('Retail_model')->validasiDataRetail($_POST) > 0 ) {
      Flasher::setFlash('Retail', 'berhasil', 'divalidasi', 'success');
      header('Location: ' . BASEURL . '/retail/aktif');
      exit;
    }else{
      Flasher::setFlash('Retail', 'gagal', 'divalidasi', 'danger');
      header('Location: ' . BASEURL . '/retail/aktif');
      exit;
    }

  }


}
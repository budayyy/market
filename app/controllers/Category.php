<?php 


class Category extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Category';
    $data['ctg'] = $this->model('Category_model')->getAllCategory();
    $this->view('templates/header', $data);
    $this->view('category/index', $data);
    $this->view('templates/footer');
    
  }

  public function tambah(){
  
    if( $this->model('Category_model')->tambahDataCategory($_POST) > 0 ) {
      Flasher::setFlash('Category', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/category');
      exit;
    }else{
      Flasher::setFlash('Category', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/category');
      exit;
    }
  }

  public function hapus($id){
    
    if( $this->model('Category_model')->hapusDataCategory($id) > 0 ) {
      Flasher::setFlash('Category', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/category');
      exit;
    }else{
      Flasher::setFlash('Category', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/category');
      exit;
    }
  }

  public function ubah(){

    if ( $this->model('Category_model')->ubahDataCategory($_POST) > 0 ) {
      Flasher::setFlash('Category','berhasil', 'diubah','success');
      header('Location: ' . BASEURL . '/category');
      exit;
    }else{
      Flasher::setFlash('Category','gagal', 'diubah','danger');
      header('Location: ' . BASEURL . '/category');
      exit;
    }

  }




}
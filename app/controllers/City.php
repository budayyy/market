<?php 


class City extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index() {

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Kota';
    $data['city'] = $this->model('City_model')->getAllCity();
    $data['province'] = $this->model('City_model')->getAllProvince();
    $this->view('templates/header', $data);
    $this->view('city/index', $data);
    $this->view('templates/footer');
  }

  public function tambah(){
  
    if( $this->model('City_model')->tambahDataCity($_POST) > 0 ) {
      Flasher::setFlash('Kota/Kab', 'berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/city');
      exit;
    }else{
      Flasher::setFlash('kota/Kab', 'gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/city');
      exit;
    }
  }

  public function hapus($id){
    
    if( $this->model('City_model')->hapusDataCity($id) > 0 ) {
      Flasher::setFlash('Kota/Kab', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/city');
      exit;
    }else{
      Flasher::setFlash('Kota/Kab', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/city');
      exit;
    }
  }

  public function ubah(){

    // var_dump($_POST);

    if ( $this->model('City_model')->ubahDataCity($_POST) > 0 ) {
      Flasher::setFlash('City','berhasil', 'diubah','success');
      header('Location: ' . BASEURL . '/city');
      exit;
    }else{
      Flasher::setFlash('City','gagal', 'diubah','danger');
      header('Location: ' . BASEURL . '/city');
      exit;
    }
  }


}
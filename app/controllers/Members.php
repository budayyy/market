<?php 


class Members extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Member';
    $data['mbr'] = $this->model('Member_model')->getAllMember();
    $this->view('templates/header', $data);
    $this->view('members/index', $data);
    $this->view('templates/footer');
  }

  public function tambah(){

    $row = $this->model('Member_model')->cekUsernameMember();
    if($row['mb_username'] == $_POST['mb_username']){
      Flasher::setFlash('username duplikat', 'gagal', 'ditambah', 'warning');
      header('Location:'.BASEURL.'/members');
        exit;
    
    } else {

      if($this->model('Member_model')->tambahMember($_POST) > 0 ){
        Flasher::setFlash('Members', 'berhasil', 'ditambah', 'success');
        header('Location:'.BASEURL.'/members');
        exit;

      }else {
        Flasher::setFlash('Members', 'gagal', 'ditambah', 'danger');
        header('Location:'.BASEURL.'/members');
        exit;
      }
    }


  }

  public function hapus($id){
    
    if( $this->model('Member_model')->hapusDataMember($id) > 0 ) {
      Flasher::setFlash('Members', 'berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/members');
      exit;
    }else{
      Flasher::setFlash('Members', 'gagal', 'dihapus', 'danger');
      header('Location: ' . BASEURL . '/members');
      exit;
    }

  }

  public function ubah(){
    
    if( $this->model('Member_model')->ubahDataMember($_POST) > 0 ) {
      Flasher::setFlash('Members', 'berhasil', 'diubah', 'success');
      header('Location: ' . BASEURL . '/members');
      exit;
    }else{
      Flasher::setFlash('Members', 'gagal', 'diubah', 'danger');
      header('Location: ' . BASEURL . '/members');
      exit;
    }

  }


}
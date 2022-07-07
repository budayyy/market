<?php 


class Orders extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Orders';
    $data['order'] = $this->model('Order_model')->getAllOrder();
    $data['totalBayar'] = $this->model('Order_model')->totalBayar();
    $this->view('templates/header', $data);
    $this->view('orders/index', $data);
    $this->view('templates/footer');
    
  }

  public function detail($id){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Orders';
    $data['orderId'] = $this->model('Order_model')->getOrderById($id);
    $data['allProduct'] = $this->model('Order_model')->getAllProduct($id);
    $this->view('templates/header', $data);
    $this->view('orders/detail', $data);
    $this->view('templates/footer');

  }

  public function validasi(){

    if( $this->model('Order_model')->validasiDataOrder($_POST) > 0 ) {
      Flasher::setFlash('Order', 'berhasil', 'divalidasi', 'success');
      header('Location: ' . BASEURL . '/orders');
      exit;
    }else{
      Flasher::setFlash('Order', 'gagal', 'divalidasi', 'danger');
      header('Location: ' . BASEURL . '/orders');
      exit;
    }

  }

  public function invoice($id){

    $data['title'] = 'Invoice';
    $data['orderId'] = $this->model('Order_model')->getOrderById($id);
    $data['allProduct'] = $this->model('Order_model')->getAllProduct($id);
    $this->view('orders/invoice', $data);

  }


}
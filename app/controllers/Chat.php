<?php 

class Chat extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])) {
      header('Location: '. BASEURL . '/auth/login');
      exit;
    }
  }

  public function index(){

    $data['review'] = $this->model('Retail_model')->jumlahRetailReview();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();

    $data['judul'] = 'Chat';
    $this->view('templates/header', $data);
    $this->view('chat/index', $data);
    $this->view('templates/footer');

  }

  public function getObrolan(){
    
    echo json_encode($this->model('Chat_model')->daftarObrolan($_POST));
    // echo json_encode($this->model('Chat_model')->daftarObrolan($_POST));
  }

  public function getHistori(){
    
    $data['adm_username'] = $this->model('Chat_model')->dataSession();
    $data['temanObrolan'] = $_POST['temanObrolan'];
    echo ($this->model('Chat_model')->historiObrolan($data));
  }

  public function getPesan(){
    
    $data = $this->model('Chat_model')->dataSession();
    $data['temanObrolan'] = $_POST['temanObrolan'];
    $data['pesan']        = $_POST['pesan'];
    
    echo ($this->model('Chat_model')->kirimPesan($data));
  }






}
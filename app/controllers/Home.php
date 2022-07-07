<?php 

class Home extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])){
      header('location: '. BASEURL . '/auth/login');
      exit;
    }

  }

  public function index() {

    $data['judul'] = 'Dashboard';
    $data['category'] = $this->model('Home_model')->jumlahCategory();
    $data['city'] = $this->model('Home_model')->jumlahKota();
    $data['shipping'] = $this->model('Home_model')->jumlahShipping();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();
    $data['payment'] = $this->model('Home_model')->jumlahPayment();
    $data['member'] = $this->model('Home_model')->jumlahMember();
    $data['consult'] = $this->model('Home_model')->jumlahConsult();
    $data['builder'] = $this->model('Home_model')->jumlahBuilder();
    $data['user'] = $this->model('Home_model')->jumlahUser();
    $data['retail'] = $this->model('Home_model')->jumlahRetail();
    $data['dataSession'] = $this->model('Home_model')->dataSession();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');
  }

  public function cs() {

    $data['judul'] = 'Dashboard';
    $data['category'] = $this->model('Home_model')->jumlahCategory();
    $data['orders'] = $this->model('Home_model')->jumlahOrders();
    $data['dataSession'] = $this->model('Home_model')->dataSession();
    $this->view('templates/header', $data);
    $this->view('home/cs', $data);
    $this->view('templates/footer');
  }

  public function spv() {

    $data['judul'] = 'Dashboard';
    $data['member'] = $this->model('Home_model')->jumlahMember();
    $data['dataSession'] = $this->model('Home_model')->dataSession();
    $this->view('templates/header', $data);
    $this->view('home/spv', $data);
    $this->view('templates/footer');
  }


  public function notif() {
    
    if (isset($_POST['view'])){

      // if($_POST['view'] != ''){

      // }

      $result = $this->model('Home_model')->tampilNotif();
      
      $chat = "CHT";
      $review = "RTL";
      $output = '';

      if (!$result){
        $output .= '
        <a href="#" class="dropdown-item">
          <div class="media"> 
            <div class="media-body">
              <h3 class="dropdown-item-title">
              </h3>
              <p class="text-sm">Tidak ada pesan</p>
            </div>
          </div>
        </a>
        ';
      } else {

        foreach ($result as $row){

          $id_notif  = $row['id_notif'];
          $id_tujuan = $row['id_tujuan'];
          $prefix = substr($id_tujuan,0,3);

          if ( $prefix==$chat ){
            
            $output .= '
              <a href="http://localhost/market/public/home/edit/'.$id_notif.'" class="dropdown-item">
                <div class="media"> 
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    <b>Pesan Baru</b>
                    </h3>
                    <p class="text-sm">'.$row['isi_notif'].'</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>'.date("Y-m-d H:i:s", strtotime($row['create_notif'])).'</p>
                  </div>
                </div>
              </a>
              ';

          } elseif ($prefix==$review){

            $output .= '
              <a href="http://localhost/market/public/home/edit/'.$id_notif.'" class="dropdown-item">
                <div class="media"> 
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                    <b>Pendaftar Retail Baru</b>
                    </h3>
                    <p class="text-sm">'.$row['isi_notif'].'</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>'.date("Y-m-d H:i:s", strtotime($row['create_notif'])).'</p>
                  </div>
                </div>
              </a>
              ';
              
          }
        }
      }
     
      $jumlah = $this->model('Home_model')->jumlahNotif();
      $data = [
        'notification' => $output,
        'unseen_notification' => $jumlah
      ];

      echo json_encode($data);
    }


  }

  public function edit($id){

    $hasil = $this->model('Home_model')->editNotifStatus($id);
    
    $chat = "CHT";
    $review = "RTL";

    $id_tujuan = $hasil['id_tujuan'];
    $prefix = substr($id_tujuan,0,3);
    var_dump($hasil);
    if( $prefix == $chat ){
      header('Location: ' . BASEURL . '/chat');
      exit;
    }elseif( $prefix == $review ){
      header('Location: ' . BASEURL . '/retail/review');
      exit;
    }

  }













}

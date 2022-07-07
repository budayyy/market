<?php 

class Auth extends Controller{

  public function index(){
    
    $data['judul'] = 'Log in';
    $this->view('templates/auth_header', $data);
    $this->view('auth/login', $data);
    $this->view('templates/auth_footer');

  }

  public function registrasi(){

    $data['judul'] = 'Registrasi';
    $data['role'] = $this->model('Auth_model')->jumlahRole();
    $this->view('templates/auth_header', $data);
    $this->view('auth/registrasi', $data);
    $this->view('templates/auth_footer');

  }

  public function forgot(){

    $data['judul'] = 'Forgot';
    $this->view('templates/auth_header', $data);
    $this->view('auth/forgot', $data);
    $this->view('templates/auth_footer');

  }

  public function confirmEmail(){

    //cek email
    $user = $this->model('Auth_model')->cekEmail($_POST);
    if ($user['adm_email'] == $_POST['adm_email']){

      // mengambil data no handphone
      // $nohp = $user['adm_phone'];

      $data['judul'] = 'Confirm No Handhpone';
      $data['adm_phone'] = $user['adm_phone'];
      $this->view('templates/auth_header', $data);
      $this->view('auth/confirmNohp', $data);
      $this->view('templates/auth_footer');

    }else{

      Flasher::setFlash('email', 'anda', 'salah', 'danger');
      header('Location: ' . BASEURL . '/auth/forgot');
      exit;

    }

  }

  public function confirmNohp(){

    // cek no hp
    $user = $this->model('Auth_model')->cekNohp($_POST);

    if ($user['adm_phone'] == $_POST['adm_phone']){

      $data['judul'] = 'Forgot Success';
      $data['adm_id'] = $user['adm_id'];
      $this->view('templates/auth_header', $data);
      $this->view('auth/confirmPassword', $data);
      $this->view('templates/auth_footer');
    } else{

      Flasher::setFlash('No Handphone', 'anda', 'salah', 'danger');
      header('Location: ' . BASEURL . '');
      exit;
    }
    
  }

  public function confirmPassword(){
    
    if ($_POST['password1'] == $_POST['password2']){

      if ($this->model('Auth_model')->resetPassword($_POST) > 0){
        
        Flasher::setFlash('password', 'anda', 'berhasil di reset', 'success');
        header('Location: ' . BASEURL . '');
        exit;
      
      } else {
        
        Flasher::setFlash('password', 'anda', 'berbeda', 'danger');
        header('Location: ' . BASEURL . '/auth/forgot');
        exit;
      
      }

    } else {

      Flasher::setFlash('password', 'anda', 'berbeda', 'danger');
      header('Location: ' . BASEURL . '/auth/forgot');
      exit;

    }



  }

  

  // public function prosesRegistrasi(){
    
  //   if ( $_POST['password1'] == $_POST['password2'] ){

  //     $row = $this->model('Auth_model')->cekUsername();
  //     if($row['adm_username'] == $_POST['adm_username']){
  //       header('Location:'.BASEURL.'/auth/registrasi');
  //       exit;

  //     } else {

  //       if($this->model('Auth_model')->tambahUser($_POST) > 0 ){
          
  //         Flasher::setFlash('Registrasi','berhasil', 'dibuat','success');
  //         header('Location:'.BASEURL.'/auth/login');
  //         exit;

  //       }else {
  //         Flasher::setFlash('Registrasi','gagal', 'dibuat','danger');
  //         header('Location:'.BASEURL.'/auth/registrasi');
  //         exit;
  //       }
  //     }
    
  //   }else{
  //     Flasher::setFlash('Registrasi','gagal', 'dibuat, password harus sama','danger');
  //     header('Location:'.BASEURL.'/auth/registrasi');
  //     exit;
    
  //   }

  // }


  public function prosesLogin(){

    //check post
    if ( $_SERVER['REQUEST_METHOD'] == 'POST'){

      //sanitize input
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      $data = [
          'adm_username' => trim($_POST['adm_username']),
          'adm_password' => trim($_POST['adm_password'])
      ];

      // cek username dalam database
      if ($loginUser = $this->model('Auth_model')->cekLogin($data)){
        
        // set session
        
          $_SESSION['login'] = true;
          $_SESSION['role_id'] = $loginUser['role_id'];
          $_SESSION['adm_id'] = $loginUser['adm_id'];

          //redirect
          if ( $_SESSION['role_id'] == 1 ) {

            Flasher::setFlash('Login','berhasil', ', Anda Telah login kedalam sistem','success');
            header('Location:'.BASEURL.'/home');
            exit;

          } elseif ( $_SESSION['role_id'] == 2 ){

            Flasher::setFlash('Login','berhasil', ', Anda Telah login kedalam sistem','success');
            header('Location:'.BASEURL.'/home/cs');
            exit;

          } else {
          
          Flasher::setFlash('Login','berhasil', ', Anda Telah login kedalam sistem','success');
          header('Location:'.BASEURL.'/home/spv');
          exit;
          
        }
          

        
        
        // $_SESSION['adm_id'] = $loginUser['adm_id'];
        // $_SESSION['login'] = 'sudahLogin';
        
      } else {

        Flasher::setFlash('Login','gagal', 'username/password salah!','danger');
        header('Location:' .BASEURL.'/auth/login');
        exit;

      } 

    //   $loginUser = $this->model('Auth_model')->cekLogin($data);
    //   if ($loginUser){
          
    //     $_SESSION['admin'] = true;
    //     $_SESSION['adm_id'] = $data['adm_id'];

    //   header('Location:'.BASEURL.'/home');
    //   exit;
      
    // } else {
    //     header('Location:' .BASEURL.'/auth/login');
    //     exit;
    //   }
    } 
  }

  // public function forgotPassword(){

  //   $user = $this->model('Auth_model')->cekEmail($_POST);
  //   if ( $user['adm_email'] == $_POST['adm_email']){

  //     header('Location: ' . BASEURL . '/auth/confirmNohp');
  //     exit;

  //   }else{

  //     Flasher::setFlash('email', 'anda', 'salah', 'danger');
  //     header('Location: ' . BASEURL . '/auth/forgot');
  //     exit;
  //   }

  // }



  
  


 



}

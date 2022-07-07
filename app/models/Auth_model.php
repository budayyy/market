<?php 
date_default_timezone_set('Asia/Jakarta');

class Auth_model {

  private $table = 'administrator';
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function admMaxCode(){
    $this->db->query("SELECT max(adm_id) as kode FROM administrator");
    return $this->db->single();
  }

  public function admCode(){
    $hasil = $this->admMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 2);
    $num++;
    $char  = 'AD';
    $newID = $char . sprintf("%09s", $num);
    
    return $newID;
  }

  public function jumlahRole(){
    $this->db->query("SELECT * FROM user_role ");
    return $this->db->resultSet();
  }

  // public function cekUser(){
  //   $this->db->query("SELECT * FROM administrator WHERE adm_username=:adm_username ");
  //   $this->db->single();
  //   return $this->db->rowCount();
  // }

  public function cekUsername(){

    $username = $_POST['adm_username'];
    $this->db->query("SELECT * FROM administrator WHERE adm_username =:adm_username");
    $this->db->bind('adm_username', $username);
    return $this->db->single();

  }

  public function tambahUser($data){

    $adm_id = $this->admCode();
    $tgl = date('Y-m-d H:i:s');

    $password1 = $data['password1'];
    $password2 = $data['password2'];

    if ($password1!==$password2) {
      echo "<script>
       alert('Konfirmasi Password Salah')
           </script>";
           return false;
    }

    $password = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO administrator
              VALUES
              ('$adm_id', :adm_name, :adm_email, :adm_phone, :adm_username, '$password', :role_id ,  '$tgl', '$tgl');
              ";
    
    $this->db->query($query);
    $this->db->bind('adm_name', $data['adm_name']);
    $this->db->bind('adm_email', $data['adm_email']);
    $this->db->bind('adm_phone', $data['adm_phone']);
    $this->db->bind('adm_username', $data['adm_username']);
    $this->db->bind('role_id', $data['role_id']);
    

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function cekLogin(){

    $username = $_POST['adm_username'];
    $password = $_POST['adm_password'];

    $this->db->query('SELECT * FROM administrator WHERE adm_username =:adm_username');

    //bind
    $this->db->bind('adm_username', $username);
    $row = $this->db->single();

    $passwordHash = $row['adm_password'];

    if (password_verify($password, $passwordHash)){
      return $row;
    }


  }

  // public function checkLogin($data){

  //   $query = "SELECT * FROM administrator WHERE adm_username=:adm_username AND adm_password=:adm_password";
  //   $this->db->query($query);

  //   $this->db->bind('adm_username', $data['adm_username']);
  //   $this->db->bind('adm_password', $data['adm_password']);
  //   $data = $this->db->single();
  //   if(password_verify($password, $data['adm_password'])){
      
  //   }
  //   return $data;
  // }

  public function cekEmail(){
    $email = $_POST['adm_email'];

    $query = "SELECT * FROM administrator WHERE adm_email='$email'";
    $hasil = $this->db->query($query);
    $hasil = $this->db->bind('adm_email', $email);
    $hasil = $this->db->single();
    return $hasil;
  }


  public function cekNohp(){
    $phone = $_POST['adm_phone'];

    $query = "SELECT * FROM administrator WHERE adm_phone='$phone'";
    $hasil = $this->db->query($query);
    $hasil = $this->db->bind('adm_phone', $phone);
    $hasil = $this->db->single();
    return $hasil;
  }

  public function resetPassword(){
    var_dump($_POST);

    $id = $_POST['adm_id'];
    $password1 = $_POST['password1'];
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $sql = "UPDATE administrator SET adm_password = :adm_password WHERE adm_id = :adm_id";
    $this->db->query($sql);
    $this->db->bind('adm_password', $password);
    $this->db->bind('adm_id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }


  

}
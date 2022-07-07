<?php 

date_default_timezone_set("Asia/Jakarta");

class Profile_model{

  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function dataSession(){

    $adm_id = $_SESSION['adm_id'];
    $result = $this->db->query("SELECT * FROM administrator WHERE adm_id=:adm_id");
    $result = $this->db->bind('adm_id', $adm_id);
    $result = $this->db->single();
    return $result;
    
  }


  public function ubahDataProfile($data){

    $tgl = date('Y-m-d H:i:s');

    $query = " UPDATE administrator SET 
              adm_name = :adm_name,
              adm_email = :adm_email,
              adm_phone = :adm_phone,
              adm_username = :adm_username,
              adm_update = :adm_update
              WHERE adm_id = :adm_id";

    $this->db->query($query);
    $this->db->bind('adm_name', $data['adm_name']);
    $this->db->bind('adm_email', $data['adm_email']);
    $this->db->bind('adm_phone', $data['adm_phone']);
    $this->db->bind('adm_username', $data['adm_username']);
    $this->db->bind('adm_update', $tgl);
    $this->db->bind('adm_id', $data['adm_id']);
    
    $this->db->execute();
    return $this->db->rowCount();

  }

  public function cekPassword($data){
    
    $id = $data['adm_id'];
    $hasil = $this->db->query("SELECT * FROM administrator WHERE adm_id=:adm_id");
    $hasil = $this->db->bind('adm_id', $id);
    $hasil = $this->db->single();
    
    return $hasil;
  }

  public function ubahPassword($data){

    $id = $data['adm_id'];
    $password1 = $data['passwordBaru1'];
    $password2 = $data['passwordBaru2'];

    $password = password_hash($password1, PASSWORD_DEFAULT);
    $query = " UPDATE administrator SET adm_password=:adm_password WHERE adm_id=:adm_id ";
    $this->db->query($query);
    $this->db->bind('adm_password', $password);
    $this->db->bind('adm_id', $id);
    $this->db->execute();

    return $this->db->rowCount();
    
  }


  




}
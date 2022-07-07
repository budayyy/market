<?php 


date_default_timezone_set("Asia/Jakarta");

class Member_model{
  private $table = 'member';
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getAllMember(){
    $this->db->query('SELECT * FROM ' .$this->table);
    return $this->db->resultSet();
  }

  public function cekUsernameMember(){

    $username = $_POST['mb_username'];
    $this->db->query('SELECT * FROM member WHERE mb_username =:mb_username');
    $this->db->bind('mb_username', $username);
    return $this->db->single();

  }

  public function mbMaxCode(){
    $this->db->query("SELECT max(mb_id) as kode FROM member");
    return $this->db->single();
  }

  public function mbCode(){
    $hasil = $this->mbMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 2);
    $num++;
    $char  = 'MB';
    $newID = $char . sprintf("%09s", $num);
    
    return $newID;
  }

  public function tambahMember($data){

    $mb_id = $this->mbCode();
    $tgl = date('Y-m-d H:i:s');
    $password1 = $data['mb_password'];
    
    $password = password_hash($password1, PASSWORD_DEFAULT);

    $query = " INSERT INTO member VALUES 
             ('$mb_id', :mb_name, :mb_email, :mb_phone, :mb_username, '$password', :mb_type, '$tgl', '$tgl' );
             ";
    
    $this->db->query($query);
    $this->db->bind('mb_name', $data['mb_name']);
    $this->db->bind('mb_email', $data['mb_email']);
    $this->db->bind('mb_phone', $data['mb_phone']);
    $this->db->bind('mb_username', $data['mb_username']);
    $this->db->bind('mb_type', $data['mb_type']);
    
    $this->db->execute();
    return $this->db->rowCount();
  
  }

  public function hapusDataMember($id){

    $query = "DELETE FROM member WHERE mb_id= :mb_id";
    $this->db->query($query);
    $this->db->bind('mb_id', $id);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function ubahDataMember($data){

    $tgl = date('Y-m-d H:i:s');
    
    $query = " UPDATE member SET 
              mb_name = :mb_name,
              mb_email = :mb_email,
              mb_phone = :mb_phone,
              mb_username = :mb_username,
              mb_type = :mb_type,
              mb_update = :mb_update
              WHERE mb_id = :mb_id";

    $this->db->query($query);
    $this->db->bind('mb_name', $data['mb_name']);
    $this->db->bind('mb_email', $data['mb_email']);
    $this->db->bind('mb_phone', $data['mb_phone']);
    $this->db->bind('mb_username', $data['mb_username']);
    $this->db->bind('mb_type', $data['mb_type']);
    $this->db->bind('mb_update', $tgl);
    $this->db->bind('mb_id', $data['mb_id']);
    
    $this->db->execute();
    return $this->db->rowCount();
  }




}
<?php 

date_default_timezone_set("Asia/Jakarta");

class Consultant_model {

  private $db;


  public function __construct(){
    $this->db = new Database;
  }

  // mengambil semua data consultant dari database
  public function getAllConsultant(){
    $this->db->query('SELECT * FROM architect_consultant');
    return $this->db->resultSet();
  }

  //mencari kode terbesar dari database
  public function acMaxCode(){
    $this->db->query("SELECT max(ac_id) as kode FROM architect_consultant ");
    return $this->db->single();
  }

  // code generator
  public function consultCode(){

    $hasil = $this->acMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 3);
    $num++;
    $char  = 'ARC';
    $newID = $char . sprintf("%09s", $num);
    
    return $newID;

  }

  //menambah data consultant ke dalam database
  public function tambahDataConsultant($data){

    $ac_id = $this->consultCode();
    $tgl = date('Y-m-d H:i:s');

    $query = " INSERT INTO architect_consultant VALUES 
             ('$ac_id',:ac_name,:ac_email,:ac_phone,:name_pt,:ac_payment,'$tgl', '$tgl')";

    $this->db->query($query);
    $this->db->bind('ac_name', $data['ac_name']);
    $this->db->bind('ac_email', $data['ac_email']);
    $this->db->bind('ac_phone', $data['ac_phone']);
    $this->db->bind('name_pt', $data['name_pt']);
    $this->db->bind('ac_payment', $data['ac_payment']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  //menghapus data consultant dari database
  public function hapusDataConsultant($id){

    $query = " DELETE FROM architect_consultant WHERE ac_id=:ac_id ";
    $this->db->query($query);
    $this->db->bind('ac_id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  // mengubah data consultant dari database
  public function ubahDataConsultant($data){

    $tgl = date('Y-m-d H:i:s');

    $query = " UPDATE architect_consultant SET 
              ac_name = :ac_name,
              ac_email = :ac_email,
              ac_phone = :ac_phone,
              name_pt = :name_pt,
              ac_payment = :ac_payment,
              ac_update = :ac_update
              WHERE ac_id = :ac_id";

    $this->db->query($query);
    $this->db->bind('ac_name', $data['ac_name']);
    $this->db->bind('ac_email', $data['ac_email']);
    $this->db->bind('ac_phone', $data['ac_phone']);
    $this->db->bind('name_pt', $data['name_pt']);
    $this->db->bind('ac_payment', $data['ac_payment']);
    $this->db->bind('ac_update', $tgl);
    $this->db->bind('ac_id', $data['ac_id']);
    
    
    $this->db->execute();
    return $this->db->rowCount();

  }







}
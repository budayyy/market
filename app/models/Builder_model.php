<?php 

date_default_timezone_set("Asia/Jakarta");

class Builder_model {

  private $db;


  public function __construct(){
    $this->db = new Database;
  }


  public function getAllBuilder(){

    $this->db->query('SELECT * FROM handyman_service');
    return $this->db->resultSet();

  }

  //mencari kode terbesar dari database
  public function hsMaxCode(){
    $this->db->query("SELECT max(hs_id) as kode FROM handyman_service");
    return $this->db->single();
  }

  //code generator
  public function builderCode(){
    $hasil = $this->hsMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 2);
    $num++;
    $char  = 'HS';
    $newID = $char . sprintf("%04s", $num);
    
    return $newID;
  }


  //menambah data builder ke dalam database
  public function tambahDataBuilder($data){

    $hs_id = $this->builderCode();
    $tgl = date('Y-m-d H:i:s');
    
    $query = " INSERT INTO handyman_service VALUES 
             ('$hs_id',:hs_name,:hs_phone,:hs_harga,'$tgl', '$tgl')";

    $this->db->query($query);
    $this->db->bind('hs_name', $data['hs_name']);
    $this->db->bind('hs_phone', $data['hs_phone']);
    $this->db->bind('hs_harga', $data['hs_harga']);
    $this->db->execute();

    return $this->db->rowCount();

  }


  // menghapus data builder dari database
  public function hapusDataBuilder($id){
    
    $query = "DELETE FROM handyman_service WHERE hs_id=:hs_id";
    $this->db->query($query);
    $this->db->bind('hs_id', $id);
    $this->db->execute();
    return $this->db->rowCount();

  }


  //memngubah data builder dari database
  public function ubahDataBuilder($data){
    $tgl = date('Y-m-d H:i:s');

    $query = " UPDATE handyman_service SET 
              hs_name = :hs_name,
              hs_phone = :hs_phone,
              hs_harga = :hs_harga,
              hs_update = :hs_update
              WHERE hs_id = :hs_id";

    $this->db->query($query);
    $this->db->bind('hs_name', $data['hs_name']);
    $this->db->bind('hs_phone', $data['hs_phone']);
    $this->db->bind('hs_harga', $data['hs_harga']);
    $this->db->bind('hs_update', $tgl);
    $this->db->bind('hs_id', $data['hs_id']);
    
    
    $this->db->execute();
    return $this->db->rowCount();
  }








}
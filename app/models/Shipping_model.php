<?php 

date_default_timezone_set("Asia/Jakarta");

class Shipping_model{

  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getAllShipping(){

    $query = " SELECT * FROM shipping ";
    
    $this->db->query($query);
    return $this->db->resultSet();

  }

  //mengambil kode terbesar dari database
  public function shpMaxCode(){
    $this->db->query("SELECT max(shp_id) as kode FROM shipping");
    return $this->db->single();
  }

  // code generator 
  public function shippingCode(){
    
    $hasil = $this->shpMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 3);
    $num++;
    $char  = 'SHP';
    $newID = $char . sprintf("%02s", $num);
    
    return $newID;
  }

  //query tambah data shipping
  public function tambahDataShipping($data){

    $shp_id = $this->shippingCode();
    $tgl = date('Y-m-d H:i:s');

    $query = " INSERT INTO shipping VALUES ('$shp_id',:shp_name, :shp_jenis, '$tgl', '$tgl' ) ";

    $this->db->query($query);

    $this->db->bind('shp_name', $data['shp_name']);
    $this->db->bind('shp_jenis', $data['shp_jenis']);

    $this->db->execute();
    return $this->db->rowCount();

  }

  //query hapus data shipping
  public function hapusDataShipping($id){

    $query = " DELETE FROM shipping WHERE shp_id=:shp_id ";
    $this->db->query($query);
    $this->db->bind('shp_id', $id);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function ubahDataShipping($data){

    $tgl = date('Y-m-d H:i:s');
    
    $query = " UPDATE shipping SET 
              shp_name = :shp_name,
              shp_jenis = :shp_jenis,
              shp_update = :shp_update
              WHERE shp_id = :shp_id";

    $this->db->query($query);
    $this->db->bind('shp_name', $data['shp_name']);
    $this->db->bind('shp_jenis', $data['shp_jenis']);
    $this->db->bind('shp_update', $tgl);
    $this->db->bind('shp_id', $data['shp_id']);
    
    $this->db->execute();
    
    return $this->db->rowCount();
  }




}
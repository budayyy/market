<?php 

date_default_timezone_set("Asia/Jakarta");

class City_model {
  private $tableProvince = 'province';
  private $db;
  
  public function __construct(){
    $this->db = new Database;
  }

  //mencari kode terbesar
  public function ctyMaxCode(){
    $this->db->query("SELECT max(cty_id) as kode FROM city");
    return $this->db->single();
  }

  // code generator 
  public function cityCode(){
    
    $hasil = $this->ctyMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 2);
    $num++;
    $char  = 'CT';
    $newID = $char . sprintf("%05s", $num);
    
    return $newID;
  }

  public function getAllCity(){

    $query = " SELECT city.cty_id, province.prv_name, city.cty_name, city.cty_create, city.cty_prv_id FROM province INNER JOIN city ON province.prv_id=city.cty_prv_id ";
    $this->db->query($query);

    return $this->db->resultSet();
  }

  public function getAllProvince(){

    $this->db->query('SELECT * FROM ' . $this->tableProvince);
    return $this->db->resultSet();
  }

  public function tambahDataCity($data){
    $cty_id = $this->cityCode();
    $tgl = date('Y-m-d H:i:s');

    $query = "INSERT INTO city
              VALUES
              ('$cty_id',:cty_prv_id,:cty_name , '$tgl','$tgl')";
    $this->db->query($query);
    $this->db->bind('cty_prv_id', $data['namaProvinsi']);
    $this->db->bind('cty_name', $data['namaKota']);

    $this->db->execute();
    return $this->db->rowCount();
  }



  public function hapusDataCity($id){

    $query = "DELETE FROM city WHERE cty_id= :cty_id";
    $this->db->query($query);
    $this->db->bind('cty_id', $id);

    $this->db->execute();
    return $this->db->rowCount();

  }

  public function ubahDataCity($data){

    // var_dump($data);

    $tgl = date('Y-m-d H:i:s');
    $query = " UPDATE city SET 
              cty_prv_id =:cty_prv_id,
              cty_name = :cty_name,
              cty_update = '$tgl'
              WHERE cty_id = :cty_id";

    $this->db->query($query);
    $this->db->bind('cty_prv_id', $data['namaProvinsi']);
    $this->db->bind('cty_name', $data['namaKota']);
    $this->db->bind('cty_id', $data['cty_id']);
    
    $this->db->execute();
    
    return $this->db->rowCount();

  }




}
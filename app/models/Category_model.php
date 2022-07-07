<?php 

date_default_timezone_set("Asia/Jakarta");

class Category_model {
  
  private $table = 'category';
  private $db;
  public $tgl;

  public function __construct(){
    $this->db = new Database;
  }

  
  //mengambil kode terbesar dari database
  public function ctgMaxCode(){
    $this->db->query("SELECT max(ctg_id) as kode FROM category");
    return $this->db->single();
  }

  // code generator 
  public function categoryCode(){
    
    $hasil = $this->ctgMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 3);
    $num++;
    $char  = 'CTG';
    $newID = $char . sprintf("%04s", $num);
    
    return $newID;
  }

  public function getAllCategory(){
    $this->db->query('SELECT * FROM ' .$this->table);
    return $this->db->resultSet();
  }

  public function getCategoryById($id){
    $this->db->query('SELECT * FROM ' .$this->table.' WHERE ctg_id=:ctg_id');
    $this->db->bind('ctg_id', $id);
    return $this->db->single();
  }

  public function tambahDataCategory($data){

    $ctg_id = $this->categoryCode();
    $tgl = date('Y-m-d H:i:s');

    $query = "INSERT INTO category
              VALUES
              ('$ctg_id',:ctg_name, '$tgl', '$tgl')";
    $this->db->query($query);
    $this->db->bind('ctg_name', $data['ctg_name']);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusDataCategory($id){

    $query = "DELETE FROM category WHERE ctg_id= :ctg_id";
    $this->db->query($query);
    $this->db->bind('ctg_id', $id);

    $this->db->execute();
    return $this->db->rowCount();
  }

  public function ubahDataCategory($data){
    
    $tgl = date('Y-m-d H:i:s');
    $query = " UPDATE category SET 
              ctg_name = :ctg_name,
              ctg_update = '$tgl'
              WHERE ctg_id = :ctg_id";

    $this->db->query($query);
    $this->db->bind('ctg_name', $data['ctg_name']);
    $this->db->bind('ctg_id', $data['ctg_id']);
    
    $this->db->execute();
    
    return $this->db->rowCount();
  }


  





}
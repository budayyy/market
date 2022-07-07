<?php 

date_default_timezone_set("Asia/Jakarta");

class Retail_model{

  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  // mengambil data retail
  public function getAllRetail(){
    $query = " SELECT * FROM retail JOIN member ON retail.rtl_mb_id=member.mb_id JOIN city ON city.cty_id=retail.rtl_city";
    $this->db->query($query);
    return $this->db->resultSet();

  }

  public function getRetailById($id){

    $query = " SELECT *, member.mb_name, member.mb_phone, city.cty_name FROM retail JOIN member ON retail.rtl_mb_id=member.mb_id JOIN city ON city.cty_id=retail.rtl_city WHERE rtl_id='$id' ";
    
    $this->db->query($query);
    $this->db->bind('rtl_id', $id);

    return $this->db->single();
  }

  public function getAllProduct($id){

    $query = " SELECT * FROM product WHERE prd_rtl_id='$id' ";
    $this->db->query($query);
    $this->db->bind('prd_rtl_id', $id);

    return $this->db->resultSet();
  }

  public function jumlahProduct($id){

    $query = "SELECT * FROM product WHERE prd_rtl_id='$id' ";
    $hasil = $this->db->query($query);
    $this->db->bind('prd_rtl_id', $id);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  //hapus data retail dari database
  public function hapusDataRetail($id){

    $query = " DELETE FROM retail WHERE rtl_id=:rtl_id ";
    $this->db->query($query);
    $this->db->bind('rtl_id', $id);

    $this->db->execute();
    return $this->db->rowCount();

  }

  //mengambil data member dari database
  public function getAllMember(){
    $this->db->query('SELECT * FROM member ');
    return $this->db->resultSet();
  }

  //validasi Data Retail
  public  function validasiDataRetail($data){

    $tgl = date('Y-m-d H:i:s');
    $query = " UPDATE retail SET 
              rtl_status =:rtl_status,
              rtl_update = '$tgl'
              WHERE rtl_id = :rtl_id";

    $this->db->query($query);
    $this->db->bind('rtl_status', $data['rtl_status']);
    $this->db->bind('rtl_id', $data['rtl_id']);
    
    $this->db->execute();
    
    return $this->db->rowCount();

  }

  // mengambil data retail yang telah validate
  public function getAllValidate(){

    $query = " SELECT * FROM retail JOIN member ON retail.rtl_mb_id=member.mb_id JOIN city ON city.cty_id=retail.rtl_city WHERE retail.rtl_status='Validate' OR retail.rtl_status='Nonactive' ";
    $this->db->query($query);
    return $this->db->resultSet();

  }

  // mengambil data retail yang telah Rejected
  public function getAllRejected(){

    $query = " SELECT * FROM retail JOIN member ON retail.rtl_mb_id=member.mb_id JOIN city ON city.cty_id=retail.rtl_city WHERE retail.rtl_status='Rejected' ";
    $this->db->query($query);
    return $this->db->resultSet();

  }

  // mengambil data retail yang telah Riview
  public function getAllRiview(){

    $query = " SELECT * FROM retail JOIN member ON retail.rtl_mb_id=member.mb_id JOIN city ON city.cty_id=retail.rtl_city WHERE retail.rtl_status='Review' ";
    $this->db->query($query);
    return $this->db->resultSet();

  }

  //jumlah data retail yg di review
  public function jumlahRetailReview(){

    $query = "SELECT * FROM retail WHERE rtl_status='Review' ";
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }



}
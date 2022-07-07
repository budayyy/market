<?php 

date_default_timezone_set("Asia/Jakarta");

class Payment_model{

  private $db;


  public function __construct(){
    $this->db = new Database;
  }

  public function getAllPayment(){
    $this->db->query('SELECT * FROM payment');
    return $this->db->resultSet();
  }

  //mengambil kode terbesar dari database
  public function payMaxCode(){
    $this->db->query("SELECT max(pay_id) as kode FROM payment");
    return $this->db->single();
  }

  // code generator 
  public function paymentCode(){
    
    $hasil = $this->payMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 3);
    $num++;
    $char  = 'PYM';
    $newID = $char . sprintf("%05s", $num);
    
    return $newID;
  }

  public function tambahDataPayment($data){

    $pay_id = $this->paymentCode();
    $tgl = date('Y-m-d H:i:s');
    $query = " INSERT INTO payment VALUES 
             ('$pay_id',:pay_name ,'$tgl', '$tgl' )";
    $this->db->query($query);
    $this->db->bind('pay_name', $data['pay_name']);
    $this->db->execute();

    return $this->db->rowCount();
  }

  public function ubahDataPayment($data){

    $tgl = date('Y-m-d H:i:s');
    
    $query = " UPDATE payment SET 
              pay_name = :pay_name,
              pay_update = :pay_update
              WHERE pay_id = :pay_id";

    $this->db->query($query);
    $this->db->bind('pay_name', $data['pay_name']);
    $this->db->bind('pay_name', $tgl);
    $this->db->bind('pay_id', $data['pay_id']);
    
    $this->db->execute();
    return $this->db->rowCount();
  }

  public function hapusDataPayment($id){

    $query = " DELETE FROM payment WHERE pay_id=:pay_id ";
    $this->db->query($query);
    $this->db->bind('pay_id', $id);

    $this->db->execute();
    return $this->db->rowCount();

  }






}
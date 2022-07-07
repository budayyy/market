<?php 

class Home_model {

  private $tableCategory = 'category';
  private $tableCity = 'city';
  private $tableShipping = 'shipping';
  private $tableOrder = '`order`';
  private $tablePayment = 'payment';
  private $tableMember = 'member';
  private $tableConsult = 'architect_consultant';
  private $tableBuilder = 'handyman_service';
  private $tableUser = 'administrator';
  private $tableRetail = 'retail';
  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function jumlahCategory(){

    $query = "SELECT * FROM " . $this->tableCategory;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahKota(){

    $query = "SELECT * FROM " . $this->tableCity;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahShipping(){

    $query = "SELECT * FROM " . $this->tableShipping;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahOrders(){

    $query = "SELECT * FROM " . $this->tableOrder;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahPayment(){

    $query = "SELECT * FROM " . $this->tablePayment;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahMember(){

    $query = "SELECT * FROM " . $this->tableMember;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahConsult(){

    $query = "SELECT * FROM " . $this->tableConsult;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahBuilder(){

    $query = "SELECT * FROM " . $this->tableBuilder;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahRetail(){

    $query = "SELECT * FROM " . $this->tableRetail;
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function jumlahUser(){

    $query = "SELECT * FROM " . $this->tableUser." WHERE role_id != 1 ";
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function dataSession(){
    
    $adm_id = $_SESSION['adm_id'];
    $result = $this->db->query("SELECT * FROM administrator WHERE adm_id=:adm_id");
    $result = $this->db->bind('adm_id', $adm_id);
    $result = $this->db->single();
    return $result;

  }

  public function updateNotif(){
    $query = "UPDATE notif SET status = 0 WHERE status = 1 ";
    $this->db->query($query);
    return $this->db->execute();
  }

  public function tampilNotif(){
    $member = 'MB';
    $sql = "SELECT * FROM notif WHERE status = 1 && asal='$member' ORDER BY id_notif  DESC LIMIT 5 ";
    $this->db->query($sql);
    return $this->db->resultSet();
  }

  public function jumlahNotif(){
    $member = 'MB';
    $query = "SELECT * FROM notif WHERE status = 1 && asal='$member' ";
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function editNotifStatus($id){
    $query = "UPDATE notif SET status = 0 WHERE id_notif = :id_notif";
    $this->db->query($query);
    $this->db->bind('id_notif', $id);
    $this->db->execute();

    $sql = "SELECT * FROM notif WHERE id_notif = '$id'";
    $hasil = $this->db->query($sql);
    $hasil = $this->db->single();
    return $hasil;
  }


}
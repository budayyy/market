<?php 

date_default_timezone_set("Asia/Jakarta");

class User_model {

  private $db;

  public function __construct(){
    $this->db = new Database;
  }

  public function getAllUser(){

    $this->db->query('SELECT * FROM administrator JOIN user_role ON administrator.role_id=user_role.id WHERE role_id != 1 ORDER BY adm_id ');
    return $this->db->resultSet();

  }

  public function jumlahRole(){
    $this->db->query("SELECT * FROM user_role WHERE id != 1 ");
    return $this->db->resultSet();
  }

  public function hapusDataUser($id){
    
    $query = "DELETE FROM administrator WHERE adm_id=:adm_id";
    $this->db->query($query);
    $this->db->bind('adm_id', $id);
    $this->db->execute();
    return $this->db->rowCount();
  }



}
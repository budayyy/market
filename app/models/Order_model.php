<?php 

class Order_model{

  private $db;

  public function __construct(){
    $this->db = new Database;
  
  }

  public function getAllOrder(){

    $query = " SELECT `order`.odr_id, `order`.odr_date, member.mb_name, shipping.shp_name, retail.rtl_name, payment.pay_name, address.adr_address, `order`.odr_status, (SELECT SUM(order_detail.odd_totalprice) FROM order_detail WHERE order_detail.odr_id=`order`.`odr_id`) + `order`.odr_ongkir AS total_bayar FROM `order` JOIN member ON `order`.odr_mb_id=member.mb_id JOIN address ON `order`.odr_adr_id=address.adr_id JOIN shipping ON shipping.shp_id=`order`.odr_shp_id JOIN retail ON retail.rtl_id=`order`.odr_rtl_id JOIN payment ON payment.pay_id=`order`.odr_pay_id ";

    $this->db->query($query);
    return $this->db->resultSet();

  }

  public function getOrderById($id){

    $query = " SELECT retail.rtl_name, retail.rtl_addres, retail.rtl_phone, member.mb_name, address.adr_address, member.mb_phone, member.mb_email, `order`.odr_id, `order`.odr_date,`order`.odr_ongkir, `order`.odr_status, shipping.shp_name, payment.pay_name FROM `order` JOIN retail ON `order`.odr_rtl_id=retail.rtl_id JOIN member ON member.mb_id=`order`.odr_mb_id JOIN address ON `order`.odr_adr_id=address.adr_id JOIN shipping ON shipping.shp_id=`order`.odr_shp_id JOIN payment ON payment.pay_id=`order`.odr_pay_id WHERE `order`.odr_id='$id' ";
    
    $this->db->query($query);
    $this->db->bind('odr_id', $id);

    return $this->db->single();
  }

  public function getAllProduct($id){

    $query = " SELECT * FROM order_detail JOIN product ON product.prd_id=order_detail.odd_prd_id JOIN category ON category.ctg_id=product.prd_ctg_id WHERE odr_id=:odr_id ";
    $this->db->query($query);
    $this->db->bind('odr_id', $id);

    return $this->db->resultSet();
  }

  //validasi Data Order
  public function validasiDataOrder($data){

    $query = " UPDATE `order` SET 
              odr_status =:odr_status
              WHERE odr_id = :odr_id";

    $this->db->query($query);
    $this->db->bind('odr_status', $data['odr_status']);
    $this->db->bind('odr_id', $data['odr_id']);
    
    $this->db->execute();
    
    return $this->db->rowCount();

  }

  public function totalBayar(){

   $query = " SELECT *, `order`.odr_id, SUM(order_detail.odd_totalprice) + `order`.odr_ongkir AS total_bayar FROM order_detail JOIN `order` ON order_detail.odr_id=`order`.odr_id ";

    $this->db->query($query);
    return $this->db->resultSet();

  }



}
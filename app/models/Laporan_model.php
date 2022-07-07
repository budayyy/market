<?php 

date_default_timezone_set("Asia/Jakarta");

class Laporan_model {

  private $db;


  public function __construct(){
    $this->db = new Database;
  }

  public function daftarCategory(){
    $query = "SELECT * FROM category";
    $this->db->query($query);
    return $this->db->resultSet(); 
  }

  public function penjualan(){
    $query = "SELECT DISTINCT category.ctg_name, SUM(order_detail.odd_qty) AS total_terjual, SUM(order_detail.odd_totalprice) AS harga_total FROM category JOIN product ON category.ctg_id=prd_ctg_id JOIN order_detail ON order_detail.odd_prd_id=product.prd_id GROUP BY product.prd_ctg_id";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function jumlah_penjualan(){
    $query = "SELECT DISTINCT category.ctg_name, SUM(order_detail.odd_qty) AS total_terjual, SUM(order_detail.odd_totalprice) AS harga_total FROM category JOIN product ON category.ctg_id=prd_ctg_id JOIN order_detail ON order_detail.odd_prd_id=product.prd_id GROUP BY product.prd_ctg_id";
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
  }

  public function penjualan_kategori(){

    $output = '';
    if (isset($_POST['kategori_id'])){
      $kategori_id = $_POST['kategori_id'];
      if($_POST['kategori_id'] != ''){

        $query = "SELECT DISTINCT category.ctg_name, SUM(order_detail.odd_qty) AS total_terjual, SUM(order_detail.odd_totalprice) AS harga_total FROM category JOIN product ON category.ctg_id=prd_ctg_id JOIN order_detail ON order_detail.odd_prd_id=product.prd_id WHERE product.prd_ctg_id='$kategori_id' ";
        $this->db->query($query);
        $hasil = $this->db->resultSet();

      } else {

        $query = "SELECT DISTINCT category.ctg_name, SUM(order_detail.odd_qty) AS total_terjual, SUM(order_detail.odd_totalprice) AS harga_total FROM category JOIN product ON category.ctg_id=prd_ctg_id JOIN order_detail ON order_detail.odd_prd_id=product.prd_id GROUP BY product.prd_ctg_id";
        $this->db->query($query);
        $hasil = $this->db->resultSet();
      }

      $i=1;
      foreach ($hasil as $row){
      $output = '
      <thead>
      <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Total Terjual</th>
        <th>Harga Total</th>
      </tr>
      </thead>
      <tbody>
        <tr>
          <td>'.$i.'</td>
          <td>'.$row['ctg_name'].'</td>
          <td>'.$row['total_terjual'].'</td>
          <td>'.$row['harga_total'].'</td>
        </tr>
      </tbody>
      ';
      }
      
      return $output;
    }
    

  }

  public function penjualan_cari(){
    $tgl = $_POST['tanggal'];

    $query = "SELECT DISTINCT category.ctg_name, SUM(order_detail.odd_qty) AS total_terjual, SUM(order_detail.odd_totalprice) AS harga_total FROM category JOIN product ON category.ctg_id=prd_ctg_id JOIN order_detail ON order_detail.odd_prd_id=product.prd_id GROUP BY product.prd_ctg_id";
  }

  public function terbanyak(){
   $query = "SELECT * FROM order_detail ORDER BY odd_qty DESC";
   $this->db->query($query);
   return $this->db->resultSet();
  }

  public function terbanyak_kategori(){
  
    $output = '';
    if (isset($_POST['kategori_id'])){
      $kategori_id = $_POST['kategori_id'];
      $query = "SELECT product.prd_ctg_id, order_detail.odd_prd_name, order_detail.odd_qty, order_detail.odd_totalprice FROM product JOIN order_detail ON product.prd_id=order_detail.odd_prd_id WHERE prd_ctg_id='$kategori_id'";
      $result = $this->db->query($query);
      $result = $this->db->resultSet();

      $i = 1;
      foreach ($result as $row){
        $output = '
        <tr>
          <td>'.$i.'</td>
          <td>'.$row['odd_prd_name'].'</td>
          <td>'.$row['odd_qty'].'</td>
          <td>'.$row['odd_totalprice'].'</td>
        </tr>
        ';
        $i++;
        var_dump($output);
      }
    }
  }

  public function jumlah_barang(){
    $query = "SELECT * FROM order_detail ORDER BY odd_qty DESC";
    $hasil = $this->db->query($query);
    $hasil = $this->db->resultSet();
    $akhir = count($hasil);
    return $akhir;
   }

  public function periode(){
    $query = "SELECT odd_create, SUM(odd_qty) as total_terjual, SUM(odd_totalprice) as harga_total FROM order_detail GROUP BY MONTH(odd_create) ";
    $this->db->query($query);
    return $this->db->resultSet();
  }

  public function kategori_terbanyak(){
    $keyword = $_POST['kategori'];
    $query = "SELECT * FROM order_detail JOIN product ON order_detail.odd_prd_id=product.prd_id WHERE product.prd_ctg_id=:kategori";
    $this->db->query($query);
    $this->db->bind('kategori', $keyword);
    return $this->db->resultSet();
  }

  public function chart(){

    $query = "SELECT odd_create, SUM(odd_qty) as total_terjual, SUM(odd_totalprice) as harga_total FROM order_detail GROUP BY MONTH(odd_create) ASC ";
    $this->db->query($query);
    return $this->db->resultSet();
  }


  public function jumlah(){
    $query = "SELECT SUM(odd_qty) as total_terjual, SUM(odd_totalprice) as harga_total FROM order_detail";
   $this->db->query($query);
   return $this->db->resultSet();
  }

  













}
<?php 
date_default_timezone_set("Asia/Jakarta");

class Laporan extends Controller {

  public function __construct(){
  
    if(!isset($_SESSION['login'])){
      header('location: '. BASEURL . '/auth/login');
      exit;
    }

  }

  public function index(){

    $data['judul'] = 'Laporan';
    $data['subjudul'] = 'dashboard';
    $data['bulan'] = ["januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"]; 
    
    $chart = $this->model('Laporan_model')->chart();
    $data['jumlah'] = $this->model('Laporan_model')->jumlah();

    
    foreach($data['jumlah'] as $row){
        $total_terjual = $row['total_terjual'];
    }

    foreach($data['jumlah'] as $row){
      $harga_total = $row['harga_total'];
    }
    
    $terbanyak = [];
    foreach($chart as $row){
     $terbanyak[] = $row['total_terjual'];
    }

    $tertinggi = [];
    foreach($chart as $row){
      $tertinggi[] = $row['harga_total'];
    }

    $data['terbanyak'] = $terbanyak;
    $data['tertinggi'] = $tertinggi;
    $data['total_terjual'] = $total_terjual;
    $data['harga_total'] = $harga_total;
    $this->view('templates/header', $data);
    $this->view('laporan/index', $data);
    $this->view('templates/footer', $data);

  }

  public function dataChart(){
    $chart = $this->model('Laporan_model')->chart();
    $data['jumlah'] = $this->model('Laporan_model')->jumlah();

    
    foreach($data['jumlah'] as $row){
        $total_terjual = $row['total_terjual'];
    }

    foreach($data['jumlah'] as $row){
      $harga_total = $row['harga_total'];
    }
    
    $terbanyak = [];
    foreach($chart as $row){
     $terbanyak[] = $row['total_terjual'];
    }

    $tertinggi = [];
    foreach($chart as $row){
      $tertinggi[] = $row['harga_total'];
    }

    $data['terbanyak'] = $terbanyak;
    $data['tertinggi'] = $tertinggi;
    $data['total_terjual'] = $total_terjual;
    $data['harga_total'] = $harga_total;
    echo json_encode($data);
  }

  public function penjualan(){

    $data['judul'] = 'Laporan';
    $data['subjudul'] = 'penjualan';
    $data['ctg'] = $this->model('Laporan_model')->daftarCategory();
    $data['penjualan'] = $this->model('Laporan_model')->penjualan();
    $data['jumlah'] = $this->model('Laporan_model')->jumlah();
    $data['jumlah_penjualan'] = $this->model('Laporan_model')->jumlah_penjualan();
    
    foreach($data['jumlah'] as $row){
      $total_terjual = $row['total_terjual'];
    }

    foreach($data['jumlah'] as $row){
      $harga_total = $row['harga_total'];
    }

    $data['total_terjual'] = $total_terjual;
    $data['harga_total'] = $harga_total;
    $this->view('templates/header', $data);
    $this->view('laporan/penjualan', $data);
    $this->view('templates/footer');

  }

  public function penjualan_kategori(){
     echo $this->model('Laporan_model')->penjualan_kategori($_POST);
  }

  public function penjualan_cari(){
    echo $this->model('Laporan_model')->penjualan_cari($_POST);
  }

  public function terbanyak(){

    $data['judul'] = 'Laporan';
    $data['subjudul'] = 'terbanyak';
    $data['ctg'] = $this->model('Laporan_model')->daftarCategory();
    $data['terbanyak'] = $this->model('Laporan_model')->terbanyak();
    $data['jumlah'] = $this->model('Laporan_model')->jumlah();
    $data['jumlah_penjualan'] = $this->model('Laporan_model')->jumlah_penjualan();
    $data['jumlah_barang'] = $this->model('Laporan_model')->jumlah_barang();
    
    foreach($data['jumlah'] as $row){
      $total_terjual = $row['total_terjual'];
    }

    foreach($data['jumlah'] as $row){
      $harga_total = $row['harga_total'];
    }

    $data['total_terjual'] = $total_terjual;
    $data['harga_total'] = $harga_total;
    $this->view('templates/header', $data);
    $this->view('laporan/terbanyak', $data);
    $this->view('templates/footer');

  }

  public function terbanyak_kategori(){
    echo $this->model('Laporan_model')->terbanyak_kategori($_POST);
  }

  public function periode(){

    $data['judul'] = 'Laporan';
    $data['subjudul'] = 'periode';
    
    $data['ctg'] = $this->model('Laporan_model')->daftarCategory();
    $data['periode'] = $this->model('Laporan_model')->periode();
    $data['jumlah'] = $this->model('Laporan_model')->jumlah();
    $data['jumlah_penjualan'] = $this->model('Laporan_model')->jumlah_penjualan();
    
    foreach($data['jumlah'] as $row){
      $total_terjual = $row['total_terjual'];
    }

    foreach($data['jumlah'] as $row){
      $harga_total = $row['harga_total'];
    }

    $data['total_terjual'] = $total_terjual;
    $data['harga_total'] = $harga_total;
    $this->view('templates/header', $data);
    $this->view('laporan/periode', $data);
    $this->view('templates/footer');

  }

  public function peiode_kategori(){
    var_dump($_POST);
  }

  public function kategori_terbanyak(){
    $data['judul'] = 'Laporan';
    $data['subjudul'] = 'terbanyak';
    $data['ctg'] = $this->model('Laporan_model')->daftarCategory();
    $data['terbanyak'] = $this->model('Laporan_model')->kategori_terbanyak();

    $this->view('templates/header', $data);
    $this->view('laporan/terbanyak', $data);
    $this->view('templates/footer');
  }

  public function penjualan_export(){
    $data['penjualan'] = $this->model('Laporan_model')->penjualan();
    $this->view('laporan/penjualan_export', $data);
  }

  public function periode_export(){
    $data['periode'] = $this->model('Laporan_model')->periode();
    $this->view('laporan/periode_export', $data);
  }

  public function terbanyak_export(){
    $data['terbanyak'] = $this->model('Laporan_model')->terbanyak();
    $this->view('laporan/terbanyak_export', $data);
  }

  public function penjualan_pdf(){

    $tgl = date('Y - m  -d H:i:s');
    $dataPenjualan = $this->model('Laporan_model')->penjualan();

    // setting pdf
    $pdf = new FPDF('p','mm','A4');
    // membuat pdf baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B','18');
    
    //header
    $pdf->Image('http://localhost/market/public/img/logo.png', 10, 6, 30);
    // mencetak judul
    $pdf->Cell(190,10,'Laporan Data Penjualan ', 0,1,'C');
    $pdf->Cell(190,10,'BINA APPS ', 0,1,'C');
    $pdf->Line(10,40,200,40);
    $pdf->Cell(10,20,'',0,1);
    
    // mencetak tanggal hari ini
    $pdf->SetFont('Arial','','10');
    $pdf->cell(40,10,'Tanggal laporan dibuat : '.$tgl.'');
    $pdf->Ln();

    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B','10');
    $pdf->Cell(20,8,'No',1,0,'C');
    $pdf->Cell(70,8,'Kategori',1,0,'C');
    $pdf->Cell(50,8,'Total Terjual',1,0,'C');
    $pdf->Cell(50,8,'Harga Total',1,0,'C');
    $pdf->Ln();

    //mengatur isi tabel
    $pdf->SetFont('Arial','','10');
    $i = 1;
    foreach ($dataPenjualan as $row){
      $pdf->Cell(20,8,$i,1,0,'C');
      $pdf->Cell(70,8,$row['ctg_name'],1,0,'C');
      $pdf->Cell(50,8,$row['total_terjual'],1,0,'C');
      $pdf->Cell(50,8,number_format($row['harga_total']),1,0,'C');
      $i++;
      $pdf->Ln();
    }

    $pdf->Ln();
    $pdf->SetFont('Arial','B','10');
    $pdf->cell(40,5,'TTD');
    $pdf->Ln();
    $pdf->cell(40,5,'Bina Apps Solutions');
    
    // menampilkan tulisan
    $pdf->Output();


  }

  public function terbanyak_pdf(){

    $tgl = date('Y - m  -d H:i:s');
    $dataTerbanyak = $this->model('Laporan_model')->terbanyak();

    // setting pdf
    $pdf = new FPDF('p','mm','A4');
    // membuat pdf baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B','18');
    
    //header
    $pdf->Image('http://localhost/market/public/img/logo.png', 10, 6, 30);
    // mencetak judul
    $pdf->Cell(190,10,'Laporan Data Penjualan Terbanyak ', 0,1,'C');
    $pdf->Cell(190,10,'BINA APPS ', 0,1,'C');
    $pdf->Line(10,40,200,40);
    $pdf->Cell(10,20,'',0,1);
    
    // mencetak tanggal hari ini
    $pdf->SetFont('Arial','','10');
    $pdf->cell(40,10,'Tanggal laporan dibuat : '.$tgl.'');
    $pdf->Ln();

    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B','10');
    $pdf->Cell(20,8,'No',1,0,'C');
    $pdf->Cell(100,8,'Nama Barang',1,0,'C');
    $pdf->Cell(30,8,'Total Terjual',1,0,'C');
    $pdf->Cell(40,8,'Harga Total',1,0,'C');
    $pdf->Ln();

    //mengatur isi tabel
    $pdf->SetFont('Arial','','10');
    $i = 1;
    foreach ($dataTerbanyak as $row){
      $pdf->Cell(20,8,$i,1,0,'C');
      $pdf->Cell(100,8,$row['odd_prd_name'],1,0,'C');
      $pdf->Cell(30,8,$row['odd_qty'],1,0,'C');
      $pdf->Cell(40,8,number_format($row['odd_totalprice']),1,0,'C');
      $i++;
      $pdf->Ln();
    }

    $pdf->Ln();
    $pdf->SetFont('Arial','B','10');
    $pdf->cell(40,5,'TTD');
    $pdf->Ln();
    $pdf->cell(40,5,'Bina Apps Solutions');
    
    // menampilkan tulisan
    $pdf->Output();


  }

  public function periode_pdf(){

    $tgl = date('Y - m  -d H:i:s');
    $dataPeriode = $this->model('Laporan_model')->periode();

    // setting pdf
    $pdf = new FPDF('p','mm','A4');
    // membuat pdf baru
    $pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B','18');
    
    //header
    $pdf->Image('http://localhost/market/public/img/logo.png', 10, 6, 30);
    // mencetak judul
    $pdf->Cell(190,10,'Laporan Data Penjualan Periode ', 0,1,'C');
    $pdf->Cell(190,10,'BINA APPS ', 0,1,'C');
    $pdf->Line(10,40,200,40);
    $pdf->Cell(10,20,'',0,1);
    
    // mencetak tanggal hari ini
    $pdf->SetFont('Arial','','10');
    $pdf->cell(40,10,'Tanggal laporan dibuat : '.$tgl.'');
    $pdf->Ln();

    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B','10');
    $pdf->Cell(20,8,'No',1,0,'C');
    $pdf->Cell(70,8,'Bulan',1,0,'C');
    $pdf->Cell(50,8,'Total Barang Terjual',1,0,'C');
    $pdf->Cell(50,8,'Harga Total',1,0,'C');
    $pdf->Ln();

    //mengatur isi tabel
    $pdf->SetFont('Arial','','10');
    $i = 1;
    foreach ($dataPeriode as $row){
      $pdf->Cell(20,8,$i,1,0,'C');
      $pdf->Cell(70,8,date('F', strtotime($row['odd_create'])),1,0,'C');
      $pdf->Cell(50,8,$row['total_terjual'],1,0,'C');
      $pdf->Cell(50,8,number_format($row['harga_total']),1,0,'C');
      $i++;
      $pdf->Ln();
    }

    $pdf->Ln();
    $pdf->SetFont('Arial','B','10');
    $pdf->cell(40,5,'TTD');
    $pdf->Ln();
    $pdf->cell(40,5,'Bina Apps Solutions');
    
    // menampilkan tulisan
    $pdf->Output();


  }



  













}
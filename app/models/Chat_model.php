<?php 

date_default_timezone_set("Asia/Jakarta");

class Chat_model {

  private $db;
  public $tgl;

  public function __construct(){
    $this->db = new Database;
  }
  
  public function dataSession(){
    
    $adm_id = $_SESSION['adm_id'];
    $result = $this->db->query("SELECT adm_username FROM administrator WHERE adm_id=:adm_id");
    $result = $this->db->bind('adm_id', $adm_id);
    $result = $this->db->single();
    return $result;
    
  }

  //mengambil kode terbesar dari database
  public function chatMaxCode(){
    $this->db->query("SELECT max(chat_id) as kode FROM chat_admin");
    return $this->db->single();
  }

  // code generator 
  public function chatCode(){
    
    $hasil = $this->chatMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 3);
    $num++;
    $char  = 'CHT';
    $newID = $char . sprintf("%08s", $num);
    
    return $newID;
  }

  //mengambil kode terbesar dari database
  public function notifMaxCode(){
    $this->db->query("SELECT max(id_notif) as kode FROM notif");
    return $this->db->single();
  }

  // code generator 
  public function notifCode(){
    
    $hasil = $this->chatMaxCode();
    $kode  = $hasil['kode'];
    $num   = (int)substr($kode, 3);
    $num++;
    $char  = 'NTF';
    $newID = $char . sprintf("%08s", $num);
    
    return $newID;
  }
  
  public function daftarObrolan(){
    $query  = "SELECT DISTINCT member.mb_name, member.mb_username, member.mb_picture FROM member JOIN chat_admin ON member.mb_username=chat_admin.pengirim";
    $result = $this->db->query($query);
    $result = $this->db->resultSet();
    
    return $result; 
  }

  public function historiObrolan($data){
    
    $username = $data['adm_username'];
    $temanObrolan = $data['temanObrolan'];
    $output = '';

    //mencari data temanObrolan
    $cari = "SELECT * FROM member WHERE  mb_username = '$temanObrolan' ";
    $queryMember = $this->db->query($cari);
    $queryMember = $this->db->single();
    $gambarTemanObrol = $queryMember['mb_picture'];

    //mencari data administrator
    $query = "SELECT * FROM administrator WHERE adm_username = '$username[adm_username]' ";
    $queryAdmin = $this->db->query($query);
    $queryAdmin = $this->db->single();
    $gambarAdmin = $queryAdmin['picture'];

    //mencari data histori obrolan
    $sql = "SELECT * FROM chat_admin WHERE 
            (pengirim = '$username[adm_username]' AND penerima = '$temanObrolan')
            OR 
            (pengirim = '$temanObrolan' AND penerima = '$username[adm_username]')
            ORDER BY chat_id ASC ";
    $queryChat = $this->db->query($sql);
    $queryChat = $this->db->resultSet();

    foreach ( $queryChat as $row ){
      
      $id       = $row['chat_id'];
      $penerima = $row['penerima'];
      $penerima = $row['pengirim'];
      $chat     = $row['chat'];
      $datetime = $row['datetime'];
      $gambarTemanObrol = $gambarTemanObrol;
      $gambarAdmin = $gambarAdmin;
      $temanObrolan = $temanObrolan;

      if ($penerima == $temanObrolan){

        $output .=
        '<div class="direct-chat-msg">
          <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-left">'.$penerima.'</span>
            <span class="direct-chat-timestamp float-right">'.date('H:i:s a', strtotime($datetime)).'</span>
          </div>
          <img class="direct-chat-img" src="../public/img/'.$gambarTemanObrol.'" alt="message user image">
          <div class="direct-chat-text">
          '.$chat.'
          </div>
        </div>';

        
      }else{
        
        $output .=
        '<div class="direct-chat-msg right">
          <div class="direct-chat-infos clearfix">
            <span class="direct-chat-name float-right">'.$penerima.'</span>
            <span class="direct-chat-timestamp float-left">'. date('H:i:s a', strtotime($datetime)).'</span>
          </div>
          <img class="direct-chat-img" src="../public/img/'.$gambarAdmin.'" alt="message user image">
          <div class="direct-chat-text">
          '.$chat.'
          </div>
        </div>';
      }
    }

    return $output;
    mysqli_close($this->db);
  }

  public function kirimPesan($data){

    $tgl = date('Y-m-d H:i:s');
    $chat_id = $this->chatCode();

    $pengirim = $data['adm_username'];
    $penerima = $data['temanObrolan'];
    $pesan    = $data['pesan'];

    $sql = "INSERT INTO chat_admin (chat_id, pengirim, penerima, chat, datetime) VALUES ('$chat_id','$pengirim','$penerima','$pesan','$tgl')";
    $query = $this->db->query($sql);
    $query = $this->db->bind('chat_id', $chat_id);
    $query = $this->db->bind('pengirim', $pengirim);
    $query = $this->db->bind('penerima', $penerima);
    $query = $this->db->bind('chat', $pesan);
    $query = $this->db->bind('datetime', $tgl);
    $query = $this->db->execute();

    $query = $this->db->rowCount();
    return $query;
  }

  











}
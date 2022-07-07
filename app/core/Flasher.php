<?php 


class Flasher {

  public static function setFlash($nama, $pesan, $aksi, $tipe){

    $_SESSION['flash'] = [
      'nama'  =>  $nama,
      'pesan' => $pesan,
      'aksi' => $aksi,
      'tipe' => $tipe
    
    ];
  }

  public static function flash(){

    if ( isset($_SESSION['flash']) ){

      echo '<div class="alert alert-'.$_SESSION['flash']['tipe'].'" role="alert">
              Data ' .$_SESSION['flash']['nama']. '<strong> ' .$_SESSION['flash']['pesan']. ' </strong> ' .$_SESSION['flash']['aksi']. '
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
      
      unset($_SESSION['flash']);

    }
  }


}
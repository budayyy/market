<?php 

class Logout extends Controller{

  public function __construct(){

    session_start();
    session_destroy();

    header("Location:".BASEURL."");
    exit;
  } 


}

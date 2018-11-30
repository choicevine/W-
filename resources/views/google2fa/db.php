<?php 
class DB
{   
  private $mysqli;
  public function __construct()
  {
      $this->mysqli =new mysqli('localhost', 'root', '', 'otp_witts');
  }
  public function query($sql)
  {
    return $this->mysql->query($sql);
  }
}
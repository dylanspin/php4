<?php
  namespace models;

  class DatabaseModel extends \mvc\Model {

    private function createConnection() {
        $mysqli = mysqli_connect("localhost", "root", "" , "php4");
      if($mysqli === false) {
        die("No connection");
      }
      return $mysqli;
    }

    public function DataUsers() {
      $conn = $this->createConnection();//connectie
      $sql = "SELECT * from users";//pak alles uit de table users
      $result = mysqli_query($conn,$sql);//result
      return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

  }
?>

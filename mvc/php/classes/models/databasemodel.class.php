<?php
  namespace models;

  class DatabaseModel extends \mvc\Model {

    private function Connection() {
      $sql = mysqli_connect("localhost","root","","php4");
      if($sql === false) {
        die("No connection");
      }
      return $sql;
    }

    public function DataUsers() {
      $conn = $this->Connection();//connectie
      $sql = "SELECT * FROM users";//pak alles uit de table users
      $result = mysqli_query($conn,$sql);//result

      return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function test(){
      return "test";
    }

  }
?>

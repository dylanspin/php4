<?php
  namespace models;

  class ModelModel extends \mvc\Model {

    private function createConnection() {
      $mysqli = mysqli_connect("localhost", "root", "" , "");//"localhost", "root", "" , "a4 php"
      if($mysqli === false) {
        die("No connection");
      }
      return $mysqli;
    }

    public function getAllData() {
      $conn = $this->createConnection();
      $sql = "SELECT * from personen";
      $result = mysqli_query($conn,$sql);
      return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }
  }
?>

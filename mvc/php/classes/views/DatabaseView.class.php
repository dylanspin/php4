<?php

  namespace views;

  class DatabaseView extends \mvc\View {

    public function getHTML() {

      $data = $this->model->DataUsers();
      $output = "<table class='table'>";
      $output .= "<th>ID</th><th>Username</th><th>Email</th><th>TelNmr</th><th>Voornaam</th><th>Achternaam</th>";

      foreach ($data as $row) {
        $output .= "<tr>";
        $output .= "<td>" . $row['Id'] . "</td>";
        $output .= "<td>" . $row['Username'] . "</td>";
        $output .= "<td>" . $row['Email'] . "</td>";
        $output .= "<td>" . $row['TelNmr'] . "</td>";
        $output .= "<td>" . $row['Voornaam'] . "</td>";
        $output .= "<td>" . $row['Achternaam'] . "</td>";
        $output .= "</tr>";
      }

      $output .= "</table>";

      return $output;
    }
  }

?>

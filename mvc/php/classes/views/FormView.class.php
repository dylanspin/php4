<?php

  namespace views;

  class FormView extends \mvc\View {
    public function getHTML(){

      $output = "<h1>Form</h1><br>";
      $output .= "<form method='GET'>";
      $output .= "<p>GebruikersNaam: <input type='text' name='GebruikersNaam'></p>";
      $output .= "<p>Email : <input type='mail' name='Email'></p>";
      $output .= "<p>telNmr : <input type='text' name='TelefoonNummer'></p>";
      $output .= "<p>Voornaam : <input type='text' name='Voornaam'></p>";
      $output .= "<p>Achternaam : <input type='text' name='Achternaam'></p>";
      $output .= "<input type='submit' name='submit'>";
      $output .= "</form><br>";

      $GebruikersNaam = filter_var($this->controller->getGetData("GebruikersNaam"), FILTER_SANITIZE_STRING);
      $Email = filter_var($this->controller->getGetData("Email"), FILTER_SANITIZE_STRING);
      $Tel = filter_var($this->controller->getGetData("TelefoonNummer"), FILTER_SANITIZE_STRING);
      $Voor = filter_var($this->controller->getGetData("Voornaam"), FILTER_SANITIZE_STRING);
      $Achter = filter_var($this->controller->getGetData("Achternaam"), FILTER_SANITIZE_STRING);

      $output .= "<h3>GebruikersNaam: ". $GebruikersNaam. "</h3>";
      $output .= "<h3>Email: ". $Email. "</h3>";
      $output .= "<h3>telNmr: ". $Tel. "</h3>";
      $output .= "<h3>Voornaam: ". $Voor. "</h3>";
      $output .= "<h3>Achternaam: ". $Achter. "</h3>";

      return $output;
    }
  }
 ?>

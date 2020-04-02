<?php

  namespace views;

  class FormView extends \mvc\View {
    public function getHTML() {
      $output = "<form method='get'>";
      $output .= "<input type='text' name='naam'><br>";
      $output .= "<input type='text' name='achternaam'><br>";
      $output .= "<input type='date' name='geboortedatum'><br>";
      return $output;
    }
  }
?>

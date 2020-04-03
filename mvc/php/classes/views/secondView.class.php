<?php

  namespace views;

  class SecondView extends \mvc\View {
    public function getHTML() {
      $output = "<h1>Second view</h1>";
      return $output;
    }
  }

?>

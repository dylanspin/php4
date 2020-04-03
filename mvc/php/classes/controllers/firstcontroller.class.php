<?php
  namespace controllers;

  class FirstController extends \mvc\Controller {

    public function __construct() {
      header("location:second");//ga naar second 
    }

  }
 ?>

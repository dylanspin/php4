<?php
  define("DEFAULT_ROUTE", "home");

  $routes = array(
    "home" => array(
      "view" => "HomeView",
      "controller" => "HomeController",
    ),
    "form" => array(
      "view" => "FormView",
      "controller" => "FormController",
    ),
    "test" => array(
      "view" => "TestView",
      "controller" => "TestController",
    ),
    "database" => array(
      "view" => "DatabaseView",
      "controller" => "DatabaseController",
      "model" => "DatabaseModel",
    ),
    "first" => array(
      "controller" => "FirstController",
    ),
    "second" => array(
      "view" => "SecondView",
      "controller" => "SecondController",
    ),
  );

?>

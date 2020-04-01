<?php


  define("WEB_ROOT", DIRECTORY_SEPARATOR . "php-4/test" . DIRECTORY_SEPARATOR);
  define("LOCAL_ROOT", $_SERVER['DOCUMENT_ROOT'] . WEB_ROOT);

  spl_autoload_register(function ($class_name) {
      $parts = explode("\\", $class_name);
      require_once LOCAL_ROOT . "php/classes/" . implode("/", $parts) . '.class.php';
  });

 ?>

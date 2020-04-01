<?php require_once("../php/includes/default.inc.php")  ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>MVC structuur</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/master.css">
   </head>
   <body style="">
     <?php
        $app = new \mvc\App();
        echo $app;
      ?>
   </body>
 </html>

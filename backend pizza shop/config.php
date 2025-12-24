<?php

   $db_name = "mysql:host=localhost;port=3306;dbname=pizza_db";
   $username = "root";
   $password = "";


       $conn = new PDO($db_name, $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
?>
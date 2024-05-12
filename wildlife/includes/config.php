<?php

   $hostName = 'localhost';
   $userName = 'root';
   $password = '';
   $database = 'ecolife';

   $connection = mysqli_connect($hostName, $userName, $password, $database);

   if(!$connection){
      die("Connection faild!". mysqli_error());
   }
   
?>
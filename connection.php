<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "asif";

   $connection = mysqli_connect($server,$username,$password,$db) or die();


   if ($connection) {
   	# code...
   	echo "db connection successful";
   }
   else{
   	echo "connection fail";
   }


?>
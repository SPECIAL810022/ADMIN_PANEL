<?php

include 'connection.php';
$name = $_POST['name'];
$number = $_POST['number'];
$mail = $_POST['mail'];
$password = $_POST['pass'];

$language = implode(',', $_POST['lan']);



$insert = "INSERT INTO `saqlain`(`id`, `name`, `number`, `email`, `password`, `language`) VALUES ('','$name','$number','$mail','$password','$language')";


$result = mysqli_query($connection, $insert);

if ( !$result) {

	// header('location:final_page.php');
	die('connection is failed');
	# code...
} else{
	header("location:final_page.php");
}





?>
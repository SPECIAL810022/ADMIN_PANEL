<?php
include 'connection.php';
$uid = $_POST['update'];
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['mail'];
$password = $_POST['pass'];
$language = implode(",", $_POST['lan']);

$insert = mysqli_query($connection,"UPDATE `saqlain` SET `name`='$name',`number`='$number',`email`='$email',`password`='$password',`language`='$language' WHERE id = '$uid'") or die(mysqli_error($connection));
if ($insert) {
	header("location:final_page.php");
}



?>
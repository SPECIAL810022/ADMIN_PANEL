<?php

include 'connection.php';


$del = $_REQUEST['delete'];

$query = mysqli_query($connection, "DELETE FROM `saqlain` WHERE id ='$del'");



if ($query) {
	
	header('location:final_page.php');
}

// else{

// 	die('delete query is not working');
// }


?>


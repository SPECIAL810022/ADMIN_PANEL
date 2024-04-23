<?php

include 'connection.php';
$asif = mysqli_query($connection,'SELECT * FROM saqlain');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
    #add{
      float: right;
      padding-top: 30;
      margin-right: 30;

    }

    #add:hover{
      cursor: progress;
      background-color: yellow;
    }

  </style>

</head>
<body>

<div id="add"><a href="signin.php">ADD MORE DEATAIL'S CLICK HERE</a></div>
<table cellpadding="5" border="2">	
	<th>SL.NO</th>
	<th>NAME</th>
	<th>NUMBER</th>
	<th>EMAIL</th>
	<th>PASSWORD</th>
	<th>LANGUAGE</th>
  <th>DELETE</th>
  <th>UPDATE</th>

  <?php


   $sm = 0;
    while ($asif_fetch = mysqli_fetch_assoc($asif)) {


  ?>


     <tr>
     	<td><?php echo $sm + 1 ; $sm++;  ?></td>


      <!-- <td><?php echo $asif_fetch['id']; ?></td> -->
      <td><?php echo $asif_fetch['name']; ?></td>
      <td><?php echo $asif_fetch['number']; ?></td>
      <td><?php echo $asif_fetch['email']; ?></td>
      <td><?php echo $asif_fetch['password']; ?></td>
      <td><?php echo $asif_fetch['language']; ?></td>
      <td><a href="delete.php?delete=<?php echo $asif_fetch['id'] ?>">DELETE</td>
      <td><a href="update.php?update=<?php echo $asif_fetch['id'] ?>">UPDATE</td>

     </tr>


  <?php } ?>




	</table>


</body>
</html>
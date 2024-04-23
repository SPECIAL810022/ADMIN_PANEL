<?php
include 'connection.php';
$update = $_REQUEST['update'];
$query = mysqli_query($connection, "SELECT * FROM `saqlain` WHERE id='$update'");
$asif_fetch = mysqli_fetch_assoc($query);
$newArray = explode(",", $asif_fetch['language']);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
       <center>
       	<form method="post" action="update_back.php">
       	   <table cellpadding="2px" border="1">
       	   	<td><marquee>PLEASE FILL THE REGISTRATION FORM </marquee></td>
       	   	 <tr>
       	   	 	<td><label>NAME :</label>
       	   	 	<input type="text" name="name" value="<?php echo $asif_fetch['name']; ?>">
       	   	 	<input type="text" name="update" value="<?php echo $update ?>" hidden></td>

       	   	 </tr>

       	   	 <tr>
       	   	 	<td><label>NUMBER :</label>
       	   	 	<input type="text" name="number" value="<?php echo $asif_fetch['number']; ?>"></td>
       	   	 </tr>

       	   	 <tr>
       	   	 	<td><label>E-MAIL :</label>
       	   	 	<input type="text" name="mail" value="<?php echo $asif_fetch['email']; ?>"></td>
       	   	 </tr>

       	   	 <tr>
       	   	 	<td><label>PASSWORD :</label>
       	   	 	<input type="text" name="pass" value="<?php echo $asif_fetch['password']; ?>"></td>
       	   	 </tr>

       	   	 <tr>
       	   	 	<td><label>LANGUAGE :</label>
       	   	 	<input type="checkbox" name="lan[]" value="hindi" <?php if(in_array("hindi",$newArray)){ echo "checked";} ?>>HINDI
       	   	 	<input type="checkbox" name="lan[]" value="bengali" <?php if(in_array("bengali",$newArray)){ echo "checked";} ?>>BENGALI
       	   	 	<input type="checkbox" name="lan[]" value="english" <?php if(in_array("english",$newArray)){ echo "checked";} ?>>ENGLISH
               </td>
       	   	 </tr>
            
            <tr>
            	<td>
       	   	 <center><button type="submit" value="submit">SUBMIT</button></center>
       	   	</td>
       	   	</tr>
       	   </table>
       </form>
   </center>
</body>
</html>

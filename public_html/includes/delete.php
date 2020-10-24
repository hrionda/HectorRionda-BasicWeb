<!DOCTYPE html>

<html>
  <head>
    <title>Controller3Delete</title>
  </head>

  <body>
  
    <?php
	
	  if(!isset($_POST['found']))
	  {
		  $found = $Telephone;
	  }
	  
	  $sql = "DELETE FROM $tableName WHERE Telephone = '$Telephone'"; // Delete record with this Telephone number
	  $Telephone = trim($Telephone);
	  
	  //If record is found is not null and is the same as Telephone in text field
	  if ((strlen(trim($found)) > 0) && ($found == $Telephone))
	  {
		  if (mysqli_query($connection, $sql)) //If MySQL returns something not null/ if the deletion worked
		  {
			  $message =  "<span style=\"color: red;\">RECORD $Telephone DELETED</span>";
			  $found = "";
		  }
		  else
		  {
			  $message =  "<span style=\"color: red;\">RECORD $Telephone COULD NOT BE DELETED</span>";
		  }	  
	  }
	  else
	  {
		  $message =  "<span style=\"color: red;\">RECORD $Telephone CAN NOT BE DELETED OR IT DOES NOT EXIST</span>";
	  }
	  
	?>
	   
  </body>
</html>
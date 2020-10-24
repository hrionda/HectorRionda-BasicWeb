<!DOCTYPE html>

<html>
  <head>
    <title>Controller3Modify</title>
  </head>

  <body>
  
    <?php
	
	  if(!isset($_POST['found']))
	  {
		  $found = $Telephone;
	  }
	  
	  //If record found is not null and is the same as Telephone in text field
	  if ((strlen(trim($found)) > 0) && ($found == $Telephone))
	  {
		  $query = "UPDATE $tableName 
					SET Telephone = '$Telephone',
					Email = '$Email',
					LastName = '$Last',
					FirstName = '$First',
					Address = '$Address',
					City = '$City',
					State = '$State',
					Country = '$Country',
					Zip = '$Zip',
					Bengal = '$Bengal',
					Siamese = '$Siamese',
					British = '$British',
					Persian = '$Persian',
					Number = '$Number',
					Delivery = '$Delivery',
					Notes = '$Notes'
					WHERE Telephone = '$Telephone'";
		  
		  $sql = mysqli_query($connection, $query);
		  
		  if($sql) //If the UPDATE query was successful
		  {
			  $message = "<span style=\"color: blue;\">RECORD $Telephone MODIFIED</span>";
		  }
		  else
		  {
			  $message = "<span style=\"color: red;\">RECORD $Telephone CANNOT BE MODIFIED</span>";
		  }						
	  }
	  else
	  {
		  $message = "<span style=\"color: red;\">RECORD $Telephone CAN NOT BE MODIFIED, FIND IT FIRST</span>";
	  }
	  
	?>
	   
  </body>
</html>
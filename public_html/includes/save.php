<!DOCTYPE html>

<html>
  <head>
    <title>Controller3Save</title>
  </head>

  <body>
  
    <?php
	
	  $Telephone = trim($Telephone); //Remove spaces from left and right.
	  
	  if(strlen($Telephone) > 0) //if the length of the string is more than 0; not null
	  {
		  $sql = "INSERT INTO $tableName (
				  Telephone,
				  Email,
				  LastName,
				  FirstName,
				  Address,
				  City,
				  State,
				  Country,
				  Zip,
				  Bengal,
				  Siamese,
				  British,
				  Persian,
				  Number,
				  Delivery,
				  Notes)
				  VALUES (
				  '$Telephone',
				  '$Email',
				  '$Last',
				  '$First',
				  '$Address',
				  '$City',
				  '$State',
				  '$Country',
				  '$Zip',
				  '$Bengal',
				  '$Siamese',
				  '$British',
				  '$Persian',
				  '$Number',
				  '$Delivery',
				  '$Notes')";
				  
		  if (mysqli_query($connection, $sql)) //If the INSERT INTO query worked.
		  {
			  $message = "<span style=\"color: blue;\">RECORD $Telephone ADDED</span>";
		  }
		  else
		  {
			  $message = "<span style=\"color: red;\">RECORD $Telephone ALREADY EXISTS</span>";
		  }  
	  }
	  else
	  {
		  $message = "<span style=\"color: red;\">TELEPHONE CANNOT BE EMPTY. TRY AGAIN</span>";
	  }
		  
	?>
	   
  </body>
</html>
<!DOCTYPE html>

<html>
  <head>
    <title>Controller3Find</title>
  </head>

  <body>
  
    <?php
	
	  $sql = "SELECT * FROM $tableName WHERE Telephone = $Telephone"; //retrieve all fields from a record
	  
	  if ($result = mysqli_query($connection, $sql)) // if any data comes back
	  {
		  $rowCount = mysqli_num_rows($result); //retrieve amount of rows in query
		  while ($row = mysqli_fetch_array($result))
		  {
			  //Setting variables to information in existing SQL record.
			  $Telephone = $row['Telephone']; 
              $Email = $row['Email'];
              $Last = $row['LastName'];  
              $First = $row['FirstName'];
              $Address = $row['Address'];
              $City = $row['City'];
              $State = $row['State'];
              $Country = $row['Country'];
              $Zip = $row['Zip'];
              $Bengal = $row['Bengal'];
              $Siamese = $row['Siamese'];
              $British = $row['British'];
			  $Persian = $row['Persian'];
			  $Number = $row['Number'];
			  $Delivery = $row['Delivery']; 
			  $Notes = $row['Notes'];
		  }
	  
	      $Telephone=trim($Telephone);
	  
	      if($rowCount) //If there is any rows in query; if query generated any results
	      {
		      $found = $Telephone;
		      $message = "<span style=\"color: blue;\">RECORD $Telephone FOUND</span>";
	      }
	      else if (strlen($Telephone) == 0) //If nothing is in the Telephone text field
	      {
		      $message = "<span style=\"color: red;\">TELEPHONE CANNOT BE EMPTY. TRY AGAIN</span>";
		      $found = "";
	      }
	      else //If nothing was found despite proper input
	      {
		      $message = "<span style=\"color: red;\">RECORD $Telephone NOT FOUND</span>";
		      $found = "";
	      }
	  }
	  
	?>
	   
  </body>
</html>
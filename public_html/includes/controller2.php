<!DOCTYPE html>

<html>
  <head>
    <title>Controller2</title>
  </head>

  <body>
  
    <?php
	
	  $Telephone = $_POST['Telephone'];
	  $Email = $_POST['Email'];
	  $Last= $_POST['Last'];
	  $First = $_POST['First'];
	  $Address = $_POST['Address'];
	  $City = $_POST['City'];
	  $State = $_POST['State'];
	  $Country = $_POST['Country'];
	  $Zip = $_POST['Zip'];
	  $Bengal = $_POST['Bengal'];
	  $Siamese = $_POST['Siamese'];
	  $British = $_POST['British'];
	  $Persian = $_POST['Persian'];
	  $Number = $_POST['Number'];
	  $Delivery = $_POST['Delivery'];
	  $Notes = $_POST['Notes'];
	  
	  echo "This is controller2.php"."<br>";
	  echo "Called from program Program 2"."<br>";
	  echo "Telephone  $Telephone"."<br>";
	  echo "Email Address  $Email"."<br>";
	  echo "Last Name  $Last"."<br>";
	  echo "First Name  $First"."<br>";
	  echo "Address  $Address"."<br>";
	  echo "City  $City"."<br>";
	  echo "State $State"."<br>";
	  echo "Country  $Country"."<br>";
	  echo "ZIP  $Zip"."<br>";
	  echo "Select Breeds $Bengal ";
	  echo "$Siamese ";
	  echo "$British ";
	  echo "$Persian"."<br>";
	  echo "# of Cats  $Number"."<br>";
	  echo "Delivery  $Delivery"."<br>";
	  echo "Notes  $Notes"."<br>";
	  
	  if ($_POST['Save'])
	  {
		  echo "You pressed the Save Button";
	  }
	  else if ($_POST['Find'])
	  {
		  echo "You pressed the Find Button";
	  }
	  else if ($_POST['Modify'])
	  {
		  echo "You pressed the Modify Button";
	  }
	  else if ($_POST['Delete'])
	  {
		  echo "You pressed the Delete Button";
	  }
	   
	?>
	   
  </body>
</html>
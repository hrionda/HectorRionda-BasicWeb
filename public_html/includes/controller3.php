<!DOCTYPE html>

<html>
  <head>
    <title>Controller3</title>
  </head>

  <body>
  
    <?php
	  
	  //The credentials used to make this MySQL connection have been omitted for security reasons
	  $connection = mysqli_connect("", "", "", "");
	  
	  if (!$connection) //testing for connection error
	  {
		  echo "Failed to connect to MySQL: ".mysqli_connect_error();
	  }
	  else
	  {
		  $dbName = "spr20_hrion001";
		  $db_selected = mysqli_select_db($connection, $dbName);
		  
		  if (!db_selected) //If no db was selected with given dbName
		  {
			  die($dbName." does not exist, you cannot use it: ".mysqli_error());
		  }
		  else
		  {
			  $tableName = "customers";
			  $query = mysqli_query($connection, "SELECT * FROM $tableName");
			  
			  if (!$query)	//if query is null; table does not exist
			  {
				  echo "This table does not exist. Creating table..."."<br>";
				  
				  $sql = "CREATE TABLE $tableName (
						  Telephone VARCHAR(20) NOT NULL PRIMARY KEY,
						  Email VARCHAR(40),
						  LastName VARCHAR(20),
						  FirstName VARCHAR(20),
						  Address VARCHAR(30),
						  City VARCHAR(20),
						  State VARCHAR(20),
						  Country VARCHAR(20),
						  Zip VARCHAR(10),
						  Bengal VARCHAR(10),
						  Siamese VARCHAR(10),
						  British VARCHAR(10),
						  Persian VARCHAR(10),
						  Number VARCHAR(10),
						  Delivery VARCHAR(30),
						  Notes VARCHAR(200))";
					
					$result = mysqli_query($connection, $sql);
					if ($result) //If CREATE TABLE query returns a newly constructed table
					{
						echo "The table $tableName has been created."."<br>";
					}
					else
					{
						die("The table $tableName cannot be created: ".mysqli_error()."<br>");
					}
			  }
		  }
	  } //MySQL connection still open
	  
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
	  
	  $found = $_POST['found'];
	  
	  /// Determine which button was pressed, launch the required program.
	  if ($_POST['Save'])
	  {
		  include('save.php');
		  include('program3.php'); //Go back to program 3.
	  }
	  else if ($_POST['Find'])
	  {
		  include('find.php');
		  include('program3.php');
	  }
	  else if ($_POST['Modify'])
	  {
		  include('modify.php');
		  include('program3.php');
	  }
	  else if ($_POST['Delete'])
	  {
		  include('delete.php');
		  include('program3.php');
	  }
	  else if ($_POST['Clear'])
	  {
		  include('clear.php');
		  include('program3.php');
	  }
	  else if ($_POST['Contact_Me'])
	  {
		  include('contact_me.php');
	  }
	  else
	  {
		  echo "Error. Select one of the given buttons"."<br>";
	  }
	  
	  mysqli_close($connection); // End MySQL connection
	  
	?>
  </body>
</html>
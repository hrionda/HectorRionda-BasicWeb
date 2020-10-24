<!DOCTYPE html>

<html>
  <head>
    <title>ContactMeController</title>
  </head>
  
  <center>
	  
	  <?php include('rionda_header.php');?>
	  <br>
	  <font face="Times New Roman" color=red size=5><b>CONTACT ME</b></font>
	  <br>
	  <?php include('mainmenu.php');?>
	  <br>
	  
  </center>

  <body>
  
    <?php
	
	  $Email = $_POST['Email'];
	  $Last = $_POST['Last'];
	  $First= $_POST['First'];
	  $Option = $_POST['Option'];
	  $Coffee = $_POST['Coffee'];
	  $IT = $_POST['IT'];
	  $CS = $_POST['CS'];
	  $Physics = $_POST['Physics'];
	  $Comments = $_POST['Comments'];
	  
	  if ($_POST['Submit'])
	  {
		  $To = "";
		  $Subject = "Program 3 Output";
		  $EmailField = $_POST['EmailField'];
		  $LastNameField = $_POST['LastNameField'];
		  $FirstNameField = $_POST['FirstNameField'];
		  $Option = $_POST['Option'];
		  $Coffee = $_POST['Coffee'];
		  $IT = $_POST['IT'];
		  $CS = $_POST['CS'];
		  $Physics = $_POST['Physics'];
		  $Message = $_POST['Message'];
		  
		  $Body = "Your Email  $EmailField\nLast Name  $LastNameField\nFirst Name  $FirstNameField
		  \nOption         $Option\n\nCoffee         $Coffee\nMajor           $IT $CS $Physics\n\nMessage    $Message\n";
		  
		  mail($To, $Subject, $Body);
		  include('contact_me_confirm.php');
	  }
	  else if ($_POST['Clear'])
	  {
		  //The email used here for $To has been omitted for security reasons. Any valid email will work, however.
		  $To = "";
		  $Subject = "";
		  $EmailField = "";
		  $LastNameField = "";
		  $FirstNameField = "";
		  $Option = "";
		  $Coffee = "";
		  $IT = "";
		  $CS = "";
		  $Physics = "";
		  $Message = "";
	  }
	  
	?>
	
	<center>Your message has been submitted, thank you.</center>
  </body>
</html>
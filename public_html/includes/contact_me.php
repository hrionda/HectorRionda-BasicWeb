<!DOCTYPE html>

<html>
  <head>
    <title>Rionda, H, Program 3</title>

    <center>
	  
	  <?php include('rionda_header.php');?>
	  <br>
	  <font face="Times New Roman" color=red size=5><b>CONTACT ME</b></font>
	  <br>
	  <?php include('mainmenu.php');?>
	  <br>
	  
    </center>

  </head>

  <body>
    <center>
	
	  <form method="post" action="contact_me_controller.php">
	    <table style="width: 50%; padding-right: 8%;">
	      <tr>
		    <td style="width: 5%; text-align: right;">Your Email &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="EmailField" value="<?php echo $EmailField ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Last Name &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="LastNameField" value="<?php echo $LastNameField ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">First Name &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="FirstNameField" value="<?php echo $FirstNameField ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Option &nbsp;</td>
		    <td style="width: 20%; text-align: left">
	          <select name="Option" style="width:50%; size=1;";>
			    <option value="Option One" <?php if ($Option == "Option One") echo selected ?>> Option One </option>
				<option value="Option Two" <?php if ($Option == "Option Two") echo selected ?>> Option Two </option>
				<option value="Option Three" <?php if ($Option == "Option Three") echo selected ?>> Option Three </option>
			  </select>
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Coffee &nbsp;</td>
		    <td style="width: 20%; text-align: left">
	          <table>
			    <tr>
				  <td>
				    <input type="radio" name="Coffee" <?php if ($Number == "Light") echo checked;?> value="Light"> Light &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="radio" name="Coffee" <?php if ($Number == "Dark") echo checked;?> value="Dark"> Dark &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="radio" name="Coffee" <?php if ($Number == "Sweet") echo checked;?> value="Sweet"> Sweet &nbsp; &nbsp; 
				  </td>
				</tr>
			  </table>
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Major &nbsp;</td>
		    <td style="width: 20%; text-align: left">
	          <table>
			    <tr>
				  <td>
				    <input type="checkbox" name="IT" <?php if ($IT == "IT") echo checked;?> value="IT"> IT &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="checkbox" name="CS" <?php if ($CS == "CS") echo checked;?> value="CS"> CS &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="checkbox" name="Physics" <?php if ($Physics == "Physics") echo checked;?> value="Physics"> Physics &nbsp; &nbsp; 
				  </td>
				</tr>
			  </table>
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Message &nbsp;</td>
		    <td style="width:20%;">
	          <textarea name="Message" rows="5" cols="50">
			    <?php echo $Message; ?>
			  </textarea>
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 10%;"></td>
		    <td style="width: 20%;">
	          <input type="submit" name="Submit" value="Submit" style="width: 100px">
			  <input type="reset" name="Clear" value="Clear" style="width: 100px">
			</td>
		  </tr>
		
		</table>
		
	  </form>
	  
	</center>
	</form>
	
	<br>
	<center> <?php include('mainmenu.php');?> 
	</center>
  </body>
</html>
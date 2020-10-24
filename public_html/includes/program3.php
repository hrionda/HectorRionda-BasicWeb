<!DOCTYPE html>

<html>
  <head>
    <title>Rionda, H, Program 3</title>

    <center>
	  
	  <?php include('rionda_header.php');?>
	  <br>
	  <font face="Times New Roman" color=red size=5><b>Program 3</b></font>
	  <br>
	  <?php include('mainmenu.php');?>
	  <br>
	  
    </center>

  </head>

  <body>
    <center>
	
	  <form method="post" action="controller3.php">
	    <table style="width: 50%; padding-right: 8%;">
	      <tr>
		    <td style="width: 5%; text-align: right;">Telephone &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="Telephone" value="<?php echo $Telephone ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Email Address &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="Email" value="<?php echo $Email ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Last Name &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="Last" value="<?php echo $Last ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">First Name &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="First" value="<?php echo $First ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Address &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="Address" value="<?php echo $Address ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">City &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="City" value="<?php echo $City ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">State &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="State" value="<?php echo $State ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Country &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="Country" value="<?php echo $Country ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">ZIP &nbsp;</td>
		    <td style="width: 20%;">
	          <input type="text" name="Zip" value="<?php echo $Zip ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Select Breeds &nbsp;</td>
		    <td style="width: 20%; text-align: left">
	          <table>
			    <tr>
				  <td>
				    <input type="checkbox" name="Bengal" <?php if ($Bengal == "Bengal") echo checked;?> value="Bengal"> Bengal &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="checkbox" name="Siamese" <?php if ($Siamese == "Siamese") echo checked;?> value="Siamese"> Siamese &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="checkbox" name="British" <?php if ($British == "British") echo checked;?> value="British"> British Shorthair &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="checkbox" name="Persian" <?php if ($Persian == "Persian") echo checked;?> value="Persian"> Persian &nbsp; &nbsp; 
				  </td>
				</tr>
			  </table>
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;"># of Cats &nbsp;</td>
		    <td style="width: 20%; text-align: left">
	          <table>
			    <tr>
				  <td>
				    <input type="radio" name="Number" <?php if ($Number == "One") echo checked;?> value="One"> One &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="radio" name="Number" <?php if ($Number == "Two") echo checked;?> value="Two"> Two &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="radio" name="Number" <?php if ($Number == "Three") echo checked;?> value="Three"> Three &nbsp; &nbsp; 
				  </td>
				  <td>
				    <input type="radio" name="Number" <?php if ($Number == "Four") echo checked;?> value="Four"> Four &nbsp; &nbsp; 
				  </td>
				</tr>
			  </table>
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Delivery &nbsp;</td>
		    <td style="width: 20%; text-align: left">
	          <select name="Delivery" style="width:50%; size=1;";>
			    <option value="Standard - 7 Days" <?php if ($Delivery == "Standard - 7 Days") echo selected;?>> Standard - 7 Days </option>
				<option value="Expedited - 3-4 Days" <?php if ($Delivery == "Expedited - 3-4 Days") echo selected;?>> Expedited - 3-4 Days </option>
				<option value="Fastest - 2-3 Days" <?php if ($Delivery == "Fastest - 2-3 Days") echo selected;?>> Fastest - 2-3 Days </option>
			  </select> 
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">Notes &nbsp;</td>
		    <td style="width:20%;">
	          <textarea name="Notes" rows="5" cols="50">
			    <?php echo $Notes;?>
			  </textarea>
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 15%;"></td>
		    <td style="width: 20%;" align=center>
	          <?php echo $message ?>
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 10%;"></td>
		    <td style="width: 20%;">
	          <input type="submit" name="Save" value="Save" style="width: 85px">
			  <input type="submit" name="Find" value="Find" style="width: 85px">
			  <input type="submit" name="Modify" value="Modify" style="width: 85px">
			  <input type="submit" name="Delete" value="Delete" style="width: 85px">
			  <input type="submit" name="Clear" value="Clear" style="width: 85px">
			  <input type="submit" name="Contact_Me" value="Contact_Me" style="width: 85px">
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
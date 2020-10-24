<!DOCTYPE html>

<html>
  <head>
    <title>Rionda, H, Program 4</title>
	
	<style>
	
	  .tooltip 
      {
        position: relative;
        display: inline-block;
      }

      .tooltip .tooltiptext 
      {
        visibility: hidden;
        width: 120px;
        background-color: red;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        position: absolute;
        z-index: 1;
        bottom: 125%;
        left: 50%;
        margin-left: -60px;
        opacity: 0;
        transition: opacity 1s;
      }

      .tooltip .tooltiptext .tooltip-left 
      {
        top: -5px;
        bottom:auto;
        right: 128%;  
      }

      .tooltip .tooltiptext::after 
      {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: red transparent transparent transparent; /*arrow*/
      }

      .tooltip:hover .tooltiptext 
      {
        visibility: visible;
        opacity: 1;
      }
	  
	</style>
	
	<script>
	  
	  function currentTime()
	  {
		  var today = new Date();
		  var hour = today.getHours();
		  var minutes = today.getMinutes();
		  var seconds = today.getSeconds();
		  
		  minutes = checkTime(minutes); //return the new number after checking if it's less than 10.
		  seconds = checkTime(seconds);
		  
		  document.getElementById('txt').innerHTML = " &nbsp; Current Time: " + hour + ":" + minutes + ":" + seconds;
		  var t = setTimeout(function(){currentTime()}, 500);
	  }
	  
	  function checkTime(num) // Accepting time unit number as a parameter
	  {
		  if (num < 10) // If the number is less than 10, add a 0 in front of it. All numbers will have 2 digits.
		  {
			  num = "0" + num;
		  }
		  return num;
	  }
	  
	</script>

    <center>
	  <?php include('rionda_header.php');?>
	  <br>
    </center>

  </head>

  <body onload="currentTime()">
    <center>
	  
	  <script>
	  
	    loggedInTime();
		
		function loggedInTime() // Capture log in time, display to user.
		{
			var logTime = new Date();
			var timeWrite = "Logged in: " + logTime + '<div id="txt"></div>';
			document.write(timeWrite);
		}
		
		currentTime();
		
	  </script>
	  
	  <br>
	  <font face="Times New Roman" color=red size=5><b>Program 4</b></font>
	  <br>
	  <?php include('mainmenu.php');?>
	  <br>
	
	  <form method="post" action="controller4.php">
	    <table style="width: 50%; padding-right: 8%;">
	      <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Telephone &nbsp;
			    <span class="tooltiptext"><font color="yellow">Enter your telephone #. This field is required.</font></span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="Telephone" placeholder="Telephone" value="<?php echo $Telephone ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Email Address &nbsp;
			    <span class="tooltiptext">Enter your email address here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="Email" placeholder="Email Address" value="<?php echo $Email ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Last Name &nbsp;
			    <span class="tooltiptext">Enter your last name here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="Last" placeholder="Last Name" value="<?php echo $Last ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> First Name &nbsp;
			    <span class="tooltiptext">Enter your first name here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="First" placeholder="First Name" value="<?php echo $First ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Address &nbsp;
			    <span class="tooltiptext">Enter your Address here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="Address" placeholder="Address" value="<?php echo $Address ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> City &nbsp;
			    <span class="tooltiptext">Enter your city here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="City" placeholder="City" value="<?php echo $City ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> State &nbsp;
			    <span class="tooltiptext">Enter your state here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="State" placeholder="State" value="<?php echo $State ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Country &nbsp;
			    <span class="tooltiptext">Enter your country here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="Country" placeholder="Country" value="<?php echo $Country ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> ZIP &nbsp;
			    <span class="tooltiptext">Enter your ZIP/postal code here.</span>
			  </div>
			</td>
		    <td style="width: 20%;">
	          <input type="text" name="Zip" placeholder="ZIP/Postal" value="<?php echo $Zip ?>" style= "width: 50%;">
			</td>
		  </tr>
		  
		  <tr><td> &nbsp; </td></tr>
		  
		  <tr>
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Select Breeds &nbsp;
			    <span class="tooltiptext">Select the breeds you would like here.</span>
			  </div>
			</td>
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
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> # of Cats &nbsp;
			    <span class="tooltiptext">Select the number of cats you would like here.</span>
			  </div>
			</td>
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
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Delivery &nbsp;
			    <span class="tooltiptext">Choose a delivery option here.</span>
			  </div>
			</td>
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
		    <td style="width: 5%; text-align: right;">
			  <div class="tooltip"> Notes &nbsp;
			    <span class="tooltiptext">Provide any additional notes here.</span>
			  </div>
			</td>
		    <td style="width:20%;">
	          <textarea name="Notes" placeholder="Notes" rows="5" cols="50">
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
	          <input type="submit" name="Save" value="Save" style="width: 55px">
			  <input type="submit" name="Find" value="Find" style="width: 55px">
			  <input type="submit" name="Modify" value="Modify" style="width: 65px">
			  <input type="submit" name="Delete" value="Delete" style="width: 65px">
			  <input type="submit" name="Clear" value="Clear" style="width: 60px">
			  <input type="submit" name="Contact_Me" value="Contact_Me" style="width: 85px">
			  <input type="submit" name="Help" value="Help" style="width: 55px">
			  <input type="submit" name="About" value="About" style="width: 60px">
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
<!DOCTYPE html>

<html>
  <head>
    <title>Program 4 Help - Rionda, H</title>
  </head>

  <body onload="help()">
    
	<script>
	
	  function help()
	  {
		  var helpWindow = window.open("", "Program 4 Help", "width=300, height=600, scrollbars=yes, resizable=yes, left=80, top=80");
	      helpWindow.document.write("<head><b>HELP</b><hr></head><body>Below is information about what the submit buttons in Program 4 do: <br><br>" 
							      +"<b>-Save</b>: Saves given information as a record in a MySQL database table. <br>"
							      +"<b>-Find</b>: Retrieves and displays information about a MySQL record based on a given Telephone number. <br>"
							      +"<b>-Modify</b>: Modifies information about a MySQL record based on a given Telephone number. <br>"
							      +"<b>-Delete</b>: Deletes information about a MySQL record based on a given Telephone number. <br>"
							      +"<b>-Clear</b>: Clears the screen and the fields of any information. <br>"
							      +"<b>-Contact_Me</b>: Redirects to the Contact Me page of Program 3. <br>"
							      +"<b>-Help</b>: Opens this window, providing information about what the submit buttons do. <br>"
							      +"<b>-About</b>: Redirects to the the About page for Program 4. </body>");
	  }
	
	</script>
    
  </body>
</html>
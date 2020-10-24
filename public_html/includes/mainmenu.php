<!DOCTYPE html>
<html>
<head>

  <style type="text/css">
  
    nav ul ul
    {
	   display: none;
    }
          
    nav ul li:hover > ul 
    {
        display: block;
    }
        
    nav ul 
    {
        background: lightgray;
		font-family: Arial;
		font-weight: bold;
        box-shadow: 0px 0px 6px rgba(0,0,0,0.15);
        padding: 0px;
        border-radius: 0px;
        list-style: none;
        position: relative;
        display: inline-table;
    }
          
    nav ul li 
    {
		float: left;
    }
        
	nav ul li:hover 
    {
        background: gray;
        background: linear-gradient(top, #4f5964 0%, #5f6975 40%);
    }
		
    nav ul li:hover a 
    {
        color: yellow;
    }
		
    nav ul li a 
    {
        display: block;
		padding: 25px 40px;
        color: black;
		text-decoration: none;
	}
		
    nav ul ul 
    {
        background: lightslategray; 
		border-radius: 0px; 
		padding: 0;
        position: absolute;
		top: 100%;
    }
        
	nav ul ul li
	{
		float: none;
		position: relative;
	}

    nav ul ul li a 
    {
        padding: 10px 40px;
    }
		
    nav ul ul li a:hover 
    {
        background: green;
	}

    </style>
  
</head>
 
<body>

  <nav align="center">
    <ul>
	  <li><a href="../index.html">Home</a>
      </li>
	  
	  <li><a href="#">Program 1</a>
	    <ul>
		  <li>
		    <a href="pgm1.html">Program 1</a>
		  </li>
		  <li>
		    <a href="page1.html">Page 1</a>
		  </li>
		  <li>
		    <a href="page2.html">Page 2</a>
		  </li>
		  <li>
		    <a href="page3.html">Page 3</a>
		  </li>
		  <li>
		    <a href="page4.html">Page 4</a>
		  </li>
		  <li>
		    <a href="../index.html">Home</a>
		  </li>
		</ul>
      </li>

      <li><a href="program2.php">Program 2</a>
      </li>
	  
	  <li><a href="program3.php">Program 3</a>
      </li>
	  
	  <li><a href="program4.php">Program 4</a>
      </li>
    </ul>
  </nav>

</body> 

</html>


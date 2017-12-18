<html>

<head>
<style type="text/css">


body 	{background-image:url("background3.jpg");
		background-repeat:no-repeat;
		background-size: cover;}
		
p			{Font-size:2em;
              font-family: Papyrus,fantasy;
			  font-weight:bold;
			  text-align:center;
			  color:white;
			  padding-top:60;}
p.one		{text-align:center}
hr		{border: 3px solid grey;}
div{text-align:center;}
p.music {text-align:bottom}

	a {color:white;}
	a:hover{background-color:black;}

</head>
</style>
<?php

	mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("Restaurant") or die(mysql_error());
	
		
	
	$result = mysql_query("SELECT * FROM Restaurant") or die(mysql_error());
	
	while($row = mysql_fetch_array($result))
	{
		echo "<p>";
		echo $row['Restaurant_name']."  ".$row['Cuisine']."  ".$row['Tel']."  ".$row['State'];
		echo "</p>";
	}
	
	echo "<a href='index.php'> Return to Homepage</a>";



?></html>
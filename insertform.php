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
	
	mysql_select_db("restaurant") or die(mysql_error());
	
		
	$name=($_POST['name']);
	$cuisine=($_POST['cuisine']);
	$tel=($_POST['tel']);
	$state=($_POST['state']);
	
	mysql_query("INSERT INTO restaurant (Restaurant_name,Cuisine,Tel,State)VALUES ('$name','$cuisine','$tel','$state')") or die(mysql_error());

	echo "<p> Name: $name     Cuisine: $cuisine       Tel:$tel       State:$state   is Inserted </p>";
	
	echo "<p><a href='insert.php'><img src='https://maxcdn.icons8.com/windows8/PNG/26/Very_Basic/plus-26.png' title='Plus' width='26'> Insert New Restaurant </a> </p>";
	echo "<p><a href='index.php'> <img src='https://maxcdn.icons8.com/windows8/PNG/26/Arrows/undo-26.png' title='Undo' width='26'>Back to Homepage</a></p>";






?></html>
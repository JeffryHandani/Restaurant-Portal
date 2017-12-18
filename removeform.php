<?php

	mysql_connect("localhost","root","") or die(mysql_error());
	
	mysql_select_db("restaurant") or die(mysql_error());
	
		
	$name=($_POST['name']);
	mysql_query("Delete from restaurant where Restaurant_name= '$name'") or die(mysql_error());
	
	echo "<p> Restaurant $name have been removed </p>";
	
	echo"<p><a href='remove.php'> Remove  Restaurant </a></p>";
	echo"<p><a href='index.php'> Return to Homepage </a></p>";
	
		
?>
<html>

<head>
<style type="text/css">


body 	{background-image:url("background2.jpg");
		background-repeat:no-repeat;
		background-size: cover;}
		
p			{Font-size:2em;
              font-family: Papyrus,fantasy;
			  font-weight:bold;
			  text-align:center;}
p.one		{text-align:center}
hr		{border: 3px solid black;}
div{text-align:center;}

div.absolute {
    position: absolute;
    bottom: 0.2px;
    width: 100px;
    height: 100px;
    
} 
</style>
</head>
<body>
<form action="searchbycuisineform.php" method="post">
<hr>
<!-- Home icon by Icons8 -->
<a href="index.php"><img class="icon icons8-Home" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAACDElEQVR4Xu2Y6VUEIRCEezMxFM1EI1MzMRPNRB8KPhw5+maO3t8wVfXRDSw3uPjvdvH8EACiAi5OYHULPGb+L6vWYSWAFP45B38CgCUQVgGow5fFXwJhBYBW+GUQvAGMwi+B4AkAE94dgheAXvjU9+lXNsP6MHDZEzwAjMKXnR8zxuSktAZACUYZqwbDEgAnEGeOCIYVAEkQyVwyDAsAGgE0voGCoQ1A07jmt7owNAFYGLb45h8YWgAsjVp+W+VFyNRgXi4zDWkFmBlrNK2JlgSAiaHJ1q2uyQWgbgR1Zv0MUtXmAFA1QAheD1XzQAWgJswMrg6BAmBP4QsIsScsALGQwor3PiHyhgEgEjAMrtIOMwC98El8Ntcp+6/MZ0dw+LI0CjEKfyQAyWsXQg/ALPzRAHQhtADcAcA7on6xLdArTYTE9xBNnQcAeKuFsRWQSmj7cqtpbASDq7P1/Jpvkei/w6UNSv9sV5JrDLvyZRxXJ80rGZrhMeWV2uEjOzkigGT9flv2mBZorZIWgNmKeumQNpg02MuYl04AwOwBdSt4rYyXTlRAVADhlhWbYJwCcQzGPcDrePLSiWMwjsE4BvGvLXEPiHvA/3sA9WUH+8IjfUPE6ohPgQDAJEB9EWLK4F6TZ2ZG7wFWxnbbAtzAu55HqYBdB+GaCwBccmeZFxVwlpXk5ogK4JI7y7wvfbe5QQgIDn8AAAAASUVORK5CYII=" width="64" height="64"></a>
<hr>
<p>Please Type In The Cuisine Of The Restaurant ! </p>
<hr>
<p> Cuisine:
	<input type="text" name="cuisine" autocomplete="on" list="cuisine"/>
	<datalist id="cuisine">
		<option value="Malay">
		<option value="Western">
		<option value="Other">
		<option value="Chinese">
		<option value="Arabian">
	
	
	</datalist>
	</label></p>
	<div><input type="submit" value="Submit"/></div>

</form>
<br>
<br>
<br>


<audio controls autoplay>
  
  <source src="piano.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</body>
</html>
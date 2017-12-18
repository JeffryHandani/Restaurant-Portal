<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>

	p {
		font-family:"Courier New", Courier, monospace;
		font-size:300%;
	}

	p.meh{ font-size=150%}

body{height:100%;
   width:100%;
   background-position:fixed;
   background-size:cover;
   background-image:url(background.jpg) ;/*your background image*/  
   
}


p.one {border-style: dotted solid dashed double;}

hr{
  border: 2px solid black;
}



/* Full-width input fields */

.w3-image{max-width:100%;height:auto}img{margin-bottom:-5px}a{color:inherit}

h1,h2,h3,h4,h5,h6{font-family:"Segoe UI",Arial,sans-serif;font-weight:600;margin:20px 0}.w3-wide{letter-spacing:4px}
html,body{font-family:Verdana,sans-serif;font-size:20px;line-height:1.5}html{overflow-x:hidden}

h1{font-size:36px}h2{font-size:30px}h3{font-size:24px}h4{font-size:20px}h5{font-size:18px}h6{font-size:16px}.w3-serif{font-family:serif}
.w3-responsive{overflow-x:auto}

.w3-container:after,.w3-container:before,.w3-panel:after,.w3-panel:before,.w3-row:after,.w3-row:before,.w3-row-padding:after,.w3-row-padding:before,
.w3-cell-row:before,.w3-cell-row:after,.w3-clear:after,.w3-clear:before,.w3-bar:before,.w3-bar:after{content:"";display:table;clear:both}
.w3-col,.w3-half,.w3-third,.w3-twothird,.w3-threequarter,.w3-quarter{float:left;width:50%}

.w3-topbar{border-top:6px solid #ccc!important}.w3-bottombar{border-bottom:6px solid #ccc!important}
.w3-border-red,.w3-hover-border-red:hover{border-color:#f44336!important}

.forgot {
  margin-top:20px;
  text-align:right;
}
h2
{
   text-align:center;
}

input[type=text], input[type=password],input[type=email]
{
    width: 100%;
    padding: 10px 30px;
    margin: 20px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
	font-size:1.2em;
}

input.top
{
  width: 49%;
  padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #ccc;
    box-sizing: border-box;

}
 

    input[type='radio']:checked:after {
        width: 12px;
        height: 12px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color:#0DFF92;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }




label{
  position: relative;
  font-weight: 200;
  font-size: 1.5em;
  font-family: "Segoe UI",Arial,sans-serif;
  padding: 10px 105px 10px 3px;
  margin: 30px auto;
  height: 10px;
  z-index: 9;
  cursor: pointer;
  -webkit-transition: all 0.25s linear;
    color: #AAAAAA;
}



div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
div.black {
    
    border: 1px solid #ccc;
    background-color:#EBF5FB;
   
}
h3{
font-family: "Segoe UI",Arial,sans-serif;
 font-weight: 100;
  font-size: 1.2em;
  color: black;
  margin-left:10px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
	font-size: 1.2em;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
	font-size: 1.2em;

}

/* Add padding to container elements */
.container {
    padding: 30px;
}

.new{
	
	float:center;
    width: 20%;
	background-color: #CD6155;
 	 position: relative;
 	 padding: 14px 20px;
    margin: 50px 300px;
    display:inline-block;
	font-size: 1.2em;

 	


}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
.field-wrap {
  position:relative;
  margin-bottom:4px;
}
.form {
  background:rgba($form-bg,.9);
  padding: 50px;
  max-width:800px;
  margin:80px auto;
  border-radius:$br;
  box-shadow:0 4px 10px 4px rgba($form-bg,.3);
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body background="images/background.png">
<form action="loginform.php" method="post">
<div class="form">
<div class="w3-container">


  <div class="w3-row">
  	    <a href="javascript:void(0)" onclick="openCity(event, 'Guest');">
      <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding w3-border-red">Guest</div>
    </a>
  	<a href="javascript:void(0)" onclick="openCity(event, 'LoginPage');">
      <div class="w3-half tablink w3-bottombar w3-hover-light-grey w3-padding">Login</div>
    </a>


    
  <div id="LoginPage" class="w3-container city" style="display:none">

    <h2>Login</h2>
       
        <input type="text" placeholder="User ID" name="username" required>
        <input type="password" placeholder="Password" name="password" required>
         <div class="clearfix">
      <button type="button" class="cancelbtn" >Cancel</button>
    <button type="submit" class="signupbtn">Login</button>
    </div>


  </div>
</div>

 <div id="Guest" class="w3-container city">
    <h2>Guest</h2>
       <div class="container">
        <div class="field-wrap"> 
        	<div class="black">
    
          <h3> By agree to this Guest only able to view and search the restaurant</h3>
          <button type ="button" class="new" onclick="window.location='index2.php';"> Click Me</button>

    </div>
  </div> 
  </div>

  
 

<form action="/action_page.php" style="border:1px solid #ccc">

</form>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}






function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-red", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-red";
}

</script>

</body>
</html>
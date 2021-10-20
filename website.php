<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website</title>
</head>
<style>
              @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {
  margin: 0;
  padding: 0;
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  position: relative;
  background-color: #000000;
  background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
  margin: 5% auto;
  width: 900px;
  height: 500px; 
  padding-left: 0px;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: relative;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 0px;
  width: 300px;
  height: 300px;
}


input[type="submit"] {
  margin-top: 15px;
  width: 240px;
  height: 32px;
  background: black;
  border: none;
  border-radius: 17px;  
  padding-left: 7px;  
  color:cornsilk;
  font-family: 'times new roman';
  font-weight: 700;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 370px;
  left: 245px;
  
  text-align: center;
}


.right {
  position: absolute;
  margin-right: 68px;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 0px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}


#log{  
    		width: 240px;  
    		height: 30px;  
    		border: none; 
    		background-color:black;
			
			border-radius: 17px;  
			padding-left: 7px;  
    		color:whitesmoke;
    		font-family: times new roman;
    		font-weight: bold; 
   		 }

img.center{
          padding: 0px;
        	display: block;
			    margin-bottom: 0px;
       	  margin: 0 auto;
			    line-height:0;
		    	vertical-align: top;
          
 	   }
img.center1{
  border-radius: 10px 0px 0px 10px;
}
h5{
  font-family: 'times new roman';
	color: white;
	font-weight: 500;
  margin-bottom: 0px;
  margin-top: 0px;
}
a{
	font-family: 'times new roman';
	color: white;
	font-weight: 500;
  padding: 0px;
  align: center;
	}

</style>

<body>
    <div id="login-box">
   
        <div class="left">
          <img class="center1" src="media\bg2.jpg" width="500px" height="500px">
      
        <form  method="post">   
        </div>
       
        <div class="right">
       
        <img class="center" src="media\newlogo.gif" width="250"><br><br>
        </form>
        
        <a href="signup.php"><input type="submit" value="Register Account"/></a>
        <center><h5>Signup for free</h5></center>
      
        <a href="login.php"><input id="log" type="submit" value="Login" ></a>
        <center><h5>Already have a Account</h5></center><br><br>
        </div>
        
        <div class="or">
        
        
        </div>
        </form>
      </div>
</body>
</html>
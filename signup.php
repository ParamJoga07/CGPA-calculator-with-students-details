<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
    $name = $_POST['name'];
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
    $email_id = $_POST['email_id'];

		if(!empty($name) && !empty($user_name) && !empty($password) && !empty($email_id) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (name,user_id,user_name,password,email_id) values ('$name','$user_id','$user_name','$password','$email_id')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
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
  width: 700px;
  height: 500px;
   
  padding-left: 8px;
  border-radius: 10px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: relative;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 300px;
}
.center{
  margin-left: 200px;
}
h1 {
  font-family: 'times new roman';
  margin: 0 0 0px 0;
  font-weight: 300;
  font-size: 28px;
  text-align: center;
  color: white;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 240px;  
  height: 30px;  
  border: none;  
  border-radius: 10px;  
  padding-left: 8px;  
  border-bottom: 1px solid #AAA;
  font-family: 'times new roman';
  font-weight: 600;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 15px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 17px;  
  padding-left: 7px;  
  color: #FFF;
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
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 285px;
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

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'times new roman';
  font-weight: 700;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}


button.social-signin.google {
  background: #DD4B39;
  border-radius: 10px; 
  
}

button.social-signin.google:hover,
button.social-signin.google:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

button.social-signin.google:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}
img.center{
          padding: 20px;
        	display: block;
			    margin-bottom: 0px;
       	  margin: 0 auto;
			    line-height:0;
		    	vertical-align: top;
 	   }
a{
	font-family: 'times new roman';
	color: white;
	font-weight: 500;
	}

          </style>
<body>
    <div id="login-box">
    <img class="center" src="media\newlogo.gif" width="175">
    <h1><strong>Sign up</strong></h1>
        <div class="left">
          
      
        <form  method="post">
              <input type="text" name="name" placeholder="Name" />
              
              <input type="text" name="email_id" placeholder="Email ID" />
              
              
             
              
        </div>
       
        <div class="right">
       
          <input type="text" name="user_name" placeholder="Username" />
          <input type="password" name="password" placeholder="Password"/><br>

        </div>
        
        <div class="or">
        <input type="submit" value="Signup"><br><br>
        <button class="social-signin google">Sign in with Google+</button>
        </div>
        </form>
      </div>
</body>
</html>
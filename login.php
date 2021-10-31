<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: popupprofile.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<style type="text/css">
	
	#text{

		 width: 300px;  
   		 height: 30px;  
  		 border: none;  
    	 border-radius: 10px;  
   		 padding-left: 8px;  
		font-family: 'times new roman';
  		font-weight: 600;
	}
	#Pass{  
    	 width: 300px;  
   		 height: 30px;  
   		 border: none;  
    	 border-radius: 10px;  
   	 	 padding-left: 8px;
		font-family: 'times new roman';
        font-weight: 600;
   	 }
	                 

		 #log{  
    		width: 300px;  
    		height: 30px;  
    		border: none; 
    		background-color: #000000;
			background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
			border-radius: 17px;  
			padding-left: 7px;  
    		color: white;
    		font-family: times new roman;
    		font-weight: bold; 
   		 }
        

	body{
		background-color: #2d3436;
		background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
	}
        form{
			backdrop-filter: blur(40px);
			border: none;
			padding: 30px;
			overflow: hidden;
			margin: 0 auto;
			margin-top: 5px;
			top: 200px;
			width: 300px;
			text-align: center;
			font-weight: bold;
    	}
        img.center{
        	display: block;
       	 	margin: 0 auto;
 	   }
	a{
	   color: black;
	}
	button.social-signin.google {
		width: 300px;  
		height: 30px;  
		border: none; 
		border-radius: 17px;  
		padding-left: 7px;  
		color: white;
		font-family: times new roman;
		font-weight: bold; 
		background: #db3236;
		font-family: 'times new roman';
		font-weight: 700;
	}
	a{
    text-decoration: none;
}
	h5{
    font-family: 'times new roman';
	color: white;
	font-weight: 500;
	margin-bottom: 0px;
	margin-top: 0px;
	
}
	</style>

	
		<img class="center" src="media\newlogo.gif" width="250" >
		<form align="center" method="post">
			 <div style="font-family: Times new roman; font: size 20px; color:blue margin:10px; padding: 0.2px;"><h2>Login</h2></div>

			<input id="text" type="text" name="user_name" placeholder="Username"><br><br>
			<input id="Pass" type="password" name="password" placeholder="Password"><br><br>

			<input id="log" type="submit" value="Login" >
			<div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div><br>
			<button class="social-signin google">Login in with Google+</button>
		</form>
	
</body>
</html>
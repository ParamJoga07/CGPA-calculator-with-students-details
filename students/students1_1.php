<?php 
session_start();

	include("connection.php");
	include("functions.php");
    $user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	$s_name = $_POST['s_name'];
	$s_enroll_no = $_POST['s_enroll_no'];
	$s_department = $_POST['s_department'];
	$s_year = $_POST['s_year'];
	$s_semester = $_POST['s_semester'];
	$s_email_id = $_POST['s_email_id'];


	if(!empty($s_name) && !empty($s_enroll_no) && !empty($s_department) && !empty($s_year) && !empty($s_semester) && !empty($s_email_id) && !is_numeric($s_name))
	{

		//save to database
		
		$query = "insert into students1_1 (s_name,s_enroll_no,s_department,s_year,s_semester,s_email_id) values ('$s_name','$s_enroll_no','$s_department','$s_year','$s_semester','$s_email_id')";

		mysqli_query($con, $query);
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
    <title>students1_1</title>
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
   padding-top: 20px;
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

.right {
  position: absolute;
  top: 0;
  right: 40px;
  box-sizing: border-box;
  padding: 40px;
  margin-top: 80px;
  width: 300px;
  height: 400px;
  border-radius: 0 2px 2px 0;
}

input[type="text"],
input[type="password"] {
  display: block;
  margin-top:10px;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 250px;  
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

h1 {
  font-family: 'times new roman';
  margin: 0 0 0px 0;
  font-weight: 900;
  font-size: 24px;
  text-align: center;
  color: white;                                   
  margin-top:30px;
}


.or {
  position: absolute;
  top: 420px;
  left: 295px;
  
  text-align: center;
}
.labels {
    font-size: 14px;
    font-family: 'times new roman';
    font-weight: 600;
    color: white;
    
}

img.center{
             padding: 0px;
             display: block;
			 margin-bottom: 0px;
       	     margin: 0 auto;
             line-height:0;
             text-align: center;
             vertical-align: top;
 	   }
          </style>
<body>
    <div id="login-box">
    <h1><strong>STUDENTS DETAILS</strong></h1>
        
    <div class="left">
            
        
            <form action="/login/year/year1/sem1.php" method="post">
             <label class="labels">Name</label>
                <input type="text" name="s_name" placeholder="Student's Name" />
                <label class="labels">Enrollment Number</label>
                <input type="text" name="s_enroll_no" placeholder="Student's Enrollment Number" />
                <label class="labels">Graduation Year</label>
                <input type="text" name="s_year" placeholder="Student's Graduation Year" value="1"/>
                <label class="labels">Department</label>
                <input type="text" name="s_department" placeholder="Student's Department" />
            </div>
        
            <div class="right">
            <img class="center" src="media\student.jpeg" width="140" height="138"><br>
            <label class="labels">Semester</label>
            <input type="text" name="s_semester" placeholder="Student's Semester" value="1"/>
            <label class="labels">Email ID</label>
            <input type="text" name="s_email_id" placeholder="Student's Email ID"/><br>

        </div>
        <div class="or">
          <a href="/login/year/year1/sem1.php"><input type="submit" value="SAVE & NEXT"></a><br><br>
        </div>
        </form>
      </div>
</body>
</html>
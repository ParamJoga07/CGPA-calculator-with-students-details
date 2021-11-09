<?php 
error_reporting(0);
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	$rid = $_POST['rid'];
	$s_name = $_POST['s_name'];
	$s_enroll_no = $_POST['s_enroll_no'];
	$s_department = $_POST['s_department'];
	$s_year = $_POST['s_year'];
	$s_semester = $_POST['s_semester'];
	$s_email_id = $_POST['s_email_id'];
	$GPA = $_POST['GPA'];


	if(!empty($s_name) && !empty($s_enroll_no) && !empty($s_department) && !empty($s_year) && !empty($s_semester) && !empty($s_email_id) && !is_numeric($s_name))
	{

		//save to database
		$rid = random_num(20);
		$query = "insert into results4_2 (rid,s_name,s_enroll_no,s_department,s_year,s_semester,s_email_id,GPA) values ('$rid','$s_name','$s_enroll_no','$s_department','$s_year','$s_semester','$s_email_id','$GPA')";

		mysqli_query($con, $query);
	}else
	{
		
	}
	}
		?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS_Files/style.css">
</head>
	<title>Result</title>

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

#result-box {
  position: relative;
  background-color: #000000;
  background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
  margin: 5% auto;
  width: 700px;
  height: 650px;
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
input[type="text2"] {
  display: block;
  margin-top:10px;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 250px;  
  height: 30px;  
  border: none;  
  border-radius: 10px;  
  text-align:center; 
  border-bottom: 1px solid #AAA;
  font-family: 'times new roman';
  font-weight: 600;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text2"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {

  margin-top: 2px;
  width: 240px;
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
  top: 110px;
  padding-left:40px;
  
}
.labels1 {
    font-size: 14px;
    font-family: 'times new roman';
    font-weight: 600;
    color: white;
    text-align:left;
    
}
.labels {
    font-size: 14px;
    font-family: 'times new roman';
    font-weight: 600;
    color: white;
    
}
h4{
    color:white;
    text-align:left;
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

        footer{
		  text-align:center;
		  font-size:22px;
		  background: black;
		  color:white;
		  display: flex;
		  justify-content: center;
		  font-family:Apple-Chancery;
		  width:100%;
		  height:auto;
		  margin: 0;
		  margin-top:260px;
		}

        b{
            color:white;
            text-align:center;
            margin-left:80px;
        }
        
input[type="submit1"] {
  margin-top: 250px;
  width: 220px;
  height: 32px;
  background: #16a085;
  border: none;
  text-align: center;
  border-radius: 17px;  
  padding-left: 7px;  
  color: #FFF;
  font-family: 'times new roman';
  font-weight: 700;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit1"]:hover,
input[type="submit1"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit1"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}
          </style>
<body>
<main>
    <div id="result-box">
    <h1><strong>STUDENT'S RESULT</strong></h1>
        
    <div class="left">
            
        
            <form  method="post">
             <label class="labels">Name</label>
                <input type="text" name="s_name" placeholder="Student's Name" value="<?php 
                     $sql="select * from students4_2";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                        
                         while($row = $result->fetch_assoc()) {
                            if($row["s_enroll_no"] == $s_enroll_no){
                         echo "". $row["s_name"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"/>
                <label class="labels">Enrollment Number</label>
                <input type="text" name="s_enroll_no" placeholder="Student's Enrollment Number" value="<?php echo $s_enroll_no; ?>"/>
                <label class="labels">Department</label>
                <input type="text" name="s_department" placeholder="Student's Department" value="<?php 
                     $sql="select * from students4_2";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                        
                         while($row = $result->fetch_assoc()) {
                            if($row["s_enroll_no"] == $s_enroll_no){
                         echo "". $row["s_department"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"/>
            </div>
        
            <div class="right">
            <label class="labels">Graduation Year</label>
            <input type="text" name="s_year" placeholder="Student's Graduation Year"value="<?php 
                     $sql="select * from students4_2";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                        
                         while($row = $result->fetch_assoc()) {
                            if($row["s_enroll_no"] == $s_enroll_no){
                         echo "". $row["s_year"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"/>
            <label class="labels">Semester</label>
            <input type="text" name="s_semester" placeholder="Student's Semester"value="<?php 
                     $sql="select * from students4_2";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                        
                         while($row = $result->fetch_assoc()) {
                            if($row["s_enroll_no"] == $s_enroll_no ){
                         echo "". $row["s_semester"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"/>
            <label class="labels">Email ID</label>
            <input type="text" name="s_email_id" placeholder="Student's Email ID" value="<?php 
                     $sql="select * from students4_2";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                        
                         while($row = $result->fetch_assoc()) {
                            if($row["s_enroll_no"] == $s_enroll_no){
                         echo "". $row["s_email_id"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"/><br>
               
        </div>
        <div class="or">
        <a href="dashboard.php"><input type="submit1" value="Back to Homepage"><br><br></a>
        <center><b>______________________________________________________________________</b><br></center>
            

                <?php include("server1.php") ?>
                <label class="labels1">CGPA</label>
               <input type="text2" name="GPA"  value="<?php echo $GPA?>"/>
          <input type="submit" value="SAVE INTO DATABASE"><br><br>
          </form>
         </div>
   </div>
   </main>
<footer>
		<div>
			<address>
				encoded by: PARAM<br>
				copyright &copy; 2021-<?php echo date("Y")?> CGPA Calculator. Alright reserved.
			</address>
		</div>
	</footer>
</body>
</html>
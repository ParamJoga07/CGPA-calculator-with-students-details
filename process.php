<?php 
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
		$query = "insert into results (rid,s_name,s_enroll_no,s_department,s_year,s_semester,s_email_id,GPA) values ('$rid','$s_name','$s_enroll_no','$s_department','$s_year','$s_semester','$s_email_id','$GPA')";

		mysqli_query($con, $query);
	}else
	{
		echo "Please enter some valid information!";
	}
	}
		?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS_Files/style.css">

	<title>CGPA calculator</title>

	<style>
		table{
		background-color: #000000;
		background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
	      margin: 0 auto;
	      
	      width: 30%;
	      font-family: times new roman;
	      font-size: 20px;
	      border-radius: 20px;
		}
		th{
		    text-align: center;
		    height: 15vh;
			border-radius: 16px;
			color:white;
		    background-color: #000000;
  			background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
		}
		table tbody  tr td{
		   	text-align: ;
	     	margin-left: 50px;
	      	padding: 10px 50px 10px 60px;
		    text-align: justify-all;
			color:white;
			font-weight: 500;
			border-radius: 16px;
		}
		table tbody  tr td strong{
			color: #33CCCC;
		}
		table tbody  tr td b{
      		justify-content: center;
      		text-align: justify;
		}
		button{
			float: right;
			margin-bottom: 20px;
			width: 200px;
			height: 36px;
			border: none;
			border-radius: 20px;
			background-color: #63d471;
			font-family: 'times new roman';
			font-weight: 700;
			transition: 0.2s ease;
			cursor: pointer;
		}
		button a{
			font-family: 'times new roman';
			font-weight: 700;
      		color: black;
     		font-size: 16px;
     		text-decoration:none;
		}
		button a:hover{
			text-decoration:none;
         transition: 0.2s ease;
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
		

	</style>
</head>
<body>
	<main>
		<div class="container-fluid" id="container">
			<center>
				<table>
					<form method="post" action="process.php">
						<thead>
							<th><h1>RESULT</h1></th>
						</thead>
						<tbody>
							
							<tr>
								<td><br>STUDENT NAME: <strong><?php 
                        $sql="select * from students";
                        $result= $con->query($sql);
                        if ($result->num_rows > 0) {  
                            while($row = $result->fetch_assoc()) {
                               
                                    echo "". $row["s_name"]."";
                                 
                            }
                        } else {
                            echo "0 results";
                        } ?></strong></td>
							</tr>
							<tr>
								<td>STUDENT ENROLL NUMBER: <strong><?php echo $s_enroll_no; ?></strong></td>
							</tr>
							<tr>
								<td>STUDENT DEPARTMENT: <strong><?php echo $s_department; ?></strong></td>
							</tr>
							<tr>
								<td>STUDENT YEAR: <strong><?php echo $s_year; ?></strong></td>
							</tr>
							<tr>
								<td>STUDENT SEMESTER: <strong><?php echo $s_semester; ?></strong></td>
							</tr>
							<tr>
								<td>STUDENT EMAIL ID: <strong><?php echo $s_email_id; ?></strong></td>
							</tr>
							<tr>
								<td><b>______________________________________________________________________</b></td>
							</tr>
							<tr>
								<td>
									<?php include("includes/server.php") ?>
								</td>
							</tr>
							<tr>
								<td>
									<button>
										<a href="index.php">Back to Homepage</a>
									</button>
								</td>
							</tr>
						</tbody>
					</form>
				</table>
			</center>
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
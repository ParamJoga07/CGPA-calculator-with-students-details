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
<html>
<head>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS_Files/style.css">
	<link rel="stylesheet" type="text/css" href="CSS_Files/main.css">
	<script type="text/javascript" src="jquery.js"></script>
	<title>CGPA calculator</title>
	<style>
		.or {
  position: absolute;
  top: 20px;
  left: 585px;
  text-align: center;
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
 
.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 0px;
  width: 89x;
  height: 200px;
  
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
ul.menu {
    display: inline-block;
    list-style-type: none;
}
li.menu_list {
    height: 68.5px;
    width: 85px;
    position: relative;
}
li.menu_list .front,
a.side {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 86px;
    width: 100%;
    padding: 30px;
    position: absolute;
    top: 0;
    left: 0;
    text-decoration: none;
    text-transform: uppercase;
    transition: all .5s ease-out;
    cursor: pointer;
}
li.menu_list .front {
    background-color: black;
    color: #FFFC00;
    transform-origin: 0 0;
}
a.side {
    background-color: #2d3436;
    background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);
    color: black;
    transform-origin: 0 0 85px;
    transform: rotateY(-90deg);
}
li.menu_list:hover a.side {
    transform: rotateY(0deg);
}
li.menu_list:hover .front {
    transform: rotateY(90deg);
}

.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 100px;
}
main table th{
	background-color: #000000;
    
}

td{
	font-weight: bold;
	font-family: 'Times New Roman';
}
tr,td,th{
	border: 0;
}

input[type="text1"]{
		margin-bottom: 0px;
		padding: 0px;
		width: 1020px;  
		height: 30px;  
		border: none;  
		border-radius: 10px;  
		padding-left: 0px;  
		border-bottom: 0px solid #AAA;
		font-family: 'times new roman';
		font-weight: 600;
		font-size: 15px;
		text-align:left;
		transition: 0.2s ease;
	}
	table.gridtable{
	margin: 0 auto;
	width: 95%;
	overflow: auto;
	font-family: 'Times New Roman';
	font-size: 14px;
	background-color: #000000;   
	border-collapse: collapse;
	text-align: center;
	transition: 0.5s;
}
table.gridtable thead{
	background-color: #000000;
}

table.gridtable th{
	padding: 8px;
	background-color: #000000;   
	text-align: center;
	font-size: 17px;
	transition: 0.5s;
}
table.gridtable td{
	background-color: #000000;
	padding: 8px;
	font-weight: bold;
	transition: 0.5s;
}
	</style>
</head>
<body>
	<header>
	
			<div class="container1" id="container1"><br>
			<div class="left">
			<img src="media\male.png" alt="Avatar" class="avatar">
			Hello, <?php echo $user_data['name']; ?><br><br>
			
			</div>
			<div class="or">
			<img class="center" src="media\newlogo.gif" width="175">
			</div>
			<h1 class="text text-center">Cumulative grade Point Average<br>(CGPA) Calculator</h1>
			<div class="right">
      <a href="dashboard.php"><input type="submit1" value="Back to Homepage"><br><br></a>
			</div>
			</div>
			
	</header>
	<main>
		
			<center>
				<p><b>Note:</b><br>In order to insert your grade you will need to use:</p>
				<table  class="col" auto id="tablemain">
					<tr>
						<td>10</td>
						<td>as</td>
						<td>A</td>
					</tr>
					<tr>
						<td>8</td>
						<td>as</td>
						<td>B</td>
					</tr>
					<tr>
						<td>6</td>
						<td>as</td>
						<td>C</td>
					</tr>
					<tr>
						<td>4</td>
						<td>as</td>
						<td>D</td>
					</tr>
					<tr>
						<td>2</td>
						<td>as</td>
						<td>E</td>
					</tr>
					<tr>
						<td>0</td>
						<td>as</td>
						<td>F</td>
					</tr>
				</table>
			</center>
		
		<?php include("includes/main_table1_1.php");?>
	</main>

	<footer>
		<div>
			<address>
				encoded by: param<br>
				copyright &copy; 2021-<?php echo date("Y")?> CGPA Calculator. Alright reserved.
			</address>
		</div>
	</footer>

	<script>
		$(document).ready(function(){

			//collapse and Expand section

			$('.breakrow').click(function(){
			//$('#tableMain').on('click','tr.breakrow',function(){
				$(this).nextUntil('tr.breakrow').slideToggle(200);
				
			});
		});
	</script>
</body>
</html>
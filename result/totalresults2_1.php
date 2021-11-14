<?php 
session_start();

    include("connection.php");
	  include("functions.php");

    $user_data = check_login($con);

    $sql="select * from results";

    $result= $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Results</title>
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

i{
  margin-left: 10px;
  font-size: 22px;
 }

h2 {
  font-family: 'times new roman';
  margin: 10px 0 10px 10px;
  font-weight: 800;
  font-size: 22px;
  text-align: center;
  color: black;
}



    table {
  font-family: 'times new roman';
  font-weight: 300;
  font-size: 15px;
  border-collapse: collapse;
  width: 80%;
  
}

td, th {
  border: 2.5px solid black;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: black;
}



input[type="submit"] {
  margin-top: 20px;
  width: 120px;
  height: 32px;
  margin-left: 15px;
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
input[type="text"]{
		margin-bottom: 0px;
		padding: 0px;
		width: 220px;  
		height: 30px; 
		border: none; 
		align:"left"; 
		border-radius: 10px;  
		padding-left: 0px;  
		border-bottom: 0px solid #AAA;
		font-family: 'times new roman';
		font-weight: 600;
		font-size: 12px;
		text-align:center;
		transition: 0.2s ease;
	}

	input[type="text"]:focus{
     border-bottom: 2px solid #16a085;
  	 color: #16a085;
  	 transition: 0.2s ease;
}

input[type="submit1"] {
  margin-top: 20px;
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

<center><h2>RESULT'S OF 2<sup>nd</sup> YEAR 1<sup>st</sup> SEMESTER</h2></center>
<form method="post" action="search/search2_1.php">
  <i class='bx bx-search' ></i>
  <input type="text" name="enroll_no" placeholder="ENTER ENROLL NO" value=""></td>
  <input type="submit" value="SEARCH"></div><br><br>
</form>

<center><table>
<thead>
    <th>S/N</th>
    <th>students name</th>
    <th>enrollment number</th>
    <th>year</th>
    <th>semester</th>
    <th>department</th>
    <th>gpa</th>
</thead>
  <tr>
    <th>
        <?php 
                 $c=1;
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "".$c.""; 
                    echo"<br> ";
                    $c++;
                  }
                }
                ?>
                </th>
    <th>
    <?php 
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "". $row["s_name"]. ""; 
                    echo"<br> ";
                  } 
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "". $row["s_enroll_no"]. ""; 
                    echo"<br> ";
                  }  
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "". $row["s_year"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "". $row["s_semester"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "". $row["s_department"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results2_1";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 2  && $row["s_semester"] == 1 ){
                    echo "". $row["gpa"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>

  </tr>
 
</table></center>

<br><br><br>
<center><label><input type="submit1" value="PRINT" onclick="window.print()"></label></center>
<<center><a href="/login/dashboard.php"><input type="submit1" value="Back to Homepage"><br><br></a></center>
</body>
</html>
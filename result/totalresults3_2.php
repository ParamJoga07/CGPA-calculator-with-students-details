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



h2 {
  font-family: 'times new roman';
  margin: 0 0 0px 0;
  font-weight: 800;
  font-size: 22px;
  margin-top: 15px;
  text-align: center;
  color: black;
  margin-bottom: 10px;
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

<center><h2>RESULT'S OF 3<sup>rd</sup> YEAR 2<sup>nd</sup> SEMESTER</h2></center>

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
                $sql="select * from results";
                $result= $con->query($sql);
                while($row = $result->fetch_assoc()) {
                 if($row["s_year"] == 3  && $row["s_semester"] == 2 ){
                   echo "".$c.""; 
                   echo"<br> ";
                   $c++;

                 } 
               }
  
                ?>
                </th>
    <th>
    <?php 
                 $sql="select * from results";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 3  && $row["s_semester"] == 2 ){
                    echo "". $row["s_name"]. ""; 
                    echo"<br> ";
                  } 
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 3 && $row["s_semester"] == 2 ){
                    echo "". $row["s_enroll_no"]. ""; 
                    echo"<br> ";
                  }  
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 3  && $row["s_semester"] == 2 ){
                    echo "". $row["s_year"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 3  && $row["s_semester"] == 2 ){
                    echo "". $row["s_semester"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 3 && $row["s_semester"] == 2){
                    echo "". $row["s_department"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>
    <th>
    <?php 
                 $sql="select * from results";
                 $result= $con->query($sql);
                 while($row = $result->fetch_assoc()) {
                  if($row["s_year"] == 3 && $row["s_semester"] == 2 ){
                    echo "". $row["GPA"]. ""; 
                    echo"<br> ";
                  }
                }
  
                ?>
    </th>

  </tr>
 
</table></center>

<br><br><br>
<center><label><input type="submit1" value="PRINT" onclick="window.print()"></label></center>
<center><a href="/login/dashboard.php"><input type="submit1" value="Back to Homepage"><br><br></a></center>
</body>
</html>
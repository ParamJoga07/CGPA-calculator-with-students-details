<?php 


session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

    $sql="select * from faculty";

    $result= $con->query($sql);

    if (isset($_REQUEST['updateStuNameBtn'])) {
		if (($_REQUEST['stuName'] == "")) {
        }
        else{
			$stu_image =$_FILES['facImg']['name'];
			$stu_image_temp =$_FILES['facImg']['tmp_name'];
			$img_folder = '../images/stu/'.$fac_image;
			move_uploaded_file($fac_image_temp ,$img_folder);
			$sql = "UPDATE faculty SET fac_img ='$img_folder' WHERE stu_email='$stuEmail'  ";
			if ($conn -> query($sql) == TRUE) {
				$passmsg = '<div class ="alert alert-success col-sm-6 ml-5 mt-2">Updated Succesfully</div>';
			}
			else{
				$passmsg = '<div class ="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update </div>'	;
			}
		}
	}
    
        
       

?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>profile</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<style>
body {
    background: #2d3436;
  	background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);
}
 .row{
    border-collapse: collapse;
    
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
 
.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
.col-md-6{
    font-family: 'times new roman';
    font-weight: 600;
    font-size: 18px;
    color: white;
}

.col-md-12{
    font-family: 'times new roman';
    font-weight: 600;
    font-size: 18px;
    color: white;
}

span{
    font-family: 'times new roman';
    font-weight: 600;
    font-size: 15px;
    color: white;
   
}
a{
    text-decoration: none;
}

h4{
    font-family: 'times new roman';
    font-weight: 600;
    font-size: 24px;
    color: white;
}

.form-control{
    border-radius: 10px;
    font-family: 'times new roman';
    font-weight: 600;
    font-size: 15px;
    border-bottom: 1px solid #AAA;
}
.container{
    margin-top: 50px;
	margin-bottom: 50px;
	width: 75%;
	background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
	overflow: auto;
	border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
	transition: 0.5s;
}


#log{  
    		width: 140px;  
    		height: 25px;  
    		border: none; 
    		background-color: white;
			border-radius: 17px;  
			padding-left: 7px;  
    		color: black;
    		font-family: times new roman;
    		font-weight: bold; 
   		 }

            #log1{  
    		width: 300px;  
    		height: 25px;  
    		border: none; 
    		background-color: white;
			border-radius: 17px;  
			padding-left: 7px;  
    		color: black;
    		font-family: times new roman;
    		font-weight: bold; 
   		 }

            #log2{  
    		width: 200px;  
    		height: 25px;  
    		border: none; 
    		background-color: white;
			border-radius: 17px;  
			padding-left: 7px;  
    		color: black;
    		font-family: times new roman;
    		font-weight: bold; 
   		 }

            #log3{  
    		width: 250px;  
    		height: 25px;  
    		border: none; 
    		background-color: white;
			border-radius: 17px;  
			padding-left: 7px;  
    		color: black;
    		font-family: times new roman;
    		font-weight: bold; 
   		 }
}
}
</style>
</head>
<body oncontextmenu='return false' class='snippet-body'>
<div class="container">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"><?php echo $user_data['name']; ?></span><span class="text-white-25"><?php echo $user_data['email_id']; ?></span><span> </span></div>
           
        </div>
        <div class="col-md-5 border-right">
            <div class="p-5 py-4">
               
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4><a href="settings.php"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Edit</span></a>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input id="log" type="submit" class="form-control" placeholder="first name" value="<?php echo $user_data['name']; ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input  id="log" type="submit" class="form-control" value="<?php 
                        $sql="select * from faculty";
                        $result= $con->query($sql);
                        if ($result->num_rows > 0) {  
                            while($row = $result->fetch_assoc()) {
                                if($row["user_name"] == $user_data['user_name']){
                                    echo "". $row["surname"]."";
                                }  
                            }
                        } else {
                            echo "0 results";
                        } ?>"></div>
                </div>
                <div class="row mt-3">
                     <div class="col-md-12"><label class="labels">Username</label><input  id="log1" type="submit" class="form-control" value="<?php echo $user_data['user_name']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input  id="log1" type="submit" class="form-control" placeholder="enter phone number" value="<?php 
                     $sql="select * from faculty";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                         
                         while($row = $result->fetch_assoc()) {
                            if($row["user_name"] == $user_data['user_name']){
                         echo "". $row["ph_no"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"></div>
                    <div class="col-md-12"><label class="labels">Teacher id</label><input id="log1" type="submit" class="form-control" placeholder="enter address line 1" value="<?php 
                     $sql="select * from faculty";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                         
                         while($row = $result->fetch_assoc()) {
                            if($row["user_name"] == $user_data['user_name']){
                         echo "". $row["t_id"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"></div>
                    
                    <div class="col-md-12"><label class="labels">Email ID</label><input id="log1" type="submit" class="form-control" placeholder="enter email id" value="<?php echo $user_data['email_id']; ?>"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input id="log1" type="submit" class="form-control" placeholder="education" value="<?php 
                     $sql="select * from faculty";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                        
                         while($row = $result->fetch_assoc()) {
                            if($row["user_name"] == $user_data['user_name']){
                         echo "". $row["education"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6"><label class="labels">Department</label><input id="log" type="submit" class="form-control" placeholder="country" value="<?php 
                     $sql="select * from faculty";
                     $result= $con->query($sql);
                     if ($result->num_rows > 0) {
                         
                         while($row = $result->fetch_assoc()) {
                            if($row["user_name"] == $user_data['user_name']){
                         echo "". $row["dept"]."";
                         }
                        }
                     } else {
                         echo "0 results";
                     }
                    ?>"></div>

                </div>
                
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-4 py-4">
                <div class="d-flex justify-content-between align-items-center experience"><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience</label><input id="log2" type="submit" class="form-control" placeholder="experience" value="<?php  
                        $sql="select * from faculty";
                        $result= $con->query($sql);
                        if ($result->num_rows > 0) {
                           
                            while($row = $result->fetch_assoc()) {
                                if($row["user_name"] == $user_data['user_name']){
                            echo "". $row["experience"]."";
                            }
                        }
                        } else {
                            echo "0 results";
                        } ?>"></div><br>
                     
                <div class="col-md-12"><label class="labels">Additional Details</label><input id="log3" type="submit" class="form-control" placeholder="additional details" value="<?php 
                 $sql="select * from faculty";
                 $result= $con->query($sql);
                 if ($result->num_rows > 0) {
                    
                     while($row = $result->fetch_assoc()) {
                        if($row["user_name"] == $user_data['user_name']){
                     echo "". $row["add_details"]."";
                     }
                    }
                 } else {
                     echo "0 results";
                 }
                ?>"></div>
               <a href="dashboard.php"><input type="submit1" value="Back to Homepage"><br><br></a>
            </div>
        </div>
                </div>
               
    </div>
</div>
</div>
</div>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'></script>
</body>
</html>
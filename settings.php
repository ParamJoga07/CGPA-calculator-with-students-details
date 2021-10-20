<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

   
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
        $user_name = $_POST['user_name'];
        $surname = $_POST['surname'];
		$t_id = $_POST['t_id'];
		$ph_no = $_POST['ph_no'];
        $addline1 = $_POST['addline1'];
        $pincode = $_POST['pincode'];
        $state = $_POST['state'];
        $area = $_POST['area'];
        $experience = $_POST['experience'];
        $add_details = $_POST['add_details'];
        $dept = $_POST['dept'];
        $education = $_POST['education'];
        $district = $_POST['district'];

		if(!empty($surname) && !empty($dept) && !empty($education) && !empty($t_id) && !empty($ph_no) && !empty($addline1) && !is_numeric($add_details))
		{

			//save to database
			
			$query = "insert into faculty (user_name,surname,t_id,ph_no,addline1,pincode,state,area,experience,add_details,dept,education,district) values ('$user_name','$surname','$t_id','$ph_no','$addline1','$pincode','$state','$area','$experience','$add_details','$dept','$education','$district')";
            
			mysqli_query($con, $query);

		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Settings</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<style>
body {
    background: #2d3436;
  	background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);
      background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
}
 .row{
    border-collapse: collapse;
    
 }

input[type="submit1"] {
  margin-top: 20px;
  width: 150px;
  height: 32px;
  background: #16a085;
  border: none;
  text-align: center;
  border-radius: 17px;  
  padding-left: 7px;  
  color: #FFF;
  font-family: 'times new roman';
  font-weight: 700;
  font-size:12px;
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
    font-size: 11px;
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
	width: 60%;
	background-color: #000000;
    background-image: linear-gradient(147deg, #000000 0%, #434343 74%);
	overflow: auto;
	border-radius: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
	transition: 0.5s;
}


input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}


input[type="submit"] {
  margin-top: 20px;
  width: 150px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 17px;  
  padding-left: 7px;  
  color: #FFF;
  font-family: 'times new roman';
  font-weight: 700;
  font-size: 12px;
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

}
</style>
</head>
<body oncontextmenu='return false' class='snippet-body'>
<div class="container">
<form  action="profile.php" method="post">
    <div class="row">
      
        <div class="col-md-6">
            <div class="p-3 py-5">
               
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value="<?php echo $user_data['name']; ?>"></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" name="surname" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control"  name="user_name"></div>
                    <div class="col-md-12"><label class="labels">Mobile Number</label><input type="text" class="form-control" placeholder="enter phone number" name="ph_no"></div>
                    <div class="col-md-12"><label class="labels">Teacher id</label><input type="text" class="form-control" placeholder="Teacher id" name="t_id"></div>
                    <div class="col-md-12"><label class="labels">Email ID</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $user_data['email_id']; ?>"></div>
                   
                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span></div><br>
                <div class="row mt-3">
                <div class="col-md-6"><label class="labels">Department</label><input type="text" class="form-control" placeholder="department" name="dept"></div>
                    <div class="col-md-12"><label class="labels">Education</label><input type="text" class="form-control" placeholder="education" name="education"></div>
                    <div class="col-md-12"><label class="labels">Experience</label><input type="text" class="form-control" placeholder="experience" name="experience"></div> <br>
                    
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" name="add_details"></div>
                <div class="row mt-3">
                <div class="col-md-6"><input type="submit" value="Save details"></div>
                <div class="col-md-6"><a href="dashboard.php"><input type="submit1" value="Back to Homepage"></a></div>
                </div>
            </div>
        </div>
                </div>
               
    </div>
</div>
</div>
</form>
</div>
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
            <script type='text/javascript'></script>
            </body>
        </html>
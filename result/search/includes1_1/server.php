<?php


include("connection.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
    
    $s_enroll_no = $_POST['s_enroll_no'];

	$course_code_1 = $_POST['course_code_1'];
		$course_name_1 = $_POST['course_name_1'];
		$course_unit_1 = $_POST['course_unit_1'];
		$course_grade_1 = $_POST['course_grade_1'];

		$course_code_2 = $_POST['course_code_2'];
		$course_name_2 = $_POST['course_name_2'];
		$course_unit_2 = $_POST['course_unit_2'];
		$course_grade_2 = $_POST['course_grade_2'];

		$course_code_3 = $_POST['course_code_3'];
		$course_name_3= $_POST['course_name_3'];
		$course_unit_3 = $_POST['course_unit_3'];
		$course_grade_3= $_POST['course_grade_3'];

		$course_code_4= $_POST['course_code_4'];
		$course_name_4 = $_POST['course_name_4'];
		$course_unit_4 = $_POST['course_unit_4'];
		$course_grade_4 = $_POST['course_grade_4'];

		$course_code_5 = $_POST['course_code_5'];
		$course_name_5 = $_POST['course_name_5'];
		$course_unit_5 = $_POST['course_unit_5'];
		$course_grade_5 = $_POST['course_grade_5'];

		$course_code_6 = $_POST['course_code_6'];
		$course_name_6 = $_POST['course_name_6'];
		$course_unit_6 = $_POST['course_unit_6'];
		$course_grade_6 = $_POST['course_grade_6'];

		$course_code_7 = $_POST['course_code_7'];
		$course_name_7 = $_POST['course_name_7'];
		$course_unit_7 = $_POST['course_unit_7'];
		$course_grade_7 = $_POST['course_grade_7'];
	
if(!empty($course_code_1) && !empty($course_name_1) && !empty($course_unit_1) && !empty($course_grade_1) && !empty($course_code_2) && !empty($course_name_2))
{

	//save to database
	
	$query = "insert into courses (s_enroll_no,course_code_1,course_name_1,course_unit_1,course_grade_1,course_code_2,course_name_2,course_unit_2,course_grade_2,course_code_3,course_name_3,course_unit_3,course_grade_3,course_code_4,course_name_4,course_unit_4,course_grade_4,course_code_5,course_name_5,course_unit_5,course_grade_5,course_code_6,course_name_6,course_unit_6,course_grade_6,course_code_7,course_name_7,course_unit_7,course_grade_7) values ('$s_enroll_no','$course_code_1','$course_name_1','$course_unit_1','$course_grade_1','$course_code_2','$course_name_2','$course_unit_2','$course_grade_2','$course_code_3','$course_name_3','$course_unit_3','$course_grade_3','$course_code_4','$course_name_4','$course_unit_4','$course_grade_4','$course_code_5','$course_name_5','$course_unit_5','$course_grade_5','$course_code_6','$course_name_6','$course_unit_6','$course_grade_6','$course_code_7','$course_name_7','$course_unit_7','$course_grade_7')";
	mysqli_query($con, $query);
	

}else
{
	
}
}
?>
<?php

$T_grade_1 = "";
$T_grade_2 = "";
$T_grade_3 = "";
$T_grade_4 = "";
$T_grade_5 = "";
$T_grade_6 = "";
$T_grade_7 = "";

	$array = array("A"=>"10", "B"=>"8", "C"=>"6", "D"=>"4", "E"=>"2", "F"=>"0","a"=>"10", "b"=>"8", "c"=>"6", "d"=>"4", "e"=>"2", "f"=>"0");

	isset($_POST['btn']);
		
		$course_code_1 = $_POST['course_code_1'];
		$course_name_1 = $_POST['course_name_1'];
		$course_unit_1 = $_POST['course_unit_1'];
		$course_grade_1 = $_POST['course_grade_1'];

		$course_code_2 = $_POST['course_code_2'];
		$course_name_2 = $_POST['course_name_2'];
		$course_unit_2 = $_POST['course_unit_2'];
		$course_grade_2 = $_POST['course_grade_2'];

		$course_code_3 = $_POST['course_code_3'];
		$course_name_3= $_POST['course_name_3'];
		$course_unit_3 = $_POST['course_unit_3'];
		$course_grade_3= $_POST['course_grade_3'];

		$course_code_4= $_POST['course_code_4'];
		$course_name_4 = $_POST['course_name_4'];
		$course_unit_4 = $_POST['course_unit_4'];
		$course_grade_4 = $_POST['course_grade_4'];

		$course_code_5 = $_POST['course_code_5'];
		$course_name_5 = $_POST['course_name_5'];
		$course_unit_5 = $_POST['course_unit_5'];
		$course_grade_5 = $_POST['course_grade_5'];

		$course_code_6 = $_POST['course_code_6'];
		$course_name_6 = $_POST['course_name_6'];
		$course_unit_6 = $_POST['course_unit_6'];
		$course_grade_6 = $_POST['course_grade_6'];

		$course_code_7 = $_POST['course_code_7'];
		$course_name_7 = $_POST['course_name_7'];
		$course_unit_7 = $_POST['course_unit_7'];
		$course_grade_7 = $_POST['course_grade_7'];
		
		if ($course_grade_1 != "") {
			$T_grade_1 = $array[$course_grade_1];
		}
		if ($course_grade_2 != "") {
			$T_grade_2 = $array[$course_grade_2];
		}
		if ($course_grade_3 != "") {
			$T_grade_3 = $array[$course_grade_3];
		}
		if ($course_grade_4 != "") {
			$T_grade_4 = $array[$course_grade_4];
		}
		if ($course_grade_5 != "") {
			$T_grade_5 = $array[$course_grade_5];
		}
		if ($course_grade_6 != "") {
			$T_grade_6 = $array[$course_grade_6];
		}
		if ($course_grade_7 != "") {
			$T_grade_7 = $array[$course_grade_7];
		}
		
		(float)$T_unit = ((int)$course_unit_1 + (int)$course_unit_2 + (int)$course_unit_3 + (int)$course_unit_4 + (int)$course_unit_5 + (int)$course_unit_6 + (int)$course_unit_7) ;

		(float)$T_Score = (((int)$T_grade_1 * (int)$course_unit_1) + ((int)$T_grade_2 * (int)$course_unit_2) + ((int)$T_grade_3 * (int)$course_unit_3) + ((int)$T_grade_4 * (int)$course_unit_4) + ((int)$T_grade_5 * (int)$course_unit_5) + ((int)$T_grade_6 * (int)$course_unit_6) + ((int)$T_grade_7 * (int)$course_unit_7));

		(float)$GPA = (float)((float)$T_Score / (float)$T_unit);

			echo "<h4>Total credits earned = <big style='color:#00FF00'>'".$T_unit."'</big></h4>";
		
		



		if ($GPA >=9.5 and $GPA <= 10.00) {
				echo "<tr><td><h4><big style='color:#00FF00'>Congratulation!</big> You re at <big><i>'First Class'</i></big> point of GPA. <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 8.50) {
				echo "<tr><td><h4><big style='color:#00FF00'>Congratulation!</big> You re at <big><i>'Second Class Honour'</i></big> point of GPA. <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 7.50) {
				echo "<tr><td><h4><big style='color:#00FF00'>Congratulation!</big> You re at <big><i>'Second Class Lower'</i></big> point of GPA. <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 6.00) {
				echo "<tr><td><h4><big style='color:#00FF00'>Congratulation!</big> You re at <big><i>'Third Class Honour'</i></big> point of GPA. <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			elseif ($GPA >= 4.75) {
				echo "<tr><td><h4><big style='color:#00FF00'>Congratulation!</big> You re at <big><i>'Third Class Lower'</i></big> point of GPA. <big style='color:#00FF00;'><i>Keep it  Up...</i></big></h4></td></tr>";
			}
			else {
				echo("<tr><td><h4><i style='color:#FF3300';>Sorry!</i> you re withdran from the University, due to certain point you couldn't reach...!</h4></td></tr>");
				}  
?>
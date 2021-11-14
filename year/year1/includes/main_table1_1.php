<?php

?>
<style>
	.breakrow{
    font-size: 12px;
	font-family: 'times new roman';
	font-weight: 900;
}
tbody{
	border-collapse: collapse;
    border-radius: 20px;

	
}
td{
	font-weight: bold;
	font-family: 'Times New Roman';
	border: 0;	
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
		font-size: 15px;
		text-align:center;
		transition: 0.2s ease;
	}

	input[type="text"]:focus{
     border-bottom: 2px solid #16a085;
  	 color: #16a085;
  	 transition: 0.2s ease;
}
table.gridtable1{
	border-width:95%;
	width: 80%;
	overflow: auto;
	font-family: 'Times New Roman';
	font-size: 14px;
	background-color: #000000;   
	border-collapse: collapse;
	text-align: center;
	transition: 0.5s;

	margin: 40px 0 40px 0;
}
table.gridtable1 thead{
	background-color: #000000;
	font-family: 'times new roman';
    font-weight: 600;
    font-size: 16px;
	color: white;
}

table.gridtable1 th{
	padding: 10px;
	background-color: #000000;   
	text-align: center;
	font-size: 17px;
	transition: 0.5s;
}
table.gridtable1 td{
	background-color: #000000;
	padding: 10px;
	
	font-weight: bold;
	transition: 0.5s;
}

table input{
	width: 86%;
 	height:30px;
	border-radius: 15px;
	background: white;
	float:right;
	transition: 0.5s;
}
.item{
	font-weight: bold;
	
  	color:whitesmoke  
}
.item td{
	text-align:left;
}

.breakrow{
	font-weight: bold;
	
	border-radius: 15px;
	transition: 0.5s;
}
tr.breakrow{
	font: size 12px; 
	font-weight: 900;
	transition: 0.5s;
	border-radius: 15px;
}
.datarow{
	
	text-align: left;
	display: none;
	transition: 0.5s;
	border-radius: 10px;
}
.datarow .sn{
    text-align: center;
	font-family: 'times new roman';
    font-weight: 600;
    font-size: 16px;
	color: white;
}
.breakrow{
    font-size: 12px;
	font-family: 'times new roman';
	font-weight: 900;
}
.labels {
    font-size: 14px;
    font-family: 'times new roman';
    font-weight: 600;
    color: black;
    
}
input[type="text4"] {
  display: block;
  box-sizing: border-box; 
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
select{
	
	margin-bottom: 0px;
		padding: 0px;
		margin-left:40px;
		width: 220px;  
		height: 30px; 
		border: none;  
		border-radius: 10px;  
		padding-left: 0px;  
		border-bottom: 0px solid #AAA;
		font-family: 'times new roman';
		font-weight: 600;
		font-size: 15px;
		text-align:center;
		
}
</style>

			<center>
				<form action="/login/students/result1_1.php" method="post">
				<table class="gridtable1" >
				<label class="labels">Enrollment Number</label>
                <input type="text4" name="s_enroll_no" placeholder="Student's Enrollment Number" />
					
					<!--form method="post" action="/login/students/result1_1.php"-->
						<thead>
							<th>S/N</th>
							<th>COURSE CODE</th>
							<th>COURSE NAME</th>
							<th>COURSE CREDITS</th>
							<th>COURSE GRADE</th>
						</thead>
						<tbody>
						<tr  class="breakrow">
							<td colspan="5" style="text-align: center; width: 100%;">
								<label><input value="CLICK TO INSERT YOUR DATA" style=" text-align: center; width: 100%; height: 35px;cursor: pointer; font-size: 16px; font-family: times new roman; font-weight:bold; background: #2d3436;
  	background-image: linear-gradient(315deg, #2d3436 0%, #d3d3d3 74%);" class="form-control"></label>
							</td>
						</tr>
				
							<tr class="datarow">
								<td class="sn">1</td>
								<td><input type="text" name="course_code_1" placeholder="Enter the course Code" value="CHEM111"></td>
								<td><input type="text" name="course_name_1" placeholder="Enter the course name" value="Chemistry"></td>
								<td><input type="text" name="course_unit_1" placeholder="Enter the course unit" value="3">></td>
								<td><input type="text" name="course_grade_1" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">2</td>
								<td><input type="text" name="course_code_2" placeholder="Enter the course Code" value="EGL112">></td>
								<td><input type="text" name="course_name_2" placeholder="Enter the course name" value="English Language Skills">></td>
								<td><input type="text" name="course_unit_2" placeholder="Enter the course unit" value="3">></td>
								<td><input type="text" name="course_grade_2" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">3</td>
								<td><input type="text" name="course_code_3" placeholder="Enter the course Code" value="MATH113"></td>
								<td><input type="text" name="course_name_3" placeholder="Enter the course name" value="Linear Algebra"></td>
								<td><input type="text" name="course_unit_3" placeholder="Enter the course unit" value="3"></td>
								<td><input type="text" name="course_grade_3" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">4</td>
								<td><input type="text" name="course_code_4" placeholder="Enter the course Code" value="PHY114"></td>
								<td><input type="text" name="course_name_4" placeholder="Enter the course name" value="Physics I"></td>
								<td><input type="text" name="course_unit_4" placeholder="Enter the course unit" value="3"></td>
								<td><input type="text" name="course_grade_4" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">5</td>
								<td><input type="text" name="course_code_5" placeholder="Enter the course Code" value="TA116"></td>
								<td><input type="text" name="course_name_5" placeholder="Enter the course name" value="Computer Programming I"></td>
								<td><input type="text" name="course_unit_5" placeholder="Enter the course unit" value="3"></td>
								<td><input type="text" name="course_grade_5" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">6</td>
								<td><input type="text" name="course_code_6" placeholder="Enter the course Code" value="EVS117"></td>
								<td><input type="text" name="course_name_6" placeholder="Enter the course name" value="Environmental Science"></td>
								<td><input type="text" name="course_unit_6" placeholder="Enter the course unit" value="2"></td>
								<td><input type="text" name="course_grade_6" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">7</td>
								<td><input type="text" name="course_code_7" placeholder="Enter the course Code" value="TA115"></td>
								<td><input type="text" name="course_name_7" placeholder="Enter the course name" value="Engineering Graphics"></td>	
								<td><input type="text" name="course_unit_7" placeholder="Enter the course unit" value="4"></td>
								<td><input type="text" name="course_grade_7" placeholder="Enter the course grade"></td>
							</tr>
						</tbody>
						<tr>
							<td colspan="5" style="text-align: center; width: 100%; background: black;">
								<input type="submit" name="btn" value="Calculate" style=" width: 100%; height: 50px; font-size: 25px; font-family: times new roman" class="form-control">
							</td>
						</tr>
<!--form--> 
				</table>
				</form>
			</center>
		
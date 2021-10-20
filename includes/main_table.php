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
table.gridtable1 thead{
	background-color: #000000;
}

table.gridtable1 th{
	padding: 8px;
	background-color: #000000;   
	text-align: center;
	font-size: 17px;
	transition: 0.5s;
}
table.gridtable1 td{
	background-color: #000000;
	padding: 8px;
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
}
.breakrow{
    font-size: 12px;
	font-family: 'times new roman';
	font-weight: 900;
}
</style>
<div class="container" id="container">
			<center>
				<table class="gridtable1" >
					
					<!--form method="post" action="process.php"-->
						<thead>
							<th>S/N</th>
							<th>COURSE CODE</th>
							<th>COURSE NAME</th>
							<th>COURSE TOTAL MARKS</th>
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
								<td><input type="text" name="course_code_1" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_1" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_1" placeholder="Enter the course marks"></td>
								<td><input type="text" name="course_grade_1" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">2</td>
								<td><input type="text" name="course_code_2" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_2" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_2" placeholder="Enter the course marks"></td>
								<td><input type="text" name="course_grade_2" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">3</td>
								<td><input type="text" name="course_code_3" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_3" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_3" placeholder="Enter the course marks"></td>
								<td><input type="text" name="course_grade_3" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">4</td>
								<td><input type="text" name="course_code_4" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_4" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_4" placeholder="Enter the course marks"></td>
								<td><input type="text" name="course_grade_4" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">5</td>
								<td><input type="text" name="course_code_5" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_5" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_5" placeholder="Enter the course marks"></td>
								<td><input type="text" name="course_grade_5" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">6</td>
								<td><input type="text" name="course_code_6" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_6" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_6" placeholder="Enter the course marks"></td>
								<td><input type="text" name="course_grade_6" placeholder="Enter the course grade"></td>
							</tr>
							<tr class="datarow">
								<td class="sn">7</td>
								<td><input type="text" name="course_code_7" placeholder="Enter the course Code"></td>
								<td><input type="text" name="course_name_7" placeholder="Enter the course name"></td>
								<td><input type="text" name="course_marks_7" placeholder="Enter the course marks"></td>
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
			</center>
		</div>
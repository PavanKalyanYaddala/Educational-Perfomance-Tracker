<?php

	$Name=$_POST['Name'];
	$Surname=$_POST['Surname'];
	$RollNumber=$_POST['RollNumber'];
	$Aadhar=$_POST['Aadhar'];
	$Course=$_POST['Course'];
	$CGPA=$_POST['CGPA'];
	$SGPA11=$_POST['SGPA11'];
	$SGPA12=$_POST['SGPA12'];
	$SGPA21=$_POST['SGPA21'];
	$SGPA22=$_POST['SGPA22'];
	$SGPA31=$_POST['SGPA31'];
	$SGPA32=$_POST['SGPA32'];
	$SGPA41=$_POST['SGPA41'];
	$SGPA42=$_POST['SGPA42'];
	$Attendance1=$_POST['Attendance1'];
	$Attendance2=$_POST['Attendance2'];
	$Attendance3=$_POST['Attendance3'];
	$Attendance4=$_POST['Attendance4'];
	$Attendance5=$_POST['Attendance5'];
	$Attendance6=$_POST['Attendance6'];
	$student="student";
	$conn=new mysqli('localhost','root','','ept');
	
	if($conn->connect_error)
	{
		die('Connection Failed:'.$conn->connect_error);
	}
	else
	{
		$stmt=$conn->prepare("insert into addstudent(Name,Surname,RollNumber,Aadhar,Course,CGPA,SGPA11,SGPA12,SGPA21,SGPA22,SGPA31,SGPA32,SGPA41,SGPA42,Attendance1,Attendance2,Attendance3,Attendance4,Attendance5,Attendance6)
			values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssddddddddddddddd",$Name,$Surname,$RollNumber,$Aadhar,$Course,$CGPA,$SGPA11,$SGPA12,$SGPA21,$SGPA22,$SGPA31,$SGPA32,$SGPA41,$SGPA42,$Attendance1,$Attendance2,$Attendance3,$Attendance4,$Attendance5,$Attendance6);
		$stmt->execute();
		$stmt->close();
		$stmt=$conn->prepare("insert into users(user_name,password,name,usertype)
			values(?,?,?,?)");
		$stmt->bind_param("ssss",$RollNumber,$Aadhar,$Name,$student);
		$stmt->execute();
		header("Location: admin.html?error=Student Added Successfully");
		exit();
		$stmt->close();
		$conn->close();
	}
?>
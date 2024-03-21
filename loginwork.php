<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	if (empty($uname)) {
		header("Location: Loginpage.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: Loginpage.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass && $row['usertype'] === "admin") 
            {
            	header("Location: admin.php");
		        exit();
            }
            elseif($row['user_name'] === $uname && $row['password'] === $pass && $row['usertype'] === "student")
            {
            	$sql2 = "SELECT * FROM addstudent WHERE RollNumber='$uname' AND Aadhar='$pass'";

				$result2 = mysqli_query($conn, $sql2);
				$row2 = mysqli_fetch_assoc($result2);
            	$_SESSION['user_name'] = $row2['RollNumber'];
            	$_SESSION['name'] = $row2['Name'];
            	$_SESSION['surname'] = $row2['Surname'];
            	$_SESSION['CGPA'] = $row2['CGPA'];
            	$_SESSION['SGPA11'] = $row2['SGPA11'];
            	$_SESSION['SGPA12'] = $row2['SGPA12'];
            	$_SESSION['SGPA21'] = $row2['SGPA21'];
            	$_SESSION['SGPA22'] = $row2['SGPA22'];
            	$_SESSION['SGPA31'] = $row2['SGPA31'];
            	$_SESSION['SGPA32'] = $row2['SGPA32'];
            	$_SESSION['SGPA41'] = $row2['SGPA41'];
            	$_SESSION['SGPA42'] = $row2['SGPA42'];
            	$_SESSION['Attendance1'] = $row2['Attendance1'];
            	$_SESSION['Attendance2'] = $row2['Attendance2'];
            	$_SESSION['Attendance3'] = $row2['Attendance3'];
            	$_SESSION['Attendance4'] = $row2['Attendance4'];
            	$_SESSION['Attendance5'] = $row2['Attendance5'];
            	$_SESSION['Attendance6'] = $row2['Attendance6'];
            	header("Location: student.php");
		        exit();
            }

            else{
				header("Location: Loginpage.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: Loginpage.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: Loginpage.php");
	exit();
}
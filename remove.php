<?php 
session_start();

if (isset($_SESSION['RollNumber'])) {

 ?>
echo "Student Removed";

<?php
}else{
	header("Location: EditRemove.php");
	exit();
}
?>
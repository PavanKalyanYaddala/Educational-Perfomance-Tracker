
<!DOCTYPE html>
<html>
    <head>
        <title>Add Student</title>
        <link rel="stylesheet" href="adds.css">
    </head>
    <body>
		<div class="pagename">
			<h1>Educational Perfomance Tracker</h1>
			<h1>Admin Portal</h1>
		</div>
        <div class="mai">
            <h1 id="hed">add student</h1>
            <hr id="hrl">
            <form action="Add.php" method="post">
                <div class="form">
                  <label for="name">Enter Name&emsp;&emsp;&emsp;&ensp;:</label>
                  <input type="text" name="Name" id="Name" required>
                </div>
				<div class="form">
                  <label for="name">Enter Surname&emsp;&emsp;&ensp;:</label>
                  <input type="text" name="Surname" id="Surname" required>
                </div>
                <div class="form">
                  <label for="name">Enter Roll Number&emsp;:</label>
                  <input type="text" name="RollNumber" id="RollNumber" required>
                </div>
				<div class="form">
                  <label for="name">Enter Aadhar Number:</label>
                  <input type="text" name="Aadhar" id="Aadhar" required>
                </div>
				<div class="form">
                  <label for="name">Enter Branch Name&emsp;:</label>
                  <input type="text" name="Course" id="Course" required>
                </div>
				<div class="form">
                  <label for="name">Enter CGPA&emsp;&emsp;&emsp;&emsp;:</label>
                  <input type="text" name="CGPA" id="CGPA" required>
                </div>
				<div class="form">
                  <label for="name">Enter 1-1 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA11" id="SGPA11" required>
                </div>
				<div class="form">
                  <label for="name">Enter 1-2 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA12" id="SGPA12" required>
                </div>
				<div class="form">
                  <label for="name">Enter 2-1 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA21" id="SGPA21" required>
                </div>
				<div class="form">
                  <label for="name">Enter 2-2 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA22" id="SGPA22" required>
                </div>
				<div class="form">
                  <label for="name">Enter 3-1 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA31" id="SGPA22" required>
                </div>
				<div class="form">
                  <label for="name">Enter 3-2 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA32" id="SGPA22" required>
                </div>
				<div class="form">
                  <label for="name">Enter 4-1 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA41" id="SGPA22" required>
                </div>
				<div class="form">
                  <label for="name">Enter 4-2 SGPA&emsp;&ensp;&ensp;&nbsp;&nbsp;:</label>
                  <input type="text" name="SGPA42" id="SGPA22" required>
                </div>
				<div class="form">
                  <label for="name">Enter Month 1 Attendance:</label>
                  <input type="text" name="Attendance1" id="Attendance1" required>
                </div>
				<div class="form">
                  <label for="name">Enter Month 2 Attendance:</label>
                  <input type="text" name="Attendance2" id="Attendance2" required>
                </div>
				<div class="form">
                  <label for="name">Enter Month 3 Attendance:</label>
                  <input type="text" name="Attendance3" id="Attendance3" required>
                </div>
				<div class="form">
                  <label for="name">Enter Month 4 Attendance:</label>
                  <input type="text" name="Attendance4" id="Attendance4" required>
                </div>
				<div class="form">
                  <label for="name">Enter Month 5 Attendance:</label>
                  <input type="text" name="Attendance5" id="Attendance5" required>
                </div>
				<div class="form">
                  <label for="name">Enter Month 6 Attendance:</label>
                  <input type="text" name="Attendance6" id="Attendance6" required>
                </div>
                 <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
                <div class="buttons">
				
                  <input type="submit" value="Add Student">
				
                </div>
              </form>
        </div>
    </body>
</html>

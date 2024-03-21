<!DOCTYPE html>
<html>
    <head>
        <title>Edit/Remove Student</title>
        <link rel="stylesheet" href="edits.css">
    </head>
    <body>
		<div class="pagename">
			<h1>Educational Perfomance Tracker</h1>
			<h1>Edit/Remove Student</h1>
		</div>
        
            <div class="ed">
                <form action="" method="GET">
                    <input type="text" id="ent" placeholder="Roll Number"name="stud_id" value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];} ?>" class="form-control"/>
                    <button id="search">Search</button>
                    <?php 
                                    $con = mysqli_connect("localhost","root","","ept");

                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];
                                        $query = "SELECT * FROM addstudent WHERE RollNumber='$stud_id' ";
                                        $query_run = mysqli_query($con, $query);
                                        $row2 = mysqli_fetch_assoc($query_run);
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            $_SESSION['Name'] = $row2['Name'];
                                            $_SESSION['Surname'] = $row2['Surname'];
                                            $_SESSION['RollNumber'] = $row2['RollNumber'];
                                            $_SESSION['Aadhar'] = $row2['Aadhar'];
                                            $_SESSION['Course'] = $row2['Course'];
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
                                            echo "Record Found";
                                        }
                                        else
                                        {
                                            echo "No Record Found";
                                        }
                                    }
                                   
                                ?>
                </form>
    			<form action="Update.php" method="GET">
                    <button id="submit">Edit</button>
                </form>    
    			<form action="Remove.php" method="GET">
                    <button id="submit">Remove</button>
                    <?php 
                                    $con = mysqli_connect("localhost","root","","ept");

                                    if(isset($_GET['stud_id']))
                                    {
                                        $stud_id = $_GET['stud_id'];
                                        $query = "SELECT * FROM addstudent WHERE RollNumber='$stud_id' ";
                                        $query_run = mysqli_query($con, $query);
                                        $row2 = mysqli_fetch_assoc($query_run);
                                        $_SESSION['RollNumber'] = $row2['RollNumber'];
                                    }
                    ?>
                </form>    
            </div>
        
    </body>
</html>
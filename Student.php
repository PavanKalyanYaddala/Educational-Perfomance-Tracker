<?php 
session_start();

if (isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
    <head>
        <Title>Student Statistics</Title>
        <link rel="stylesheet" href="student.css">
    
    </head>
    <body>
        <div class="welcome">
        <label style="color:white;">Hello, <?php echo $_SESSION['name']; echo $_SESSION['surname']; ?></label>
        </div> 
        <div class="logout"> 
		  <a href="Loginpage.php">
            <button>Logout</button>
          </a>
        </div>
        <div class="pagename">
			<h1>Educational Perfomance Tracker</h1>
			<h1>Student Statistics</h1>
		</div>

        <div class="marks">
            <h1 id="headi">Education</h1>
            <hr id="hrl">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [' ', 'SGPA'],
          <?php
            $res=array();
            array_push($res,$_SESSION['SGPA11'],$_SESSION['SGPA12'],$_SESSION['SGPA21'],$_SESSION['SGPA22'],$_SESSION['SGPA31'],$_SESSION['SGPA32'],$_SESSION['SGPA41'],$_SESSION['SGPA42']);
            $GPA=array(' ');
           foreach($GPA as $data2)
            {
              foreach($res as $data)
              {
              $SGPA=$data2;
              $SGPAvalue=$data;
          ?>
              ['<?php echo $SGPA;?>',<?php echo $SGPAvalue;?>],
              <?php
            }
        }
          ?>
        ]);

        var options = {
          title: 'Educational Performance',
          curveType: 'function',
         
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <div id="curve_chart" style="width: 650px; height: 400px"></div>
    <label>&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp;&emsp;  1-1 &emsp; 1-2 &emsp; 2-1 &emsp; 2-2 &emsp;&ensp; 3-1 &emsp;&ensp; 3-2 &emsp;&ensp; 4-1&emsp;&ensp; 4-2 </label>
    <br><br>
           <?php
                echo "&emsp; &emsp; &emsp; &emsp; *Your CGPA is :&nbsp;",$_SESSION['CGPA'];
                if($_SESSION['SGPA11'] < 7.50 && $_SESSION['SGPA11'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 1-1 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA11'] < 6.50 && $_SESSION['SGPA11'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 1-1 Semester SGPA is having Low Percentage.";
                }
                elseif($_SESSION['SGPA11'] == 0)
                {
                    echo "</br>";
                    echo "</br>";
                    echo "&emsp; &emsp; &emsp; &emsp;*You're a Lateral Entry Student so You Doesn't have 1-1 Semester Percentage";
                }
                if($_SESSION['SGPA12'] < 7.50 && $_SESSION['SGPA12'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 1-2 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA12'] < 6.50 && $_SESSION['SGPA12'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 1-2 Semester SGPA is having Low Percentage.";
                }
                elseif($_SESSION['SGPA12'] == 0)
                {
                    echo "</br>";
                    echo "</br>";
                    echo "&emsp; &emsp; &emsp; &emsp;*You're a Lateral Entry Student so You Doesn't have 1-2 Semester Percentage";
                }
                if($_SESSION['SGPA21'] < 7.50 && $_SESSION['SGPA21'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 2-1 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA21'] < 6.50 && $_SESSION['SGPA21'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 2-1 Semester SGPA is having Low Percentage.";
                }
                if($_SESSION['SGPA22'] < 7.50 && $_SESSION['SGPA22'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 2-2 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA22'] < 6.50 && $_SESSION['SGPA22'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 2-2 Semester SGPA is having Low Percentage.";
                }
                if($_SESSION['SGPA31'] < 7.50 && $_SESSION['SGPA31'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 3-1 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA31'] < 6.50 && $_SESSION['SGPA31'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 3-1 Semester SGPA is having Low Percentage.";
                }
                elseif($_SESSION['SGPA31'] == 0)
                {
                    echo "</br>";
                    echo "</br>";
                    echo "&emsp; &emsp; &emsp; &emsp;*Study Two More Hours to Get Better Percentage in 3-1 Semester";
                }
                if($_SESSION['SGPA32'] < 7.50 && $_SESSION['SGPA32'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 3-2 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA32'] < 6.50 && $_SESSION['SGPA32'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 3-2 Semester SGPA is having Low Percentage.";
                }
                elseif($_SESSION['SGPA32'] == 0)
                {
                    echo "</br>";
                    echo "</br>";
                    echo "&emsp; &emsp; &emsp; &emsp;*Study Two More Hours to Get Better Percentage in 3-2 Semester";
                }
                if($_SESSION['SGPA41'] < 7.50 && $_SESSION['SGPA41'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 4-1 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA41'] < 6.50 && $_SESSION['SGPA41'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 4-1 Semester SGPA is having Low Percentage.";
                }
                elseif($_SESSION['SGPA41'] == 0)
                {
                    echo "</br>";
                    echo "</br>";
                    echo "&emsp; &emsp; &emsp; &emsp;*Study Two More Hours to Get Better Percentage in 4-1 Semester";
                }
                if($_SESSION['SGPA42'] < 7.50 && $_SESSION['SGPA42'] > 6.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 4-2 Semester SGPA is having Medium Percentage.";
                }
                elseif($_SESSION['SGPA42'] < 6.50 && $_SESSION['SGPA42'] > 5.50)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; &emsp; &emsp; *Your 4-2 Semester SGPA is having Low Percentage.";
                }
                elseif($_SESSION['SGPA31'] == 0)
                {
                    echo "</br>";
                    echo "</br>";
                    echo "&emsp; &emsp; &emsp; &emsp;*Study Two More Hours to Get Better Percentage in this Last Semester";
                }
            ?>
        </div>


        <div class="attendance">
            <h1 id="headi">attendance</h1>
            <hr id="hrl">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          [' ', 'Attendance'],
          <?php
            $res=array();
            array_push($res,$_SESSION['Attendance1'],$_SESSION['Attendance2'],$_SESSION['Attendance3'],$_SESSION['Attendance4'],$_SESSION['Attendance5'],$_SESSION['Attendance6']);
            $GPA=array(" ");
           foreach($GPA as $data2)
            {
              foreach($res as $data)
              {
              $SGPA=$data2;
              $SGPAvalue=$data;
          ?>
              ['<?php echo $SGPA;?>',<?php echo $SGPAvalue;?>],
              <?php
            }
        }
          ?>
        ]);

        var options = {
          title: 'Attendance',
          curveType: 'function',
          
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart2'));

        chart.draw(data, options);
      }
    </script>
    <div id="curve_chart2" style="width: 650px; height: 400px; float: right;"></div>
    <label>&emsp; &emsp;&emsp; &emsp;&emsp; &emsp;&emsp; &emsp; Month 1 &ensp; Month 2 &ensp; Month 3&ensp; Month 4&ensp; Month 5&ensp; Month 6</label>
    <br><br>
    <?php
                $AverageAttendance= $_SESSION['Attendance1']+$_SESSION['Attendance2']+$_SESSION['Attendance3']+$_SESSION['Attendance4']+$_SESSION['Attendance5']+$_SESSION['Attendance6'];
                $AverageAttendance=$AverageAttendance/6;
                echo "&emsp; &emsp; *Your Average Attendance is :&nbsp;",$AverageAttendance;
                if($_SESSION['Attendance1'] < 75.0 && $_SESSION['Attendance1'] > 65.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 1 Attendance is having Low Percentage and You're in Condonation List.";
                }
                
                elseif($_SESSION['Attendance1'] > 75.0 && $_SESSION['Attendance1'] > 85.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 1  Attendance is having Medium Percentage.";
                }
                elseif($_SESSION['Attendance1'] < 65.0 && $_SESSION['Attendance1'] > 0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 1  Attendance is having Low Percentage and You're in Detain List....!!!";
                }
                elseif($_SESSION['Attendance1'] > 85.0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 1  Attendance is having Good Percentage ";
                }
                if($_SESSION['Attendance2'] < 75.0 && $_SESSION['Attendance2'] > 65.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 2 Attendance is having Low Percentage and You're in Condonation List.";
                }
                elseif($_SESSION['Attendance2'] > 75.0 && $_SESSION['Attendance2'] < 85.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 2 Attendance is having Medium Percentage.";
                }
                elseif($_SESSION['Attendance2'] < 65.0 && $_SESSION['Attendance2'] > 0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 2 Attendance is having Low Percentage and You're in Detain List....!!!";
                }
                elseif($_SESSION['Attendance2'] > 85.0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 2 Attendance is having Good Percentage ";
                }
                elseif($_SESSION['Attendance2'] == 0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Please Attend to the Classes Regularly in Month 2";
                }
                if($_SESSION['Attendance3'] < 75.0 && $_SESSION['Attendance3'] > 65.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 3 Attendance is having Low Percentage and You're in Condonation List.";
                }
                elseif($_SESSION['Attendance3'] > 75.0 && $_SESSION['Attendance3'] < 85.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 3 Attendance is having Medium Percentage.";
                }
                elseif($_SESSION['Attendance3'] < 65.0 && $_SESSION['Attendance3'] > 0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 3 Attendance is having Low Percentage and You're in Detain List....!!!";
                }
                elseif($_SESSION['Attendance3'] > 85.0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 3 Attendance is having Good Percentage ";
                }
                elseif($_SESSION['Attendance3'] == 0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Please Attend to the Classes Regularly in Month 3";
                }
                if($_SESSION['Attendance4'] < 75.0 && $_SESSION['Attendance4'] > 65.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 4 Attendance is having Low Percentage and You're in Condonation List.";
                }
                
                elseif($_SESSION['Attendance4'] > 75.0 && $_SESSION['Attendance4'] < 85.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 4 Attendance is having Medium Percentage.";
                }

                elseif($_SESSION['Attendance4'] < 65.0 && $_SESSION['Attendance4'] > 0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 4 Attendance is having Low Percentage and You're in Detain List....!!!";
                }
                 elseif($_SESSION['Attendance4'] > 85.0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 4 Attendance is having Good Percentage ";
                }
                elseif($_SESSION['Attendance4'] == 0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Please Attend to the Classes Regularly in Month 4";
                }
                if($_SESSION['Attendance5'] < 75.0 && $_SESSION['Attendance5'] > 65.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 5 Attendance is having Low Percentage and You're in Condonation List.";
                }
                
                elseif($_SESSION['Attendance5'] > 75.0 && $_SESSION['Attendance5'] < 85.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 5 Attendance is having Medium Percentage.";
                }
                elseif($_SESSION['Attendance5'] < 65.0 && $_SESSION['Attendance5'] > 0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 5 Attendance is having Low Percentage and You're in Detain List....!!!";
                }
                 elseif($_SESSION['Attendance5'] > 85.0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 5 Attendance is having Good Percentage ";
                }
                elseif($_SESSION['Attendance5'] == 0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Please Attend to the Classes Regularly in Month 5";
                }
                if($_SESSION['Attendance6'] < 75.0 && $_SESSION['Attendance6'] > 65.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 6 Attendance is having Low Percentage and You're in Condonation List.";
                }
                
                elseif($_SESSION['Attendance6'] > 75.0 && $_SESSION['Attendance6'] < 85.0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 6 is having Medium Percentage.";
                }
                elseif($_SESSION['Attendance6'] < 65.0 && $_SESSION['Attendance6'] > 0)
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp;  *Your Month 6 Attendance is having Low Percentage and You're in Detain List....!!!";
                }
                 elseif($_SESSION['Attendance6'] > 85.0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Your Month 6 Attendance is having Good Percentage ";
                }
                elseif($_SESSION['Attendance6'] == 0 )
                {
                    echo "</br>";
                    echo "</br>"; 
                    echo "&emsp; &emsp; *Please Attend to the Classes Regularly in Month 6";
                }
                
                
            ?>
        </div>  
    </body>
</html>
<?php 
}
else
{
     header("Location: loginpage.php");
     exit();
}
 ?>
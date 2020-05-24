<?php
include('connection.php');   
 ?>
<html>
<head>
	<title>Apex Public School</title>
    <link rel="shortcut icon" href="ico/logo.ico">
    <style type="text/css">
    	table {
    			border-collapse: collapse;
    			width: 100%;
		}

		th, td {
		    text-align:initial;
		    padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
    </style>
	
</head>
<body>
<div class="wrapper">
	
 <?php

 $result = mysqli_query($conn, "SELECT * FROM tbl_std_reg where reg_id") 
                or die(mysql_error());
				
 echo "<center>";
 echo "<h2>List of Student Registration </h2>";
 echo "<table border='1' cellpadding='4' cellspacing='0' width='100%'>";
 echo "<tr><th>Registration ID</th><th>First Name</th><th>Last Name</th><th>D.O.B</th><th>E-Mail</th><th>Contact</th><th>School/Collge Name</th><th>Undergoing Course</th><th>Branch/Stream</th><th>Training course applied for</th><th>Reg Amount</th><th>Transaction Number</th><th>How did you hear about us</th></tr>";
 while($row = mysqli_fetch_array($result )) 
 {
 echo "<tr align='center'>";
 echo '<td>' . $row['reg_id'] . '</td>';
 echo '<td>' . $row['f_name'] . '</td>';
 echo '<td>' . $row['l_name'] . '</td>';
 echo '<td>' . $row['dob'] . '</td>';
 echo '<td>' . $row['mail'] . '</td>';
 echo '<td>' . $row['contact'] . '</td>';
 echo '<td>' . $row['sc_name'] . '</td>';
 echo '<td>' . $row['u_course'] . '</td>';
 echo '<td>' . $row['stream'] . '</td>';
 echo '<td>' . $row['t_course'] . '</td>';
 echo '<td>' . $row['reg_amt'] . '</td>';
 echo '<td>' . $row['t_no'] . '</td>';
 echo '<td>' . $row['hear'] . '</td>'; 

 echo "</tr>";
 }

echo "</table>";
?> 

	<p><a href="genpdp.php" target="_blank">Generate PDF</a></p>
    <p align="center" style>Copyright &copy Deepak Corporation. All right reserved.</p>
    
</div>

</body>
</html>

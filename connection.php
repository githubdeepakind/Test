<?php
    $conn = mysqli_connect("localhost", "root", "") or die("Database server can't connect"); 
    $mydb=mysqli_select_db($conn, "aps") or die("cannot select DB");
    if($mydb)
    {
	   // echo "<script>alert('Database Connecting Successfully...')</script>"; 
    }
?>


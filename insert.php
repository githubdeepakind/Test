<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	
	$sql="insert tbl_std_reg(reg_id,f_name,l_name,dob,mail,contact,sc_name,u_course,stream,t_course,reg_amt,t_no,hear) 
	values(NULL,'$fname','$lname','$dob','$email','$contact','$scname','$ucourse','$stream','$tcourse','$reg_amt','$tno','$hear_about')";
	
			if(mysqli_query($conn, $sql))
 		
			{
				echo "<script>alert('You have successfully registered')</script>";
				               
			}
			
			else
			{
		   		echo "<script>alert('Record Not Saved !')</script>";
			}
	
		
}
?>

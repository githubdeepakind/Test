// JavaScript Document
function validate_form( )
{ 
		if ( document.stu.fname.value == "" )
		{
			alert ( "Please Enter Your First Name" );
			document.stu.fname.focus();
			return false;
		}
		if ( document.stu.mname.value == "" )
		{
			alert ( "Please Enter Your Middle Name" );
			document.stu.mname.focus();
			return false;
		}
		if ( document.stu.lname.value == "" )
		{
			alert ( "Please Enter Your Last Name" );
			document.stu.lname.focus();
			return false;
		}
		if((stu.gender[0].checked==false)&&(stu.gender[1].checked==false))
		{
			 alert ( "Please Select Your Gender" );
			 return false;
		}
		if (document.stu.class.value=="select")
		{
			alert("Please Select Your Class");
			document.stu.class.focus();
			return false;
		}
		if (document.stu.email.value=="")
		{
			alert("Please Enter Your Email");
			document.stu.email.focus();
			return false;
		}
	   var a = document.stu.contact.value;
	   if(a=="")
	   {
				alert("please Enter the Contact Number");
				document.stu.contact.focus();
				return false;
	   }
	   if(isNaN(a))
	    {
			alert("Enter the valid Mobile Number(Like :8888698838)");
			document.stu.contact.focus();
			return false;
		}
		if ( document.stu.c_name.value == "" )
		{
			alert ( "Please Enter Your College Name" );
			document.stu.c_name.focus();
			return false;
		}
		if (document.stu.pw.value=="")
		{
			alert("Please Enter Your Password");
			document.stu.pw.focus();
			return false;
		}
		if (document.stu.rpw.value=="")
		{
			alert("Please Re-enter Your Password");
			document.stu.rpw.focus();
			return false;
		}
		if (document.stu.language.value=="select")
		{
			alert("Please Select Your Medium Till 10th");
			document.stu.language.focus();
			return false;
		}
		if (document.stu.pw.value!=document.stu.rpw.value)
		{
				alert("Please Check Your Password 'password doesn't match'");
				return false;
		}
		if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.stu.email.value).focus())  
		{  
				alert("You have entered an invalid email address!")  
				return (false)   
		}  
			
			return true;
		}
		function isNumberKey(evt)
	    {
				  var charCode = (evt.which) ? evt.which : event.keyCode;
				  if (charCode != 45 && charCode > 32 
					&& (charCode < 48 || charCode > 57))
				  {             
						return false;
		
				  }
				        return true;
		}
		function isalphaKey(evt)
		{
				  var charCode = (evt.which) ? evt.which : event.keyCode;
				  if (charCode != 45 && charCode > 32
					&& (charCode < 65 || charCode > 91)&&(charCode < 97 || charCode > 122))
				{             
					return false;
		
				}
				  return true;
		}
		function myFunction()
		{
			var x=document.getElementById("fname");
			var y=document.getElementById("mname");
			var z=document.getElementById("lname");
			var p=document.getElementById("cname");
			x.value=x.value.toUpperCase();
			y.value=y.value.toUpperCase();
			z.value=z.value.toUpperCase();
			p.value=p.value.toUpperCase();
		}



function validateRegForm()
{
	
	// validating First name for non empty & isCharDot(); !!
	if(document.getElementById("fname").value=="")
	{
		alert("Enter Your First name !!");
		document.getElementById("fname").focus();
		return false;
	}
	else
	{
		if(isCharDot(document.getElementById("fname").value) == false)
		{
			alert("First Name Should be Characters Only !!");
			document.getElementById("fname").value = "";
			document.getElementById("fname").focus();
			return false;
		}
	}
	
	// validating Last name for non empty & isCharDot(); !!
	if(document.getElementById("lname").value=="")
	{
		alert("Enter Your Last name !!");
		document.getElementById("lname").focus();
		return false;
	}
	else
	{
		if(isCharDot(document.getElementById("lname").value) == false)
		{
			alert("Last Name Should be Characters Only !!");
			document.getElementById("lname").value = "";
			document.getElementById("lname").focus();
			return false;
		}
	}
	
	// validating  Date of Birth !!
	if(document.getElementById("dob").value=="")
	{
		alert("Enter Your Date of Birth !!");	
		document.getElementById("dob").focus();
		return false;
	}
	
	// validating E-mail for non empty & isEmail(); !!
	if(document.getElementById("email").value=="")
	{
		alert("Enter E-mail ID !! ");
		document.getElementById("email").focus();
		return false;
	}
	else
	{
		if(isEmail(document.getElementById("email").value) == false)
		{
			alert("Enter valid E-mail ID !!");
			document.getElementById("email").value = "";
			document.getElementById("email").focus();
			return false;
		} 
	}
	
	// validating Mobile no for non empty & isNumPhone(); !!
  	if(document.getElementById("contact").value=="" || document.getElementById("contact").value=="" )
  	{
   		alert("Enter Mobile No !!");
   		document.getElementById("contact").focus();
   		return false;
  	}
	else
	{
     	if(isNumPhone(document.getElementById("contact").value) == false || isNum(document.getElementById("contact").value) == false)
     	{
      			alert("Mobile No Should be numbers !!");
      			document.getElementById("contact").value = "";
      			document.getElementById("contact").focus();
      			return false;
    	}    
  	}
	var x=document.getElementById("contact").value;
	if((x.length < 10) || (x.length > 10) ||(!x>=6))
	{
		alert("Your Mobile Number must be 10 Digit !!");
		document.getElementById("contact").focus();
      	return false;
	}
	
	
	// validating school/college name for non empty & isCharDot(); !!
	if(document.getElementById("scname").value=="")
	{
		alert("Enter School/College name !!");
		document.getElementById("scname").focus();
		return false;
	}	
/*	//var x = document.forms["myForm"]["fname"].value;
	var x=document.getElementById("scname").value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	*/
	
	
	// validating Undergoing course name for non empty & isCharDot(); !!
	if(document.getElementById("ucourse").value=="")
	{
		alert("Enter undergoing course !!");
		document.getElementById("ucourse").focus();
		return false;
	}
	
	
	// validating Stream name for non empty & isCharDot(); !!
	if(document.getElementById("stream").value=="")
	{
		alert("Enter Branch/Stream name !!");
		document.getElementById("stream").focus();
		return false;
	}
	
		
	//validating select training course applied for!!
	if(document.getElementById("tcourse").value=="tcourse")
	{
		alert("Select training course applied for !!");
		document.getElementById("tcourse").focus();
		return false;
	}
	
	// validating Reg Ammount !!	
	if(document.getElementById("reg_amt").value=="")
	{
		alert("Enter your Amount !!");	
		document.getElementById("reg_amt").focus();
		return false;
	}
	else
	{
    	if(isNum(document.getElementById("reg_amt").value) == false)
     	{
     		alert("Amount must be Numbers only !!");
			document.getElementById("reg_amt").value = "";
    		document.getElementById("reg_amt").focus();
     		return false;
    	}
		
		
  	}	
	var a=document.getElementById("reg_amt").value;
	if((a< 500) || (a> 50000000))
	{
		alert("Your Amount must be grater than 500!!");
		document.getElementById("reg_amt").value = "";
		document.getElementById("reg_amt").focus();
      	return false;
	}
	
	
	// validating transaction number !!
  	if(document.getElementById("tno").value=="")
  	{
   		alert("Enter transaction number !!");
   		document.getElementById("tno").focus();
   		return false;
  	}
	
	//validating select How did you hear about us!!
	if(document.getElementById("hear_about").value=="hear_about")
	{
		alert("Select how did you hear about us !!");
		document.getElementById("hear_about").focus();
		return false;
	}
	
	
	
}
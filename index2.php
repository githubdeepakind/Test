<!DOCTYPE html>
<html lang="en">  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Deepak">
    <link rel="shortcut icon" href="ico/logo.ico">

    <title>Apex Public School</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.theme.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- My external link file -->
    <link rel="stylesheet" href="css/mystyle.css">
	  <script type="text/javascript" src="registration.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
  </head>

  <body>
  <!--Fixed Top Navigation Menu-->

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <a class="navbar-brand" href=""><span style="font-family: Roman; font-size: 35px;">Apex Public School</span></a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target  =".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">About</a></li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Course<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li ><a href="#">MCA</a></li>
                    <li class="divider"></li>
                    <li><a href="#">MBA</a></li>
                    <li class="divider"></li>
                    <li><a href="#">BCA</a></li>
                    <li class="divider"></li>
                    <li><a href="#">BBA</a></li>                  
                  </ul>
              </li>
              <li><a href="#">Help?</a></li>
          </ul>        
        </div>
      </div>  
    </div>
  <!--End Fixed Top Navigation Menu-------------------------------->


  <!--Registration content-->
  <form name="reg" method="POST" action="" onSubmit="return validateRegForm()">
    <div class="container">

      <div class="jumbotron">
       
        <h2 style="font-family:Baskerville Old Face; font-size:42px;">Student Registration Form</h2>                   
        <fieldset class="col-md-12">      
          <legend>All field are mandatory</legend>
          <center>
            <table class="table table-dark" cellspacing="1" cellpadding="10">
            <tbody>
              <tr>
                <th>Registration Id : </th>
                <td colspan="4"><input type="text" name="reg_id" style="width:220px; text-align:center; font-size:20px; font-family:Modern No. 20; color:Green" readonly disabled value="<?php echo $data_reg['reg_id']+1;?>"> <span style="color:red; font-family:bold;">&nbsp;&nbsp;&nbsp;Note:</span> <span>This is System generated id</span></td>                
              </tr>

              <tr>  
                <th width="220px">First Name: </th>
                <td><input type="text" name="fname" id="fname" autofocus style="width:220px" tabindex="1" placeholder="Enter your name" title="Enter your first name!" onChange="document.getElementById('fname').value=trim(this.value);"></td>                
                <th width="220px">Last Name: </th>
                <td><input type="text" name="lname" id="lname" style="width:220px" tabindex="2" placeholder="Enter your last name" title="Enter your last name!" ></td>
              </tr>
              <tr>  
                <th>D.O.B: </th>
                <td><input type="date" id="dob" name="dob" title="Enter Your Date of Birth!" style="width:220px" tabindex="3" ></td>                
                <th>E-Mail: </th>
                <td> <input type="text" name="email" id="email" style="width:220px" tabindex="4" placeholder="example@gmail.com" title="Enter your E-Mail id!" ></td>
              </tr>
              <tr>  
                <th>Contact Number: </th>
                <td><input type="text" name="contact" id="contact" maxlength="10" style="width:220px" tabindex="5" placeholder="e.g; 9000090000" title="Enter your contact number!" ></td>                
                <th>School/College Name: </th>
                <td><input type="text" name="scname" id="scname" style="width:220px" tabindex="6" placeholder="Enter school/college name" title="Enter school/college name!"></td>
              </tr>
              <tr>  
                <th>Undergoing course: </th>
                <td><input type="text" name="ucourse" id="ucourse" style="width:220px" tabindex="7" placeholder="Enter your undergoing course" title="Enter your undergoing course!" ></td>                
                <th>Branch/stream: </th>
                <td><input type="text" name="stream" id="stream" style="width:220px" tabindex="8" placeholder="Enter your Branch/stream" title="Enter your stream!" ></td>
              </tr>
              <tr>  
                <th>Training course applied for: </th>
                <td>
                <select id="tcourse" name="tcourse" style="width:220px" tabindex="9" title="Choose training course you applied!" >
                    <option value="tcourse" selected>Select your course</option>
                    <option value="C">C Programming</option>
                    <option value="CPP">C++</option>
                    <option value="Java">Java</option>
                    <option value="PHP">PHP</option>   
                    <option value="HTML">HTML</option>
                    <option value="CSS">CSS</option>
                    <option value="JS">JavaScript</option>
                    <option value="JS">Others</option>                 
                  </select>
                </td>                
                <th>Registration Amount: </th>
                <td><input type="text" name="reg_amt" id="reg_amt" style="width:220px" tabindex="10" placeholder="Enter your Amount" title="Enter your Amount!" ></td>
              </tr>
              <tr>  
                <th>Transaction Number: </th>
                <td><input type="text" name="tno" id="tno" style="width:220px" tabindex="11" placeholder="e.g; TSN0101" title="Enter your transaction no!" ></td>                
                <th>How did you hear about us: </th>
                <td>
                 <select id="hear_about" name="hear_about" style="width:220px" tabindex="12" title="Choose how did you hear about us!" >
                    <option value="hear_about" selected>Select anyone</option>
                    <option value="News Paper">From News Paper</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Google">Google</option>
                    <option value="Any Other">Any Other</option>                    
                  </select>
                </td>
              </tr>
            </tbody>
            </table>
          </center>                 
        </fieldset> 
        
          <input type="reset" class="btn btn-danger" value="Reset">
          <input type="submit" name="submit" id="submit" class="btn btn-success" value="Submit">    
          <p><br><a href="records.php" target="_blank">Veiw Records</a></span></p>

        
        <div class="clearfix"></div>
        </div>
            


    <!--feture content-->
      <div class="row">

          <div class="col-sm-4 fbox">
          <span class="glyphicon glyphicon-user"> </span>
          <h3>About APS</h3>
          <p>varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur varius blandit sit amet non magna.</p>
          <a  href="#" class="btn btn-info btn-sm">Read more...</a>
        </div>

       
        <div class="col-sm-4 fbox">
           <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          <h3>Conect with Friend</h3>
          <p>varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur varius blandit sit amet non magna.</p>
          <a  href="#" class="btn btn-info btn-sm">Read more...</a>
        </div>

        
        <div class="col-sm-4 fbox" >
          <span class="glyphicon glyphicon-tint" aria-hidden="true"></span>
          <h3>Real Magic</h3>
          <p>varius blandit sit amet non magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur varius blandit sit amet non magna.</p>
          <a  href="#" class="btn btn-info btn-sm">Read more...</a>
        </div>

      </div>
      <!--feture content End-->







      </div>                  
    </div>
    
  </form>
  <!--END Registration content-------------------------------------->


  
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
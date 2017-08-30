<?php 
session_start();
	 if(isset($_SESSION['name'])) 
	 {
	 	header("Location: /studentPortel/");
	 }else {
	 	unset($_SESSION['name']);
	 	session_destroy();
	 }
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admin Login Form</title>
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #2F73A2;
	
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.leftMesg {
	position: absolute;
	top: 40%;
	left: 20%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:500px;
	background-color: #2A2739;
	border-radius: 5px;
	padding: 20px;
	opacity: 0.6;
    filter: alpha(opacity=60);
     box-shadow: 10px 10px 5px #373650;
     color: #FFFFFF;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }


    </style>

</head>

<body>
  <div class="leftMesg">
 	<center>
 		<h1>ISP University</h1> 
 		<hr>
 		<h2>Student Area</h2> 
 		<hr>
 		<p>Enter your Username and Password</p>
 	</center>	
  </div> 	
  <div class="login">
	<h1>Login</h1>
    <form method="post" action="services/login.php">
    	<div class="form-group">
          <div class="col-sm-12">
              <input type="text" class="form-control" name="u" placeholder="User name" required>
              <br>
          </div>
      	</div>
      	<div class="form-group">
          <div class="col-sm-12">
              <input type="password" class="form-control" name="p" placeholder="Password" required>
              <br>
          </div>
      	</div>
      	<div class="form-group">
          <div class="col-sm-12">
                <button type="submit" class="btn btn-primary btn-block btn-large">Let me in</button>
          </div>
      	</div>
    </form>
 </div>
</body>
</html>

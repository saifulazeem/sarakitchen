<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="src/css/stylesheet.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
<script type="text/javascript">
        function codeAddress() {
           
           document.getElementById("logsf").style.border = "3px solid";
           document.getElementById("logsf").style.borderLeft = "hidden";
           document.getElementById("logsf").style.borderRight = "hidden";
           document.getElementById("logsf").style.borderTop= "hidden";

           document.getElementById("hm").style.border = "none";
           document.getElementById("hm").style.borderLeft = "hidden";
           document.getElementById("hm").style.borderRight = "hidden";
           document.getElementById("hm").style.borderTop= "hidden";

           document.getElementById("rp").style.border = "none";
           document.getElementById("rp").style.borderLeft = "hidden";
           document.getElementById("rp").style.borderRight = "hidden";
           document.getElementById("rp").style.borderTop= "hidden";

           document.getElementById("ct").style.border = "none";
           document.getElementById("ct").style.borderLeft = "hidden";
           document.getElementById("ct").style.borderRight = "hidden";
           document.getElementById("ct").style.borderTop= "hidden";

           document.getElementById("abts").style.border = "none";
           document.getElementById("abts").style.borderLeft = "hidden";
           document.getElementById("abts").style.borderRight = "hidden";
           document.getElementById("abts").style.borderTop= "hidden";

           document.getElementById("mfoot").style.bottom= "0";
           document.getElementById("mfoot").style.position= "absolute";
           
          
        }
        window.onload = codeAddress;
</script>


</head>
<body class="bg" style="background-image: url(src/images/food.jpg)" >
<?php include("header.php"); ?>
<div class="container page-body">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12"></div>
		<div class="login-form col-lg-4 col-md-4 col-sm-12 login-container ">
			<form action="index.php" method="POST">
			  <div  class="imgcontainer">
			    <img src="src/images/logo.png" alt="Avatar" class="avatar" width=150 height=70>
			  </div>
			  <br>
			  <div class="container">
<!-- 			    <label for="uname"><b>Email</b></label><br> -->
			    <input class="form-control" type="text" placeholder="Enter Email" name="uname" required>
			    <br>
<!-- 			    <label for="psw"><b>Password</b></label><br> -->
			    <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
			    <br>
			    <button class="form-control btn-primary" type="submit" name="login">Login</button>
			    <br>
			    <a href="#daard.php">Forgot Password?</a> 
			  </div>

			</form>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12"></div>
	</div>
	
</div>





<br>
<br>

<?php include("footer.php"); ?>
    
</body>
</html>
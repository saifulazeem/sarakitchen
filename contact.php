<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
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
           
           document.getElementById("ct").style.border = "3px solid";
           document.getElementById("ct").style.borderLeft = "hidden";
           document.getElementById("ct").style.borderRight = "hidden";
           document.getElementById("ct").style.borderTop= "hidden";

           document.getElementById("hm").style.border = "none";
           document.getElementById("hm").style.borderLeft = "hidden";
           document.getElementById("hm").style.borderRight = "hidden";
           document.getElementById("hm").style.borderTop= "hidden";

           document.getElementById("rp").style.border = "none";
           document.getElementById("rp").style.borderLeft = "hidden";
           document.getElementById("rp").style.borderRight = "hidden";
           document.getElementById("rp").style.borderTop= "hidden";

           document.getElementById("abts").style.border = "none";
           document.getElementById("abts").style.borderLeft = "hidden";
           document.getElementById("abts").style.borderRight = "hidden";
           document.getElementById("abts").style.borderTop= "hidden";

           document.getElementById("logsf").style.border = "none";
           document.getElementById("logsf").style.borderLeft = "hidden";
           document.getElementById("logsf").style.borderRight = "hidden";
           document.getElementById("logsf").style.borderTop= "hidden";
          
        }
        window.onload = codeAddress;
</script>

</head>
<body >
<?php include("header.php"); ?>
<div class="fluid-container" id="head-img">
    <img id="bgs" src="src/images/cnt.jpeg" alt="food" >
</div>
<div class="container page-body">
    <h1>Contact US</h1>
    <div class="row">
    <form >
        <input class="form-control" type="email" name="u_email" placeholder="Email Address Here..." required>
        <br>
         <input class="form-control" type="text" name="u_subject" placeholder="Subject Here..." required>
         <br>
         <textarea style="height:200px" class="form-control" type="text" name="u_message" placeholder="Your Message.." required ></textarea>
        <br>
          <input style=" width: 30%; margin-left: 33%;" class="btn btn-primary" type="submit" name="send_message" value="Send">
    </form>
    </div>
</div>





<br>
<br>
<?php include("footer.php"); ?>
    
</body>
</html>
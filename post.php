<?php
// session_start();

// if (isset($_SESSION["loged_user"]))
//  {
//   $val=$_SESSION["loged_user"];
// }
// else
// {
//   header("location:index.php");
// }
// if(isset($_GET["logout"]))
// {
//   session_destroy();
//   header("location:index.php");
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>New Post</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="src/css/stylesheet.css" >
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="fluid-container">
    <div class="row">
        <div class='col-lg-3 col-md-3 col-sm-12' style="background-color: #667eea;">
            <div class="container" style="color: #fff;">

                <div class="row" style="text-align: center; margin-top:50px;" >
                    <!-- <div class="col-lg-4 col-md-4 col-sm-12"></div> -->
                    <a href="index.php"><img style=" border-radius: 50%; width:150px; height: 150px; " src="src/images/profile_pic.jpg" alt="Avatar"></a>
                    <!-- <div class="col-1"></div> -->    
                </div>
                <br>
                <div class="row" style="text-align: center;">
                    <h3>M.SAIF UL AZEEM ABBASI</h3>
                    <h4>Admin</h4>
                </div>
                <br>
                <div class="row">
                        <div class="navigation">
                            <ul>
                            	<li><a style="background-color: #2d2d2d;" href="contact.php">Dashboard</a></li>
                            	 <hr class="new2">
                                <li><a  href="post.php">New Post</a></li>
                                <hr class="new2">
                                <li><a  href="#register-complain.php">Delete Post</a></li>
                                <hr class="new2">
                                <li><a href="#complain-status.php">Edit Post</a></li>
                                <hr class="new2">
                                <li><a href="#customer-list.php">Messages</a></li>
                                <hr class="new2">
                                	<form>
                                		<input class="btn btn-secondary" type="submit" name="logout" value="Logout">
                                	</form>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12" style=" margin-top:100px;">
        <div class="row">
            <div class="col-lg-4 col-md-9 col-sm-12"></div>
            <div class="col-lg-4 col-md-9 col-sm-12">
            <form action="admin.php" method="POST" enctype="multipart/form-data">
                <input class="form-control" type="text" name="title" placeholder="Recipie Title  Here..." required>
                <br>
                <label for="input Video">Picture*</label>
                <input class="form-control" type="file" name="image"  required>
                <br>
                <label for="input Video">Video</label>
                <br>
                <input class="form-control" type="file" name="video">
                <br>
                <textarea style="height:200px" class="form-control" type="text" name="descriptions" placeholder="Description.." required ></textarea>
                <br>
                <input style=" width: 30%; margin-left: 33%;" class="btn btn-primary" type="submit" name="send_message" value="PUBLISH">
            </form>
            </div>
            <div class="col-lg-4 col-md-9 col-sm-12"></div>
        </div> 
        </div>
    </div>
    <br>
<br>

<?php include("footer.php"); ?>
</div>

</body>
</html>
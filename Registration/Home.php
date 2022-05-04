<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="register.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
<?php include('header.php') ?>
<div class="header" style="margin-top: 100px">
	<h2>Home Page</h2>
</div>
<div class="content" style="margin-bottom: 100px">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	

        <center><p>Welcome <strong><?php echo $_SESSION['username']."<br>" ?></strong> we hope to serve you better.</p></center> <br>
        <center><h4>This is the page for our most demanding lecture on HCIA R&S, enjoy your learning!!!</h4></center>
        <center>
        <video controls height="250px" width="300px">
            <source src="video/zoom_0.mp4"  type="video/mp4">
        </video> 
        <video controls height="250px" width="300px">
            <source src="video/zoom_0.mp4"  type="video/mp4">
        </video>
        </center>
    
        <button style="background-color: green; color:white" type="submit" class="btn" name="login_user"><a href="home.php?logout='1'" style="color: white; text-decoration:none">logout</a></button>
    <?php endif ?>
</div>
<?php include('footer.php') ?>	
</body>
</html>
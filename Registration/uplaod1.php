<?php
  // Create database connection
  $db = mysqli_connect('localhost', 'root', '', 'project');

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  //	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "uploads/".basename($image);

  	$sql = "INSERT INTO paymentproofs (image,) VALUES ('','$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM paymentproofs");
?>




<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <center>
    <form  method="POST"action="uplaod1.php" enctype="multipart/form-data" style="padding-top:70px">
            
        <div>
        <input type="file" name="image">
        </div>
       <div>  <br>
       <button type="submit" name="upload"> Submit</button>
       </div>
    </form>
    </center>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>


<body>
<div id="">
  
  <center>
  <form method="POST" action="uplaod1.php" enctype="multipart/form-data">
  	<div>
  	  <input type="file" name="image">
  	</div> <br>
  	<div>
  		<button type="submit" name="upload">submit</button>
  	</div>
  </form>
  </center>
</div>
</body>
</html>
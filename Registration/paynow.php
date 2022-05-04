<?php

session_start();
  // Create database connection
  $db = mysqli_connect('localhost', 'root', '', 'project');

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	
    echo '<script> alert("Upload  succesful!, go to login page")</script>';
    // Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	//$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

  	// image file directory
  	$target = "uploads/".basename($image);

  	$sql = "INSERT INTO paymentproofs (image,) VALUES ('','$image',)";
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
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>


<body>
<?php include('header.php') ?>
<div id="">
<center>
<h1 style="margin-top: 150px">
            <p>Please Upload your proof of payment Here, <br> </p>
        </h1>
            <h4>we will communicate you within 24hrs</h4>

            <p>the total amount you are paying for your oder is: <?php echo $_SESSION['totalprice']."<br>" ?></p>
        
        
  		<form action="paynow.php" method="POST" enctype="multipart/form-data" style="margin-botton: 300px">
                Select image to upload:
                <input type="file" name="image" id="" accept="image/*" onchange="loadFile(event)">
            <script >
            var loadFile = function(event) {
            var image = document.getElementById('output');
            image.src = URL.createObjectURL(event.target.files[0]);
            };
            </script> <br> <br>
            <img id="output" width="200" /> <br>
         
            <button type="submit" name="upload" style="margin-bottom: 100px;background-color: green;color: white; border-radius: 30px;">Submit</button>
    	</form>

</center>
</div>
<?php include('footer.php') ?>
</body>
</html>
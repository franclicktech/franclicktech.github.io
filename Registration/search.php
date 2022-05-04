
<?php
$db = mysqli_connect('localhost', 'root', '', 'project');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
</head>
<body>
<?php include('header.php') ?>
    <center style="margin-top: 100px">
    <h3 style="margin-bottom:20px">Search results...</h3>
    <p>the following usernames are found in the database <br> based on your search command.</p>
    </center>
<p style="margin-bottom: 100px; margin-left: 100px">
<?php

$search = $_POST['search'];

$sql = "select * from users where username like '%$search%'";
$result = $db->query($sql);

if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo $row["username"]."<br>";
    }
}else{
    echo "no records found";
}
$db->close();

?>

</p>
<?php include('footer.php') ?>
</body>
</html>

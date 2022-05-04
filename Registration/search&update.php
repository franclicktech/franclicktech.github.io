<?php
$db = mysqli_connect('localhost', 'root', '', 'project');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
     <center>
     <h3 style="margin-bottom:20px">Search results...</h3>

<?php
if(isset($_POST['searchdb']))
{
    $id =$_POST['id'];

    $qeury = "select * from users where id = '$id'";
    $query_run= mysqli_query($db,$qeury);
    while($row =mysqli_fetch_array($query_run))
    {
        ?>
          <form action="search&update.php" method="POST">

        <input type="hidden" class="inputvalues" value="<?php echo $row['id']?>" name="id"><br><br>
       Firstnmae: <input type="text" class="inputvalues" value="<?php echo $row['firstname']?>" name="firstname"><br><br>
        lastname:<input type="text" class="inputvalues" value="<?php echo $row['lastname']?>" name="lastname"><br><br>
        username:<input type="text" class="inputvalues" value="<?php echo $row['username']?>" name="username"><br><br>
        email:<input type="text" class="inputvalues" value="<?php echo $row['email']?>" name="email"><br><br>
        
       
        
        <input type="submit" name="update"  value="update data">


          </form>
        
       <?php
    }
}
?>
<?php
if(isset($_POST['update']))
{   echo 'database updated';

    $firstname= $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $username =$_POST['username'];
    $email =$_POST['email'];  
 
    

    $qeury ="UPDATE `users` SET firstname= '$_POST[firstname]',lastname= '$_POST[lastname]',
            username='$_POST[username]',email ='$_POST[email]',
            email ='$_POST[email]'
            where id='$_POST[id]'";
    $query_run = mysqli_query($db,$qeury);
    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data updated")</script';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not updated")</script';  
    }
}
?>
     </center>
</body>
</html>



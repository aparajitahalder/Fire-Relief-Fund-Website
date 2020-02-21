<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `bank` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: index2.php");
         }else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='donate.php'>Donate</a></div>";
 }
    }else{
?>
<div class="form">
<p>Make a positive change</p>
<form action="" method="post" name="login">
<input type="text" name="username" placeholder="card no." required />
<input type="password" name="password" placeholder="cvc" required /><br><br>
<input name="submit" type="submit" value="PAY" />
</form>
</div>
<?php } ?>
</body>
</html>

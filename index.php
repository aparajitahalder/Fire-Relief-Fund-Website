<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" />
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>Thankyou for showing your interest.</p>
<p>Even your small help is appreciated.</p>
<p>Click on DONATE to help us fight the tragedy!</p>
<p><a href="dashboard.php">About Us</a></p>
<a href="logout.php">Logout</a>
<p><a href="donate.php">Donate</a></p>
</div>
</body>
</html>
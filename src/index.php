<?php
ob_start();
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboards</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />
</div>
</body>
</html>

<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welkom <?php echo $_SESSION['username']; ?>!</p>
<p>Dit is de home pagina van de applicatie</p>

<a href="logout.php">Logout</a>
</div>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $code = stripslashes($_REQUEST['code']);
 $code = mysqli_real_escape_string($con,$code);
 $type = "";
 $code_gb = "54321";
 $code_bh = "12345";
 if ($code == $code_bh){
        $type = "beheerder";
 } 
 if($code == $code_gb){
        $type = "gebruiker";
 } 
 if($type == ""){
        echo "<div class='form'>
        <h3>Code verkeerd</h3>
        <br/>Klik hier voor <a href='registration'>nieuwe poging</a></div>";
        exit;        
 }
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT INTO `users` (username, password, email, trn_date, Type)
VALUES ('$username', '".md5($password)."', '$email','$trn_date','$type')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Succesvol geregistreerd</h3>
<br/>Klik hier voor <a href='login'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registratie</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Gebruikersnaam" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Wachtwoord" required />
<input type="text" name="code" placeholder="Voer hier uw code in" required />
<input type="submit" name="submit" value="Registreer" />
</form>
</div>
<?php } ?>
</body>
</html>
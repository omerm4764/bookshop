<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="all">
<?php
include ('header.html');
require('RegisterData/Connect_db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$FullName = stripslashes($_REQUEST['FullName']);
        $DOB = stripslashes($_REQUEST['DOB']);
        $username = stripslashes($_REQUEST['username']);
        $email = stripslashes($_REQUEST['email']);
        $password = stripslashes($_REQUEST['password']);

//escapes special characters in a string
        $FullName = mysqli_real_escape_string($con,$FullName);
        $DOB = mysqli_real_escape_string($con,$DOB);
	$username = mysqli_real_escape_string($con,$username); 
	$email = mysqli_real_escape_string($con,$email);
	$password = mysqli_real_escape_string($con,$password);
	
        $trn_date = date("Y-m-d H:i:s");
        
        
        $query = "INSERT into `users` (FullName, DOB, username, email, password, trn_date)
VALUES ('$FullName', '$DOB', '$username', '$email', '$password', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="register" action="" method="post">
<input type="text" name="FullName" placeholder="FullName" required />
<input type="date" name="DOB" placeholder="yyyy-mm-d" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php 
} ?>
<?php include ('footer.html');?>
</div>

</body>
</html>





<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Book Shop</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div id="all">
<?php
include ('header.html');
require('RegisterData/Connect_db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
	$authorname = stripslashes($_REQUEST['authorname']);
        $DOB = stripslashes($_REQUEST['DOB']);
        $username = stripslashes($_REQUEST['username']);
        $email = stripslashes($_REQUEST['email']);
        $password = stripslashes($_REQUEST['password']);

//escapes special characters in a string
        $authorname = mysqli_real_escape_string($con,$authorname);
        $DOB = mysqli_real_escape_string($con,$DOB);
	$username = mysqli_real_escape_string($con,$username); 
	$email = mysqli_real_escape_string($con,$email);
	$password = mysqli_real_escape_string($con,$password);
	
        $query = "INSERT into `authors` (authorname, DOB, username, email, password)
VALUES ('$authorname', '$DOB', '$username', '$email', '$password')";
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
<input type="text" name="authorname" placeholder="Authorname" required />
<input type="date" name="DOB" placeholder="DOB" required />
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
    <?php include ('footer.html');?>
</html>


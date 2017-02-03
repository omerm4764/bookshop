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
?>
<?php


session_start(); //starts the session where user login is stored
session_destroy(); //destroys all data stored in the session
echo '<h1> you have now logged out!</h1>'; //tells user that they have logged out and prompts them to return to the homepage
echo 'click <a href="index.php">here!</a> to return home';
 
 ?>
 <?php include ('footer.html');?>


</div>
</body>
</html>

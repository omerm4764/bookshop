<?php
 
$username = $_POST["username"];
$email = $_POST["email"];
$message = $_POST["message"];
$reciever = "OmerM4764@colchester.ac.uk"; //Buraya iletişim formunun gönderileceği mail adresini yazıyoruz.
$subject = "Contact Form";
$ipadres = $_SERVER['REMOTE_ADDR'];
 
if (($username=="") or ($email=="") or ($message=="")) {
echo "Please fill the all the fields.";
}
else
{
$messages.="Contact Form Message<br/><br/>";
$messages.="User Name: ".$username."<br/>";
$messages.="E-Mail: ".$email."<br/>";
$messages.="Message: ".$message."<br/>";
$messages.="Ip Adres: ".$ipadres."<br/>";
 
$sendmessage=mail($reciever, $subject, $messages, "Content-type: text/html; charset=utf-8\r\n");
if ($sendmessage)
{
echo ("Thanks. Your message recieved. Go to Home Page <br><a href=index.php>Click Here</a>");
}
else
{
echo ("Error occured! Try again. Go to Contact Page <br><a href=contact.html>Click Here</a>");
}
}
?>

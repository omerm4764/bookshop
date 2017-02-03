<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ebook Shop</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="all">
 
 <?php include('header.html'); ?>

<form name="contactform" method="POST" action="contact.php">

User Name: <input type="text" name="username"><br/>

E-Mail: <input type="text" name="email"><br/>

Message: <textarea rows="5" name="message" cols="30"></textarea><br/>

<input type="submit" name="button" value="Send">

</form>
    
    <h3>My Google Maps </h3>
    <div id="map">
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCg7XOmrP95rA53kK8Ct5BHncWez7JxSFE&callback=initMap">
    </script>
     </div> 
     
<?php include ('footer.html');?>
     
     </div>
</body>
</html>
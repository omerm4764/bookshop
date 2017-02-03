<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Book Shop</title>
        
<link href="CSS/style.css" rel="stylesheet" type="text/css">


    </head>
    <body>
    <div id="all">
    
    <?php
//include auth.php file on all secure pages
include ('header.html');

?>
        <p><H2>Date: <?php
            // php to show current date
            //echo date('d / m / y');
            echo date("l j F Y");
            ?>
        </H2></p>

    <form action="login.php" method="post">
        <!--Move login form into a table in the center of the page -->
        <table align ="center" width = 30%>
            <tr>
                <td>Username:</td><td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password: </td><td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td><td align = "center" ><input type="submit"></td>
            </tr>
        </table>

    </form>
    <div id="pic">
    <img src="product-images/ajax.jpg"  class="aw-zoom"  />
    <img src="product-images/dummies.jpg"  class="aw-zoom" />
    <img src="product-images/php.jpg"  class="aw-zoom"  />
    </div>
    
<?php include ('footer.html');?>
</div>
</body>

</html>




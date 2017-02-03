<!DOCTYPE html>

<html>
    <head>
        
    </head>
    <body>

        <?php

//include auth.php file on all secure pages
include ('header.html');

        $q = intval($_GET['q']);
//incorporate the MySQL connection script
        require 'RegisterData/connect_db.php';
        $sql = "SELECT * FROM authors WHERE authorid = '" . $q . "'";
        $result = mysqli_query($con, $sql);

        echo "<table>
<tr>
<th>Authorname</th>
<th>email</th>
<th>DOB</th>
</tr>";
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['authorname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['DOB'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($con);
        ?>
    </body><?php include ('footer.html');?>
</html>


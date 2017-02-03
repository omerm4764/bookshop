<!DOCTYPE html>
<!--
form for password and usernames
connect to the database
query into the database
find the user
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 
        <?php
        //incorporate the MySQL connection script
        require 'RegisterData/connect_db.php';
        //Pings a server connection,
        //or tries to reconnect if the connection has gone down 
        if (mysqli_ping($con)) {
            echo '<p>MySQL Server' . mysqli_get_server_info($con)
            . ' on ' . mysqli_get_host_info($con) . '</p>';
        }
// define variables and set to empty values
        $emptyErr = "";
        $username = $password = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["username"]) || empty($_POST["password"])) {
                $emptyErr = "<P><a href=index.php>Username and Password are required</a></P>";
                echo "<BR>" . $emptyErr;
            } else {
                $username = test_input($_POST["username"]);
                $password = test_input($_POST["password"]);
                $sql = sprintf("Select username, password"
                        . " from users where password = '%s' AND username = '%s'"
                        , mysqli_real_escape_string($con, $password)
                        , mysqli_real_escape_string($con, $username));


                $result = mysqli_query($con, $sql);
                //Gets the number of rows in a result
                if (mysqli_num_rows($result) > 0) {
                    //Fetch a result row as an associative array
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo 
                        '<tr> <td>Welcome </td><td>' . $row["username"] . '</td></tr>'
                        .'<P><a href=EBook.php><h3>View Books</h3></a></P>';
                    }
                } else {
                    echo "<P><a href=index.php>Incorrect Username or Password, Try again</a></P>";
                }
            }
        }

        function test_input($data) {
            //Strip whitespace (or other characters) from the beginning and end of a string
            $data = trim($data);
            //Un-quotes a quoted string
            $data = stripslashes($data);
            //Convert special characters to HTML entities
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        
    </body>
</html>

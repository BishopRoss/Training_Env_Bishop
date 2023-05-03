<html>
    <head>
        <title>PHP Test</test>
    </head>
    <body>
        <?php
        $con = mysqli_connect("localhost", "root",'', "testdb") or die("Error connecting to MYSQL server.");

        $sql="UPDATE contact SET age=24 WHERE name like 'Bishop' and id=1";

        mysqli_query($con,$sql) or die('Error:' .mysqli_error($con));

        echo"<br>";

        printf("Updated records: %d\n", mysqli_affected_rows($con));

        mysqli_close($con);
        ?>
    </body>
</html>


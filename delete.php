<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?php
        $con = mysqli_connect("localhost", "root",'', "testdb") or die("Error connecting to MYSQL server.");

        $sql="DELETE FROM Contact WHERE id=100";

        mysqli_query($con,$sql) or die('Error:'.mysqli_error($con));

        echo"<br>";

        if(mysqli_affected_rows($con) >0)
        {
            printf("Deleted records: %d\n", mysqli_affected_rows($con));
        }

        else
        {
            printf("No records deleted");
        }

        mysqli_close($con);
        ?>
    </body>
</html>
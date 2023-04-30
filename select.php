<html>
    <head>
    <title>PHP Test</test>
    </head>
    <body>
        <?php
        Print"Connecting...";//like echo print is also used to output a string
        echo "<br>";
        $con = mysqli_connect("localhost","root","mysql");
        if(!$con)
        {
            die('Could not connect:'.mysqli_error());
        }
        mysqli_select_db($con, "testdb");
        $result = mysqli_query($con, "SELECT * FROM contact");
        while($row = mysqli_fetch_array($result))
        {
            echo $row['name']." - ".$row['email']." - ".$row['age'];
            echo "<br>";
        }
        mysqli_close($con);
        ?>
    </body>
</html>
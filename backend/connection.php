<!-- this code connect the page to data base -->
<?php
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $db_name = "tp";

    $connect = new mysqli($serverName, $username, $password, $db_name);

    if ($connect -> connect_error)
    {
        echo "Failed to connect to database: ". $connect -> connect_error;
        exit();
    }
?>
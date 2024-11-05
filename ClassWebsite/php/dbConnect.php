<?php

/* Once this file is created, you can test it by navigating to the URL/dbConnect.php */

/* Variables for the database connection parameters */
$dbServername = "128.198.162.191";
$dbUsername = "infs3800";
$dbPassword = "webdev";
$dbName = "infs3800";

/* Create the connection string that uses the variables to connect to the database */
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

/* Provide feedback if the connection was successful */
if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connection successful!";
}

?>

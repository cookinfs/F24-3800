<?php
    // Data connection
    require_once("dbConnect.php");

    // If the Delete Button is pressed, do this thing
    if (isset($_GET['Del']))
    {
        $id = $_GET['Del'];
        mysqli_query($conn, "delete from contacts where id=$id");
    }

    // Redirect the the reports page
    header("Location: ../reports.php");

?>
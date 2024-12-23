<?php

/* This line calls the dbConnect.php connection file */
require_once("dbConnect.php");

/* Grab the page variables to POST the information to the database */
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$comments = $_POST['comments'];

/* Create a variable that contains the SQL syntax necessary to post the records */
/* $query = "INSERT INTO contacts (firstName, lastName, email, comment) VALUES ('$firstName', '$lastName', '$email', '$comments');";*/

$query = "INSERT INTO contacts (firstName, lastName, email, comment) VALUES (?,?,?,?)";

/* Initial a statement to handle special characters */
$stmt = mysqli_prepare($conn, $query);

/* Bind the parameters to the statement, specifying types for the inputs */
mysqli_stmt_bind_param($stmt, "ssss", $firstName, $lastName, $email, $comments);

/* Execute the statement */
mysqli_stmt_execute($stmt);

/* Close the statement */
mysqli_stmt_close($stmt);


/* Use the database connection and query to push the data to the database */
/* mysqli_query($conn, $query); */

/* Redirect the user to our homepage when they've submitted records */
header("Location: ../index.html?signup=success");
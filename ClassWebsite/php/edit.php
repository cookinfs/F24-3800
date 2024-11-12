<?php
include_once "dbConnect.php";

// Check if an ID was provided
if (isset($_GET['Edit'])) {
    $ID = $_GET['Edit'];
    $query = "SELECT * FROM contacts WHERE id = '$ID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
}
if (isset($_POST['update'])) {
    $ID = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    
    // Update the record in the database
    $updateQuery = "UPDATE contacts SET firstName='$firstName', lastName='$lastName', email='$email', comment='$comment' WHERE id='$ID'";
    mysqli_query($conn, $updateQuery);
    header("Location: ../reports.php"); // Redirect back to reports page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Contact</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<h2>Edit Contact</h2>
<form action="edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <label>First Name</label>
    <input type="text" name="firstName" value="<?php echo $row['firstName']; ?>" required>
    <label>Last Name</label>
    <input type="text" name="lastName" value="<?php echo $row['lastName']; ?>" required>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
    <label>Comment</label>
    <input type="text" name="comment" value="<?php echo $row['comment']; ?>" required>
    <button type="submit" name="update">Update</button>
</form>
</body>
</html>

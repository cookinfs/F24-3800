<!-- Connection parameters for the database -->
 <?php
    include_once "php/dbConnect.php";
    $query = "SELECT * FROM contacts";
    $results = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPORTS</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Bootstrap Icons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">

</head>
<body>
    <div class="wrapper">
        <!-- Navigation Buttons-->
        <nav class="main-nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="pictures.html">Picture Gallery</a></li>
                <li><a href="contacts.php">Contact</a></li>
                <li><a href="reports.php">Reports</a></li>
            </ul>
        </nav>
  
        <!-- Top section with Image-->
        <section class="top-container">
            <header class="showcase">
            <h1>Contacts Table Report...</h1>
            </header>
        </section>
        
    <!-- Table for displaying database information -->
    <!-- Using a Bootstrap table design -->

    <section>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th>DELETE</th>
                </tr>
            </thead>


        <!-- Retrieve the data from the database -->
        <?php
            while ($row = mysqli_fetch_assoc($results))
            {
                $ID = $row['id'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $email = $row['email'];
                $comment = $row['comment'];
        ?>
            <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $firstName ?></td>
                <td><?php echo $lastName ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $comment ?></td>

                <!-- Add the delete and edit buttons -->
                 <td>
                    <a href="php/edit.php?Edit=<?php echo $row['id']?>" class="bi bi-pencil-square"></a>
                    <a href="php/delete.php?Del=<?php echo $row['id']?>" class="bi bi-trash"></a>
                 </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </section>




        <!-- Footer-->
        <footer>
            <p>INFS-3800</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
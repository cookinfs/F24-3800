<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFS 3800</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/contactStyles.css">
    <!-- Bootstrap Icons Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<body>
    <div class="wrapper">
        <!-- Navigation Buttons-->
        <nav class="main-nav">
            <ul>
                <li><a href="index.html">HOME</a></li>
                <li><a href="pictures.html">Picture Gallery</a></li>
                <li><a href="contacts.html">Contact</a></li>
                <li><a href="reports.php">Reports</a></li>
            </ul>
        </nav>
  
        <form action="php/insert.php" method="post" class="formElements">
            <div class="form-group">
                <label for="fName">First Name</label>
                <input name="firstName" class="form-control" type="text" placeholder="Enter your first name" aria-label="default input example"> 
            </div>
            <div class="form-group">
                <label for="lName">Last Name</label>
                <input name="lastName" class="form-control" type="text" placeholder="Enter your last name" aria-label="default input example"> 
            </div>
              <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="input-group">
                <textarea name="comments" class="form-control" placeholder="Please enter your comments, we read them all." aria-label="With textarea"></textarea>
            </div>
            
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
        
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
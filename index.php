
<?php
session_start();
 include 'includes/includes/dbh.inc.php';
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <style>
       
        body {
            background-color:rgb(0, 145, 255); /
            color: #333;
        }

       
        .navbar {
            background-color:rgb(0, 157, 255);
        }

       
        .btn-outline-success {
            border-color: #58a6d5;
            color: #58a6d5;
        }

        .btn-outline-success:hover {
            background-color: #58a6d5;
            color: white;
        }

       
        input[type="text"] {
            background-color: #f0f8ff;
            border: 1px solid #a1c8e0;
        }

     
        button {
            background-color:rgb(0, 157, 255);
            border-color: #58a6d5;
            color: white;
        }

        button:hover {
            background-color:rgb(0, 153, 255);
        }
    </style>

  <body>
    <form action="includes/contact.php" method="POST">
      <input  type=  "text" name="first" placeholder="Firstname">
      <br>
      <input  type=  "text" name="last" placeholder="Lastname">
      <br>
      <input  type=  "text" name="email" placeholder="E-mail">
      <br>
      <input  type=  "text" name="uid" placeholder="Username">
      <br>
      <input  type=  "password" name="pwd" placeholder="Password">
      <br>
      <button type="submit" name="submit" >Sign up</button>
      </form>
  <?php
    $sql = "SELECT * FROM users WHERE username ='john_doe';";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['username']. "<br>";
      }
    }


?>

?>

 <?php 
 $_SESSION['username'] = "john_doe";
 echo $_SESSION ['username'];

 if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
 } else {
  echo "You are logged in!";
 }

?>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a href="calculator.php">Calc</a></li>
            <li><a href="calender.php">Calender</a></li>
            <li><a  href="conditionals.php">Conditionals</a></li>
            <li><a  href="datatypes.php">Datatype</a></li>
            <li><a  href="operators.php">Operators</a></li>
            <li><a  href="arrays.php">Arrays</a></li>
            <li><a  href="functions.php">Functions</a></li>
            <li><a  href="headers.php">Headers</a></li>
            <li><a  href="loops.php">Loops</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
  <style> 
     <style>
       
        body {
            background-color:rgb(0, 145, 255); 
            color: #333; 
        }

        
        .navbar {
            background-color:rgb(0, 157, 255); 
        }

       
        .btn-outline-success {
            border-color: #58a6d5; 
            color: #58a6d5; 
        }

        .btn-outline-success:hover {
            background-color: #58a6d5; 
            color: white; 
        }

       
        input[type="text"] {
            background-color: #f0f8ff; 
            border: 1px solid #a1c8e0; 
        }

       
        button {
            background-color:rgb(0, 157, 255); 
            border-color: #58a6d5; 
            color: white;
        }

        button:hover {
            background-color:rgb(0, 153, 255); 
        }
    </style>
</nav>

    <form method="GET">
      <input  type="text" name="person">
      <button> SUBMIT</button>
    </form>
 <?php 
    $name = $_GET ['person'];
    echo $name." is the best teacher at madison!";
    //This gets something from the database

    /*echo "hi":*/
    ?> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.min.js"></script>

</body>
</html>
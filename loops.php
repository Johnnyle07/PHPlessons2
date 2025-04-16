<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops Page </title>
</head>
<body>
<?php
session_start();
?>
 <?php 
 $_SESSION['username'] = "Johnnyle24b";
 echo $_SESSION ['username'];

 if (!isset($_SESSION['username'])) {
  echo "You are not logged in!";
 } else {
  echo "You are logged in!";
 }

?>
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
          <li><a href="calculator.php">Calculator</a></li>
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
</nav>
    <?php
$x=10;

//Do While Loop
do{
    echo"Hello Coach B<br>";
    $x++;
}

//While Loop
while($x<=3);

//For Loop
for($x=0; $x<=3; $x++){
    echo"Coach B <br>";
}

//Foreach Loop
$array=array("Chancellor", "Liam", "Harrison","Johnny", "Jossemar");
foreach($array as $loopdata){
    echo"My name is ".$loopdata."<br>";
}
    ?>
</body>
</html>

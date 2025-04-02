<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="style.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
  </head>
  <body>
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
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/DataTypes.php">Datatypes</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/operators.php">Operators</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/conditionals.php">Conditionals</a></li>
            <li><a class="dropdown-item" href="http://localhost/PHP-Lessons/calculator.php"> Calculator</a></li>
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
   $x = 2;

   if ($x == 1) {
    echo " Coach B is a leader!";
   }
   elseif ($x == 2) {
    echo "Coach B is a leader!";
   }
   elseif ($x == 3) {
    echo "Coach B is a leader!";
   }
   elseif ($x == 4 ) {
    echo "Coach B is a leader!";
   }
   else {
    echo " Coach B is hardworking!";
   } 
   ?>
 <?php
    $x = 1;
    switch ($x){
        case 1:
            echo "This statement is very true";
        break;
        case 2:
            echo "This statment is correct";
        break;
        case 3:
            echo "This statement could be false";
        break;
        case 4:
            echo "This statemen could be true";
        break;
    }
    ?>

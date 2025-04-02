<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
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

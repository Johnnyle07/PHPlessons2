<!DOCTYPE html>
<html lang="en">
<head>

<?php


include "includes/headers.php";
$conn;

?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    setcookie("Name","johnny", time() + 86400);

    $_SESSION['name']= '12';

    ?>
</body>
</html>
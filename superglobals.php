<!DOCTYPE Html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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

    <?php

include ('includes/headers.php');

?>


<?php
setcookie("name", "Johnny", time() -172800 ); 



$_session['name'] = "12"; 

echo $_session['name']
    ?>
</body>
</html>
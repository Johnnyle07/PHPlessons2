<!DOCTYPE Html>
<html>
<head>

<?php


include "includes/headers.php";
$conn;

?>

    <meta charset="UTF-8">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<form action="includes/signup.inc.php" method="POST">
  <input type="text" name="first" placeholder="Firstname">
  <br>
  <input type="text" name="last" placeholder="Lastname">
  <br>
  <input type="text" name="email" placeholder="E-mail">
  <br>
  <input type="text" name="uid" placeholder="Username">
  <br>
  <input type="password" name="pwd" placeholder="Password">
  <br>
  <button type="submit" name="submit">Sign Up</button>
  <br>
</form>




</body>
</html>
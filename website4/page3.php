<?php

session_start();

print_r($_SESSION); // Grabbing the session array witth the loaded variables
// setting the vars with defaults so they are not undefined see pg 4 when vars are destroyed.
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sessions</title>
</head>

<body>
  <h1>Hello <?php echo $name; ?></h1>


</body>

</html>
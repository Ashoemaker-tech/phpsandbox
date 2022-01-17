<?php
// Check for posted data
// if (filter_has_var(INPUT_POST, 'data')) {
//   echo 'Data Found';
// } else {
//   echo 'No data';
// }

# cleaner way to validate for email.
// if (filter_has_var(INPUT_POST, 'data')) {
//   $email = $_POST['data'];
//   //Remove illegal chars
//   $email = filter_var($email, FILTER_SANITIZE_EMAIL);
//   echo $email . '<br>';

//   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//     echo 'Email is valid';
//   } else {
//     echo 'Email is not valid';
//   }
// }

// FILTER_VALIDATE_BOOL
// FILTER_VALIDATE_EMAIL
// FILTER_VALIDATE_FLOAT
// FILTER_VALIDATE_INT
// FILTER_VALIDATE_IP
// FILTER_VALIDATE_REGEXP
// FILTER_VALIDATE_URL

// FILTER_SANITIZE_EMAIL
// FILTER_SANITIZE_ENCODED
// FILTER_SANITIZE_NUMBER_FLOAT
// FILTER_SANITIZE_NUMBER_INT
// FILTER_SANITIZE_SPECIAL_CHARS
// FILTER_SANITIZE_STRING
// FILTER_SANITIZE_URL


# example of using filter function
// $var = 23;
// if (filter_var($var, FILTER_VALIDATE_INT)) {
//   echo $var . ' is a number';
// } else {
//   echo $var . ' is not a number';
// }


?>


<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>
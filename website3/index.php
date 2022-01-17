<?php
// Message vars
$msg = '';
$msgClass = '';
// check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
  // Get form data
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Check required fields
  if (!empty($email) && !empty($name) && !empty($message)) {
    // passed
    // Check email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      //failed
      $msg = 'Please use a valid email';
      $msgClass = 'alert-danger';
    } else {
      //passed
      //Passed Email
      $toEmail = 'andrew.shoemaker9@gmail.com';
      //subject
      $subject = 'Contact Request from' . $name;
      $body = '<h2>Contact Request</h2>
            <h4>Name</h4><p>' . $name . '</p>
            <h4>Email</h4><p>' . $email . '</p>
            <h4>Message</h4><p>' . $message . '</p>
            ';
      //Email Headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "content-Type:text/html;charset=UTF-8" . "
        \r\n";

      // Additional Headers
      $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        // Email sent
        $msg = 'Your email has been sent';
        $msgClass = 'alert-success';
      } else {
        // Failed
        $msg = 'Your Email failed';
        $msgClass = 'alert-danger';
      }
    }
    echo 'passed';
  } else {
    // failed
    $msg = 'Please fill in all fields';
    $msgClass = 'alert-danger';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Contact Us</title>
</head>

<body>
  <nav class="navbar navbar-default bg-dark">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand text-light">My Website</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <?php if ($msg != '') : ?>
      <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>

    <?php endif; ?>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
      </div>
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>
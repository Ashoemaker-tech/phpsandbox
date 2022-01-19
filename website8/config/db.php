<?php
// Create Connection
$conn = mysqli_connect('localhost', 'root', '', 'phpblog');

// Check Connection
if (mysqli_connect_errno()) {
  //connection failed
  echo 'Failed to connect to MYSQL ' . mysqli_connect_errno();
}

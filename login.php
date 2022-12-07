<?php
// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  // Check if the username and password are correct
  if ($username === 'xerocks' && $password === 'LOST789') {
    // Redirect to the admin dashboard
    header('Location: dashboard.php');
    exit;
  } else {
    // Show an error message
    header("Location: index.html");
    exit;
  }
}
?>

<?php
// The message
$message = $_POST['message'];
$email = $_POST['email'];
$name = $_POST['name'];

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('stryder@strydermaps.com', 'Stryder Maps', $message, $email, $name);
?>
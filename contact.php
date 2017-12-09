<?php
  $firstname = $_POST ['firstname'];
  $lastname = $_POST ['lastname'];
  $phone = $_POST ['phone'];
  $email = $_POST ['email'];
  $message = $_POST ['message'];

  /* Message that will be sent in email */
  $comment = "Hello!

  You have received an email from:

  Name: $firstname $lastname
  Phone: $phone
  Email: $email
  Message: $message";

  /* Send the message using mail() function */
  mail("theadrianwilliams08@gmail.com", "A new message", $message);

  /* Redirect visitor to the thank you page */
  header('Location: contact.html');
  exit();


?>

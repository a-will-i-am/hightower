<?php
  $firstname = $_POST ['firstname'];
  $lastname = $_POST ['lastname'];
  $phone = $_POST ['phone'];
  $email = $_POST ['email'];
  $message = $_POST ['message'];
  $from = $_POST ['From: Hightower Foundation'];
  $to = 'theadrianwilliams08@gmail.com';
  $subject = 'Hello';

  $body = "From: $firstname: \n $lastname: \n Phone: $phone \n Email: $email\n Message: $message\n";

  if ($_POST['submit']) {
    /* Anything that goes in here is only performed if the form is submitted */
  }
  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
}

?>

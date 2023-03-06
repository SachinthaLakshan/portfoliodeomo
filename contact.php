<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $name = $_POST["name"];
//   $email = $_POST["email"];
//   $message = $_POST["message"];
console.log("Message here");
  $to = "shanmart89@gmail.com";
  $subject = "New contact form submission";
  $body = "Name: sdfsdfdsfds";

  if (mail($to, $subject, $body)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, there was a problem sending your message. Please try again later.";
  }
}
?>

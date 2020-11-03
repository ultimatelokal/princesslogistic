<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email= $_POST['email'];
  $phonenumber = $_POST['phonenumber'];
  $message = $_POST['message'];

  $mailTo = "mmmalalay@gmail.com";
  $headers = "From: " .$email;
  $txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

  mail($mailTo, $name, $txt, $headers);
  header("Location: index.php?mailsend");

}
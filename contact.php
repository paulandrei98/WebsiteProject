<?php
if (isset($_POST['submit']))
{
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $message = $_POST['message'];

  $mailTo = "paul.boss1898@gmail.com";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an email from ".$name.".\n\n".$message;

  mail($mailTo,$txt,$headers);
  header("Location: Contact.html");
 }
 ?>

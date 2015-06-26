<?php 
$pageTitle = "lambworks.com";
$section = "home";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $company = trim($_POST["company"]);
  $description = trim($_POST["description"]);
  $budget = trim($_POST["budget"]);
  $date = trim($_POST["date"]);
  $type = trim($_POST["projectType"]);

  if ($name == "" OR $email == "" OR $description == "" OR $company == "") {
    echo "You must fill out ALL fields.";
    exit;
  }
  
  foreach( $_POST as $value ){
    if( stripos($value,'Content-Type:') !== FALSE ){
        echo "There was a problem with the information you entered.";
        exit;
    }
  } 

  if ($_POST["address"] != "") {
      echo "Your form submission has an error.";
      exit;
  }

  require_once('phpmailer/class.phpmailer.php');
  $mail = new PHPMailer();
  
  if (!$mail->ValidateAddress($email)){
    echo "You must have a valid email address.";
    exit;
  }

  $email_body = "";
  $email_body = $email_body . "<strong>Name</strong>: " . $name . "<br>";
  $email_body = $email_body . "<strong>Email</strong>: " . $email . "<br>";
  $email_body = $email_body . "<strong>Company</strong>: " . $company . "<br>";
  $email_body = $email_body . "<strong>Project Description</strong>: " . $description ."<br>";
  $email_body = $email_body . "<strong>Budget</strong>: " . $budget ."<br>";
  $email_body = $email_body . "<strong>Start Date</strong>: " . $date . "<br>";
  $email_body = $email_body . "<strong>Project Type</strong>: " . $type;

  //Set who the message is to be sent from
  $mail->setFrom($email, $name, $company);

  //Set who the message is to be sent to
  $mail->addAddress('holly@lambworks.com', 'Holly Stewart');
  //Set the subject line
  $mail->Subject = ' lambworks.com Contact Form Submission From: ' . $name;
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  $mail->msgHTML($email_body);

  //send the message, check for errors
  if (!$mail->send()) {
      echo "There was an error sending the email: " . $mail->ErrorInfo;
      exit;
  } 

  header("Location:/contact-thanks/");
  exit;
} ?>
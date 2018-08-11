<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <meta name="google-site-verification" content="uLH10ujjI-TBgtCEM4vFd20GnYYO0lYKzDan4_3GrCI" />
            <title>RLM Chicago</title>
            <link rel="icon" href="favicon.ico" />
            <link rel="shortcut icon" href="favicon.ico">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" media="screen" href="public/style.css">
            <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Montserrat:200" rel="stylesheet">
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </head>
        <body>

<?php  
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;

   require 'public/PHPMailer/src/Exception.php';
   require 'public/PHPMailer/src/SMTP.php';
   require 'public/PHPMailer/src/PHPMailer.php';

  
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $mailSub = $_POST['subject'];
  $message = $_POST['message'];
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "";
   $mail ->Password = "";
   $mail ->SetFrom($email);
   $mail ->Subject = $mailSub;
   $mail ->Body =  "<h3>From: $firstname $lastname </h3>
                    <h3>Phone: $phone </h3>
                    <h3>Email: $email </h3>
                    <h3>Message: $message </h3>";
   $mail ->AddAddress("theycallmeflowz@yahoo.com");
   
   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   } else {
?>
 <!-- navbar -->
 <nav class="navbar navbar-custom fixed-top navbar-expand-lg navbar-dark">
          <a class="navbar-brand" href="/"><img id="nav-logo" src="public/images/rlmlogo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link">RLM Chicago</a>
            </div>
          </div>
        </nav>
        
        <!-- Header Image Section -->
        <div id="home">
        <div id="weblogo">
        <div class="jumbotron">
          <h1 class="display-4">Thank You</h1>
          <hr class="my-4">
          <p class="lead">We will get back to you shortly</p>
          
          <a class="btn btn-primary btn-lg" href="/" role="button">Back to Home</a>
        </div>
        </div>
        
        </div>

<?php
   }
 
?>


</body>
</html>


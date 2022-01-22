<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Mail sender</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container wrapper pb-3">
         <h3 class="text-center header">IT ESSENTIALS ASSIGNMENT 2</h3>
         <div class="row">
            <div class="mail-form">
               <h2 class="text-center">
                  Send Message Using PHP
               </h2>
               <?php
                  $recipient = "";
                  if(isset($_POST['send'])){

                     $recipient = $_POST['email'];
                     $subject = $_POST['subject'];
                     $message = $_POST['message'];
                     $sender = "From: shahiprem7890@gmail.com";

                     if(empty($recipient) || empty($subject) || empty($message)){
                         ?>
               <div class="alert alert-danger text-center">
                  <?php echo "All inputs are required!" ?>
               </div>
               <?php
                  }else{
                     if(mail($recipient, $subject, $message, $sender)){
                      ?>

               <div class="alert alert-success text-center">
                  <?php echo "Your mail successfully sent to $recipient"?>
               </div>
               <?php
                  $recipient = "";
                  }else{
                   ?>
               <div class="alert alert-danger text-center">
                  <?php echo "Failed while sending your mail!" ?>
               </div>
               <?php
                  }
                  }
                  }
                  ?> 
               <form action="mail.php" method="POST">
                  <div class="form-group">
                     <input class="form-control" name="email" type="email" placeholder="Recipients" value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="subject" type="text" placeholder="Subject">
                  </div>
                  <div class="form-group">
                     <input cols="30" rows="5" class="form-control textarea" name="message" placeholder="Compose your message.."></input>
                  </div>
                  <div class="form-group">
                     <input class="form-control button btn-secondary" type="submit" name="send" value="Send" placeholder="Subject">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>
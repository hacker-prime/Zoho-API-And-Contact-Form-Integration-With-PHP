<?php
  session_start();

  $firstname = htmlspecialchars($_POST['firstname']);
  $lastname = htmlspecialchars($_POST['lastname']);
  // https://stackoverflow.com/questions/8068428/best-way-to-concatenate-strings-in-php-with-spaces-in-between
  $fullname =  $firstname . " " . $lastname;
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  // $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  $_SESSION['email'] = $email;
  $_SESSION['phone'] = $phone;
  $_SESSION['message'] = $message;
  $_SESSION['firstname'] = $firstname;
  $_SESSION['lastname'] = $lastname;




  if(!empty($email) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      // $receiver = "shaynhacker@gmail.com"; //enter that email address where you want to receive all messages
      $subject = "From: $fullname <$email>";
      $body = "Name: $fullname\nEmail: $email\nPhone: $phone\nMessage: $message\n\nRegards,\n$fullname";
      $sender = "From: $email";
      //The part with $email inside of mail() would normally be $receiver but for testing purposes it will be sent to the person that provided their email in the email field.
      if(mail($email, $subject, $body, $sender)){
         echo "Your message has been sent";
      }else{
         echo "Sorry, failed to send your message!";
      }
    }else{
      echo "Enter a valid email address!";
    }
  }else{
    echo "Email and message field is required!";
  }


  include("zoho-insert-record.php");

?>

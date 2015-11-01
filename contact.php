<?php

$pagetitle = "Contact Me";

$tpl = "pages/contact.tpl.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $sender_name = $sender_email = $sender_phone = $sender_message = '';

  if(empty($_POST['sender_name'])) {
    $sender_name_err = "Please provide a name";
  } else {
    $sender_name = htmlspecialchars($_POST['sender_name']);
  }

  if(empty($_POST['sender_email'])) {
    $sender_email_err = "Please provide an email address";
  } else {
    $sender_email = htmlspecialchars($_POST['sender_email']);
  }

  // if(empty($_POST['sender_phone'])) {
  //   $sender_phone_err = "Please provide a phone number";
  // } else {
  //   $sender_phone = htmlspecialchars($_POST['sender_phone']);
  // }

  if(!empty($_POST['sender_phone'])) {
    $sender_phone = htmlspecialchars($_POST['sender_phone']);
  }

  if(empty($_POST['sender_message'])) {
    $sender_message_err = "Please provide a message";
  } else {
    $sender_message = htmlspecialchars($_POST['sender_message']);
  }

  // $error_message = "";

    // $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    // if(!preg_match($email_exp,$sender_email)) {
   
    //   $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
   
    // }
   
    //   $string_exp = "/^[A-Za-z .'-]+$/";
   
    // if(!preg_match($string_exp,$sender_name)) {
   
    //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
   
    // }
   
    // if(strlen($sender_message) < 2) {
   
    //   $error_message .= 'The Comments you entered do not appear to be valid.<br />';
   
    // }
 
  // if(strlen($error_message) > 0) {
 
  //   died($error_message);
 
  // }

  if ($sender_name && $sender_email && $sender_message) {
    $email_to = "marthagibbons123@verizon.net";
    $email_subject = "[MarthaGibbons.com] Contact form";
    $email_message = "Sender's contact information and message below.\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);
    }

    $email_message .= "Name: ".clean_string($sender_name)."\n";
    $email_message .= "Email: ".clean_string($sender_email)."\n";
    $email_message .= "Telephone: ".clean_string($sender_phone)."\n";
    $email_message .= "Message: ".clean_string($sender_message)."\n";

    // create email headers
    $headers = 'From: '.$sender_email."\r\n".
    'Reply-To: '.$sender_email."\r\n".
    'X-Mailer: PHP/' . phpversion();

    // Fire it off!
    @mail($email_to, $email_subject, $email_message, $headers);
    @mail('adam.d.gibbons+marthagibbons_contact_form@gmail.com', $email_subject, $email_message, $headers);

    $submitted = true;
  }

}

include "template.php";

?>
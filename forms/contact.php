<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'kalanakithmina@hotmail.com';

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);
  $contact->cc = array('kalanakithmina@gmail.com', 'kalanakithmina@gmail.com');
  $contact->bcc = array('kalanakithmina@hotmail.com', 'kalanakithmina@hotmail.com');
  echo $contact->send();
?>

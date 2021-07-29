<?php

// Replace this with your own email address
$to = 'mwebembezijosh@gmail.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $phone_number = trim(stripslashes($_POST['phone_number']));
   $pledge_amount = trim(stripslashes($_POST['pledge_amount']));
   $contact_message = trim(stripslashes($_POST['message']));

   
	if ($subject == '') { $subject = "Pledge Form Submission"; }

   

?>
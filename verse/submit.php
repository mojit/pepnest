<?php
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: index.php'); exit;
}
$email_address = $_POST['email'];
	
// Create the email and send the message
$to = 'mona@pepnest.com' . ', ';
$to .= 'leela.loop@gmail.com';
$email_subject = "Wohoo! Sign up for beta list";
$email_body = "Someone has signed up for Verse-Beta \n\nEmail: $email_address";
$headers = "From: $email_address\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
// send the user back to the form

header('Location: index.php?s='.urlencode('Thank you! We have received your email.')); exit;		
?>
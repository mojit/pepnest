<?php

// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST['save']) || $_POST['save'] != 'contact') {
    header('Location: where.php'); exit;
}
    
// get the posted data
$message = $_POST['message'];

    

        
// check if an error was found - if there was, send the user back to the form
if (isset($error)) {
    header('Location: where.php?e='.urlencode($error)); exit;
}


// write the email content
$email_content = "Message: \n $message\n";

// send the email
//ENTER YOUR INFORMATION BELOW FOR THE FORM TO WORK!
mail ('jit@pepnest.com', 'Hush', $email_content, $headers);
    
// send the user back to the form
header('Location: where.php'); exit;

?>
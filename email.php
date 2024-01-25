<?php
// Set the SMTP and smtp_port settings for Gmail
// Set the SMTP and smtp_port settings for your email provider
ini_set("SMTP","smtp.gmail.com");
ini_set("smtp_port","587");

// Enable TLS encryption
ini_set("smtp_crypto", "tls");

// Set the sendmail_from address
ini_set("sendmail_from","tyrone.malocon@ecddigital.com.au");

// Send the email using the mail() function
$to = "natilis422@snowlash.com";
$subject = "Test Email";
$message = "This is a test email.";
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "CC: cc@example.com\r\n";
$headers .= "BCC: bcc@example.com\r\n";

if (mail($to, $subject, $message, $headers)) {
  echo "Email sent successfully.";
} else {
  echo "Email sending failed.";
}



 ?>
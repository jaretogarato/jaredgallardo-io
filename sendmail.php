<?php

// contact form

$recipientEmail = "jared@jaredgallardo.com"; // This is where emails will go when the contact form is sent

$subject = "New message from jaredgallardo dot com"; // This is the subject that will appear in your emails

///////////////////////////////////////////////////////////////////////

$contactName = $_POST['name'];
$contactEmail = $_POST['email'];
$contactComments = nl2br($_POST['comments']);

// Edit below here to the change email message from the contact form //

$body .= "<font face=arial,sans-serif style=font-size:11pt;>";
$body .= "<b>Name:</b> " . $contactName;
$body .= "<br /><b>eMail:</b> " . $contactEmail;
if ($contactComments != ""){
	$body .= "<br /><b>Comments:</b><br />" . $contactComments;
}
$body .= "<br />&nbsp;";
$body .= "</font>";

///////////////////////////////////////////////////////////////////////

$from = $contactEmail;
$headers = "From: $from <$from>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "Reply-To: $from";
$sendTo = $recipientEmail;
mail($sendTo, $subject, $body, $headers);

?>

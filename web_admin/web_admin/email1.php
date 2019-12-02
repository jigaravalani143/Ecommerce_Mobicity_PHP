<?php

 require_once "connection.php";
/* 1. Install Composer in the pc (It will set the path variable automatically)
   2. Now in command prompt make your website as your current directory
   3. type composer require phpmailer/phpmailer command (will install this library)
   4. Write the below code to send an email
 */

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$sql = "SELECT email FROM multiple";
$result = mysqli_query($connection, $sql);
while ($row = mysqli_fetch_assoc($result)) 
{

	$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
	try {
		//Server settings
		//$mail->SMTPDebug = 2;                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		
	  // Set parameters for SMTP  
	$mail->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
	);


		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'jigaravalani4699@gmail.com';                 // SMTP username
		$mail->Password = 'jigar1999';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		
		$mail->Port = 587;                                    // 587 TCP port to conect to

		//Recipients
		$mail->setFrom('jigaravalani4699@gmail.com', 'Mobicity');
	   
		$mail->addAddress($row['email']);               // Name is optional
		//$mail->addReplyTo('info@example.com', 'Information');
		//$mail->addCC('cc@example.com');
		//$mail->addBCC('bcc@example.com');

		//Attachments
		//$mail->addAttachment('Magento setup.docx');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		//Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = 'Attention Please';
		$mail->Body    = '<b>We are glad to inform that we have started a new company. Hope you like it. Please do visit our website and check it out.</b>';
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		$eml = $row['email'];
		echo 'Message has been sent to - '.$eml.'<br>';
		
	} 
	
	catch (Exception $e) {
		echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}
}
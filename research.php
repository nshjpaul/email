<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
 //Server settings
 include("server_setting.php");
    //Recipients
    $mail->setFrom('eazhubtest@gmail.com', 'TEST EMAIL');// Put
    $mail->addAddress("nshjpaul@gmail.com", "jeanpaul");     // Add a recipient
    $mail->addReplyTo('nshjpaul@gmail.com', 'Jean Paul');
     
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Email Testing';
    $mail->Body    = "Email successully sent,<br><br> 

 <br>
 Best Regards.
<hr>
 
	";
$mail->AltBody = 'Email testing by eazhub';
$mail->send();
  
     
} catch (Exception $e) {
      $mail->ErrorInfo;
} 

 
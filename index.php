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
 $mail->SMTPDebug = 3;                                 // Enable verbose debug output
 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'eazhubtest@gmail.com';                 // SMTP username 
 $mail->Password = 'eazhubtest2020!';                           // SMTP password  
 $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 465;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('eazhubtest@gmail.com', 'TEST EMAIL');// Put
    $mail->addAddress("nshjpaul@gmail.com", "jeanpaul");     // Add a recipient
    $mail->addReplyTo('nshjpaul@gmail.com', 'Jean Paul');
     
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Email Testing';
    $mail->Body    = "Dear Brother this  is greeting from EazHub,<br><br> 

 <br>
 Best Regards.
<hr>
 
	";
$mail->AltBody = 'Email testing by eazhub';
$mail->send();
  
     
} catch (Exception $e) {
      $mail->ErrorInfo;
} 

 
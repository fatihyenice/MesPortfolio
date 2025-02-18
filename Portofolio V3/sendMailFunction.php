<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; 

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(exceptions: true);

function envoieMail($mail,$mailToSent,$Content): void{
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'fatih.ydev@gmail.com';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('fatih.ydev@gmail.com', 'FatihYenice');
    $mail->addAddress($mailToSent, 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');       

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Message';
    $mail->Body    = 'This is the HTML message body <b>'.$Content.'</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send(); 
}  
?>
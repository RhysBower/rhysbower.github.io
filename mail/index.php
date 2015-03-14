<?php

if ( !isset($_POST['name']) ||
     !isset($_POST['email']) ||
     !isset($_POST['phone']) ||
     !isset($_POST['message'])
   )
{
  echo "false";
  return;
}

require '../PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer(true);               // create a new object with exceptions
$mail->IsSMTP();                       // enable SMTP
$mail->SMTPDebug = false;
$mail->do_debug = 0;                  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;                // authentication enabled
$mail->SMTPSecure = 'ssl';             // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "answerawesome@gmail.com";
$mail->Password = 'Sup3r$ecret';
$mail->SetFrom("answerawesome@gmail.com");
$mail->Subject = "Enquiry from {$_POST['name']}";
$mail->Body    = "Hello from {$_POST['name']}. You can contact me at {$_POST['email']} or ${_POST['phone']}\n\n{$_POST['message']}";
$mail->AddAddress("bowerrhys@gmail.com");

if( $mail->Send() )
{
  echo "true";
  return;
} else {
  echo "false";
  return;
}
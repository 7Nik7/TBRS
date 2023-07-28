<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$address = $_POST['user_address']
$work = $_POST['work'];
$zip = $_POST['zip'];
$class = $_POST['class'];
$bad = $_POST['bad'];
$sqft = $_POST['sqft'];
$often = $_POST['often'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '7tbrs7@gmail.com'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = 'sdfgh2004'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('smtp.gmail.com'); // от кого будет уходить письмо?
$mail->addAddress('Nikitakomp2@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Application with TBRS';
$mail->Body    = 'name:'.$name.'<br>phone:' .$phone.'<br>addres:'.$address.'<br>zip'.$zip.'<br>what work:'.$work.'<br>next if work=cleaning<br>type:'.$class.'<br>how much bad:'.$bad.'<br>how much sq feet:'.$sqft.'how often:'.$often.;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>

<?php 
require 'phpmailer2/PHPMailer.php';
require 'phpmailer2/SMTP.php';
// require 'phpmailer2/Exception.php';
// require 'phpmailer2/OAuth.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;

$fio = $_POST['fio'];
$email = $_POST['email'];
$phone = $_POST['phone'];
// $adress = $_POST['adress'];
// $text = $_POST['text'];
// $message = $_POST['message'];
//$fio = htmlspecialchars($fio);
//$email = htmlspecialchars($email);
//$phone = htmlspecialchars($phone);
//$adress = htmlspecialchars($adress);
//$text = htmlspecialchars($text);
//$message = htmlspecialchars($message);
//$fio = urldecode($fio);
//$email = urldecode($email);
//$phone = urldecode($phone);
//$adress = urldecode($adress);
//$text = urldecode($text);
//$message = urldecode($message);
//$fio = trim($fio);
//$email = trim($email);
//$phone = trim($phone);
//$adress = trim($adress);
//$text = trim($text);
//$message = trim($message);

//$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'pravoporyadokk@mail.ru'; // Ваша почта от куда будет отправляться сообщения
$mail->Password = 'jdw5z1nPH35UhAuscm8n'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';  //ssl                          
$mail->Port = 465; //порт почты mail

$mail->setFrom('pravoporyadokk@mail.ru'); // от кого будет приходить?
$mail->addAddress('larisa.k.01@bk.ru');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    
$mail->isHTML(true);                                  

$mail->Subject = 'Заявка c пробного сайта';
$mail->Body    = ''.$fio.' оставил заявку, его телефон '.$phone.'<br>Почта этого пользователя: '.$email.'<br>Сообщения заказчика: '.$message;
$mail->AltBody = '';
$mail->send();

?>
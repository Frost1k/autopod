<?php 

$nameform = $_POST['nameform'];
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'frostsmptclick';                 // Наш логин
$mail->Password = '134679852';                           // Наш пароль от ящика
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to
 
$mail->setFrom('frostsmptclick@yandex.ru', 'AV-podbor!');   // От кого письмо 
$mail->addAddress('mebeland.by@gmail.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с сайта AV-podbor';
$mail->Body    = '
	Пользователь оставил свои данные <br> 
	Название Формы: ' . $nameform . ' <br>
	Имя: ' . $name . ' <br>
	Телефон: ' . $phone . ' <br>
	Поле необязательно: ' . $text . '';
$mail->AltBody = 'Это альтернативный текст';

if(!$mail->send()) {
    return false;
} else {
    return true;
}

?>
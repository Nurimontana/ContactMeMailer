<?php
header("Content-Type:text/html; charset=UTF-8");
function filter($value){
    $operationOne   =   trim($value);
    $operationTwo   =   strip_tags($operationOne);
    $operationThree =   htmlspecialchars($operationTwo,ENT_QUOTES);
    return $operationThree;
}

$name           =  filter($_POST["name"]);
$phonenumber    =  filter($_POST["phonenumber"]);
$email          =  filter($_POST["email"]);
$subject        =  filter($_POST["subject"]);
$message        =  filter($_POST["message"]);









use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'nurullaharnus8@gmail.com';
    $mail->Password   = 'Baba4545.';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->SMTPOptions = array(
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ],
    );

    //Recipients
    $mail->setFrom($email  , $name );
    $mail->addAddress('tornavidam65@gmail.com', 'Yaşar TERMAN');
    $mail->addAddress('ellen@example.com');
    $mail->addReplyTo($email  , $name);


    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->msgHTML($message );

    $mail->send();
    echo 'Mail Gönderildi.';
} catch (Exception $e) {
    echo "Mail gönderim hatası: {$mail->ErrorInfo}";
}
?>


<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$nome = isset($_POST['nome']) ? $_POST['nome'] : 'Nao Informado';
$email = isset($_POST['email']) ? $_POST['email'] : 'Nao Informado';
$comentario = isset($_POST['comentario']) ? $_POST['comentario'] : 'Nao Informado';
 
 if($email && $comentario){
    $mail = new PHPMailer();
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'gsservice907@gmail.com';
	$mail->Password = '849300335';
	$mail->Port = 587;
 
	$mail->setFrom('germildosilva@gmail.com');
	$mail->addAddress('germildosilva@provedor.com.br');
 
	$mail->isHTML(true);
	$assunto = "WebSite ThulinesArqEng";
$corpo = "Nome: ".$nome. "\r\n".
         "Email: ".$email. "\r\n".
         "comentario: ".$comentario;
$cabecalho = "From: gsservice907@gmail.com". "\r\n". 
             "Reply-To ".$email."\r\n".
             "X=Mailer:PHP/".phpversion();
 
	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
}else{
	echo "Email ou comentario errado";
}
<?
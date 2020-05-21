<?php

if (isset($_POST['email'])){

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$comentario = addslashes($_POST['comentario']);


$para = "germildosilva@gmail.com";
$assunto = "WebSite ThulinesArqEng";
$corpo = "Nome: ".$nome. "\r\n".
         "Email: ".$email. "\r\n".
         "comentario: ".$comentario;
$cabecalho = "From: gsservice907@gmail.com". "\r\n". 
             "Reply-To ".$email."\r\n".
             "X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabecalho)){

	echo "Email enviado com sucesso!";
}else{
	echo "Erro no envio do email";
}
}

?>
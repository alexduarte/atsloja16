<?php
require 'PHPMailerAutoload.php';
$layoutEmail  = $_GET['layoutEmail'];
$ClienteEmail = $_GET['email' ];
$ClienteNome  = $_GET['nome' ];
$NomeLoja  = $_GET['nomeLoja' ];
$ReferenciaPedido  = $_GET['referenciaPedido'];
$UrlLogo  = $_GET['urlLogo'];

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'programacaomoc@gmail.com';            // SMTP username
$mail->Password = 'programacao';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'programacaomoc@gmail.com'; //Email de quem esta enviando
$mail->FromName = 'Loja ATS';  //Nome de quem esta enviando
$mail->addAddress($ClienteEmail, $ClienteNome);  // Email do destinatario, Name é opcional
//$mail->addAddress('kennedimalheiros@gmail.com', 'Kennedi Malheiros');  // Email do destinatario, Name é opcional
//$mail->addAddress('kennedimalheiros@gmail.com');               // Outro destinatario, Name é opcional
$mail->addReplyTo('programacaomoc@gmail.com', 'Responder');    //Email de resposta
//$mail->addCC('kennedi.malheiros@atsinformatica.com.br');       
//$mail->addBCC('kennedi.malheiros@atsinformatica.com.br');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->addAttachment('/var/tmp/file.tar.gz');         // Adicionar anexos
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // nome opcional
$mail->isHTML(true);                                  // Definir formato de e-mail para HTML

$mail->Subject = 'Titulo do Email';  //Titulo do email

//Abrindo o arquivo HTML e lendo o seu conteudo
//$mail->msgHTML(file_get_contents('account.html'), dirname(__FILE__));
$conteudoHTML = str_replace('{firstname}', $ClienteNome, file_get_contents('../mails/br/'.$layoutEmail));
$conteudoHTML = str_replace('{lastname}', '', $conteudoHTML); //Ja vem o nome e sobre nome junto
$conteudoHTML = str_replace('{shop_name}', $NomeLoja, $conteudoHTML);
$conteudoHTML = str_replace('{order_name}', $ReferenciaPedido, $conteudoHTML);
$conteudoHTML = str_replace('{shop_logo}', $UrlLogo, $conteudoHTML);
echo $conteudoHTML;
//payment.html
//shipped.html

$mail->msgHTML($conteudoHTML);

//$ModeloHTML = (file_get_contents('../mails/br/bankwire.html'));

//$mail->Body    = 'Loja ATS <b>Esta Funcionando \º/!</b>'; //Conteudo do Email com HTML
//$mail->AltBody = 'Loja ATS Esta Funcionando sem HTML!';   //Conteudo do Email sem HTML

if(!$mail->send()) {
   echo 'Mensagem não pôde ser enviada.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Mensagem enviada com sucesso!';
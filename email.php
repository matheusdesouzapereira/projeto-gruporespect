<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$numero = addslashes($_POST['numero']);
$mensagem = addslashes($_POST['mensagem']);

$to = "comercial@gruporespect.com.br";
$subject = "Contato do site: ".$assunto;
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Número: ".$numero. "\r\n".
        "Mensagem: " .$mensagem;
$header = "From:contato@gruporespect.com.br" . "\r\n".
        "Reply-To:".$email."\e\n".
        "X=Mailer:PHP/".phpversion();
   
if(mail($to,$subject,$body,$header)){
    echo "<script>alert('Email enviado com sucesso!');document.location='sucesso.html'; </script>";
}else{
    echo("O Email não pode ser enviado");
}

?>
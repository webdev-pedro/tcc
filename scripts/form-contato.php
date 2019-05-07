<?php 

// Dados do Formulário

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["tel"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];
    
// Configurações de email

$email_destinatario = "	contato@zuresolutions.dx.am";
$email_reply = "$email"; 
$email_assunto = "Zure Solutions - Contato";
	
// Estrutura de mensagem
	
$email_conteudo = "Zure Solutions - Contato: \n \n"; 
$email_conteudo .= "Nome: $nome \n"; 
$email_conteudo .= "Email: $email \n";
$email_conteudo .= "Telefone: $telefone \n";
$email_conteudo .= "Assunto: $assunto \n";
$email_conteudo .= "Mensagem: $mensagem \n"; 

// Seta os Headers

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: phenriqmelo99@gmail.com\r\n"; // remetente
$headers .= "Return-Path: contato@zuresolutions.dx.am\r\n"; // return-path

mail($email_destinatario, $email_assunto, $email_conteudo, $headers, "-r".$email_destinatario);

?>
	
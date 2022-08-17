<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $from = "suporte@conexbr.link";
  //$to = "estiprojetos@estiprojetos.com.br";
  $to = "fabricio@conexbr.link";
  $phone = $_POST["p_fone"];

  $subject = "Contato pelo site: " . $_POST["p_nome"];
  $message = "Nome.....: " . $_POST["p_nome"] . "\r\n" .
             "Email....: " . $_POST["p_email"] . "\r\n" .
             "Fone.....: " . $_POST["p_fone"] . "\r\n" .
             "Mensagem.: " . $_POST["p_mensagem"];
  
  $headers = "De:". $from;

  if (is_numeric($phone)) {
    if ($to != null && $subject != null && $headers != null && $message != null){
      mail($to, $subject, $message, $headers);
      //mail($to2, $subject, $message, $headers);
    }
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Enviando...</title>
<meta http-equiv="REFRESH" content="1;url=/contato.html"></HEAD>
<BODY>
</BODY>
</HTML>
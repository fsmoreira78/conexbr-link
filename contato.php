<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $from = "suporte@conexbr.link";
    //$to = "estiprojetos@estiprojetos.com.br";
    $to = "fabricio@conexbr.link";
    $phone = $_POST["telefone"];
    $empresa = $_POST["nomeEmpresa"];

    $subject = "Contato pelo site: " . $_POST["nomeContato"];
    $message = "Nome.....: " . $_POST["nomeContato"] . "\r\n" .
               "Empresa..: " . $_POST["nomeEmpresa"] . "\r\n" .
               "Email....: " . $_POST["enderecoEmail"] . "\r\n" .
               "Fone.....: " . $_POST["telefone"] . "\r\n" .
               "Mensagem.: " . $_POST["mensagem"];
    
    $headers = "De:". $from;

    if (is_numeric($phone)) {
        if ($to != null && $subject != null && $headers != null && $message != null){
            mail($to, $subject, $message, $headers);
            //mail($to2, $subject, $message, $headers);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Enviando...</title>
        <?php 
            $destination = "contato.html";
            if (!$empresa) {
                $destination = "index.html";
            }            
            echo('<meta http-equiv="REFRESH" content="60;url=/' . $destination . '">');
        ?>
    </head>
    <body>
        <?php
            //echo "<div> POST BODY <br>";
            //var_dump($_POST);
            //echo "</div>";
        ?>        
    </body>
</html>
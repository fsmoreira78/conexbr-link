<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONEX | Formulário de contato | Obrigado! Retornaremos o mais breve possível</title>

    <?php include 'snippets/head.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="text-default">
    <?php include 'snippets/navbar.php'; ?>

    <?php
        $from = 'suporte@conexbr.link';
        $to = 'estiprojetos@estiprojetos.com.br';
        $to2 = 'fabricio@conexbr.link';
        $phone = $_POST['telefone'];
        $empresa = $_POST['nomeEmpresa'];
        $honeypot = $_POST['confirmar'];

        if ($honeypot == '') {
            $subject = 'Contato pelo site: ' . $_POST['nomeContato'];
            
            $message = 'Nome.....: ' . $_POST['nomeContato'] . '\r\n' .
                       'Empresa..: ' . $_POST['nomeEmpresa'] . '\r\n' .
                       'Email....: ' . $_POST['enderecoEmail'] . '\r\n' .
                       'Fone.....: ' . $_POST['telefone'] . '\r\n' .
                       'Mensagem.: ' . $_POST['mensagem'];
            
            $headers = 'De:' . $from;
    
            if (is_numeric($phone)) {
                if ($from != null && $subject != null && $headers != null && $message != null && $empresa != null){
                    mail($to, $subject, $message, $headers);
                    mail($to2, $subject, $message, $headers);
                }
            }
        }
    ?>

    <a id="Contato" class="anchor"></a>
    <div class="container">
        <div class="row">
            <h4 class="conex-text text-teal-lighten1">Obrigado!</h4>
        </div>    

        <div class="row">
            <div class="card">
                <div class="card-image">
                    <img src="assets/img/obrigado.jpg">
                    <span class="card-title text-default">Retornaremos seu contato o mais breve possível.</span>
                </div>
            </div>
        </div>    
    </div>

    <?php include 'snippets/action_button.php'; ?>   
    <?php include 'snippets/footer.php'; ?>   
    <?php include 'snippets/js.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
          
        });
    </script>
</body>
</html>    
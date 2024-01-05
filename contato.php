<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONEX | Entre em contato conosco</title>
    <meta name="description" content="Na nossa página de contato, você encontrará os meios ideais para se conectar conosco. Estamos aqui para ajudar e será um prazer atendê-lo. Nossos canais: linkedin -> https://www.linkedin.com/company/conextecnologia, whatsapp -> (18) 98132-2200">

    <?php include 'snippets/head.php'; ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="text-default">
    <?php include 'snippets/navbar.php'; ?>

    <div id="contato" class="container">
        <div class="row">
            <h4 class="conex-text text-teal-lighten1">Fale Conosco</h4>
        </div>
        <form id="contato" method="post" action="contato-enviar.php">
            <div class="row">
                <div class="col s12 input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <label for="nomeContato" class="form-label">Nome*</label>
                    <input id="nomeContato" type="text" class="validate" name="nomeContato" required>
                </div>
            </div>
            <div class="row">
                <div class="col s12 input-field">
                    <i class="material-icons prefix">business</i>
                    <label for="nomeEmpresa" class="form-label">Empresa*</label>
                    <input type="text" id="nomeEmpresa" class="validate" name="nomeEmpresa" required>
                </div>       
            </div>                 
            <div class="row">
                <div class="col s6 input-field">
                    <i class="material-icons prefix">mail</i>
                    <label for="enderecoEmail" class="form-label">E-mail*</label>
                    <input type="email" class="validate" id="enderecoEmail" name="enderecoEmail" aria-describedby="enderecoEmailHelp" required>
                    <small id="enderecoEmailHelp">Nós nunca compartilhamos endereços de e-mail com ninguém.</small>
                </div>
                <div class="col s6 input-field">
                    <i class="material-icons prefix">phone</i>
                    <label for="telefone" class="form-label">Telefone*</label>
                    <input type="number" name="telefone" class="validate" aria-describedby="telefoneHelp" required>
                    <small id="telefoneHelp">Informe somente os números.</small>
                </div>            
            </div>        
            <div class="row">
                <div class="col s12 input-field">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="mensagem"  class="materialize-textarea"></textarea>
                    <label for="mensagem" class="form-label">Mensagem</label>
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <small class="form-text mb-3">*Campos obrigatórios</small>
                </div>
                <div class="col s6">
                    <input id="confirmar" type="number" class="validate input-validate" name="confirmar">
                </div>
            </div>
            <div class="row">
                <div class="col s6">
                    <button id="buttonEnviar" type="submit" class="btn btn-secondary mt-3" disabled="disabled">Enviar</button>
                </div>
                <div class="col s6">
                    <div class="g-recaptcha" data-sitekey="6Ld2jIEhAAAAAMkxk92V1vlv2RGp_AcCUq-NLvzk" data-callback="enableButtonEnviar"></div>
                </div>              
            </div>
        </form>
    </div>

    <?php include 'snippets/footer.php'; ?>   
    <?php include 'snippets/js.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            var mensagem = $('#mensagem');

            mensagem.val(getParameterByName('mensagem'));
            M.textareaAutoResize(mensagem);
        });
    </script>
</body>
</html>    
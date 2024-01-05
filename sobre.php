<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CONEX | Conheça um pouco de nossa história e nossos valores</title>

    <?php include 'snippets/head.php'; ?>
</head>
<body class="text-default">
    <?php include 'snippets/navbar.php'; ?>

    <!-- QUEM SOMOS -->
    <a id="QuemSomos" class="anchor"></a>
    <div class="container">
        <div class="row">
            <h4 class="conex-text text-teal-lighten1">Quem Somos</h4>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-image">
                        <img src="assets/img/conex01.jpg" alt="Homem com notebook próximo a plantação" style="width: 100%; height: 350px; object-fit: cover;">
                    </div>
                    <div class="card-content">
                        <h5 class="flow-text">A Conex Tecnologia da Informação é uma empresa especialmente voltada para atender as demandas específicas do agronegócio brasileiro. 
                            Desde a sua fundação em 2008, por dois especialistas com vasta experiência no setor sucroenergético, a empresa tem se dedicado 
                            incessantemente a oferecer soluções inovadoras e eficientes.</h5>
                        <h5 class="flow-text">O diferencial da Conex reside no seu compromisso com a otimização de recursos e na busca constante pela redução de custos para 
                            seus clientes. Através da automatização de processos, a empresa não apenas simplifica operações complexas, mas também proporciona 
                            uma gestão mais eficaz e econômica para as empresas do agronegócio.</h5>
                        <h5 class="flow-text">Ao longo dos anos, consolidou sua reputação como parceira estratégica das organizações agrícolas, fornecendo ferramentas 
                            tecnológicas robustas, suporte especializado e soluções personalizadas que impulsionam a produtividade, a rentabilidade 
                            e a sustentabilidade no campo.</h5>
                        <h5 class="flow-text">Com uma visão voltada para o futuro e um profundo conhecimento das nuances do agronegócio brasileiro, a Conex continua a inovar, 
                            adaptar-se às mudanças do mercado e superar as expectativas de seus clientes, reafirmando seu compromisso de contribuir 
                            significativamente para o crescimento e desenvolvimento sustentável do setor.</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MISSÂO -->
    <a id="Missao" class="anchor"></a>
    <div class="container">
        <div class="row">
            <h4 class="conex-text text-teal-lighten1">Missão, Visão e Valores</h4>
        </div>
        <div class="row">
            <div class="col s12 m4">
                <div class="card hoverable teal darken-2">
                    <div class="card-image">
                        <img src="assets/img/missao.jpg" alt="Alvo representando a missão da empresa">
                        <span class="card-title">Missão</span>
                    </div>
                    <div class="card-content white-text" style="height:250px !important;" >
                        <h6>Oferecer ao nossos clientes, soluções para redução de custos através da automatização de
                            processos. Promover um ambiente saudável de negócios que favoreça clientes, fornecedores,
                            parceiros e colaboradores.</h6>
                    </div>                    
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card hoverable orange darken-2">
                    <div class="card-image">
                        <img src="assets/img/visao.jpg" alt="Olho representando a visão da empresa">
                        <span class="card-title">Visão</span>
                    </div>
                    <div class="card-content white-text" style="height:250px !important;" >
                        <h6>Moldar o futuro do agronegócio por meio de soluções 
                            tecnológicas inovadoras, estabelecendo padrões elevados de eficiência, sustentabilidade e 
                            competitividade. Com determinação e expertise, buscamos não apenas ocupar, mas definir o 
                            espaço de vanguarda entre os principais players de tecnologia para o agronegócio, 
                            redefinindo o que é possível e inspirando a próxima geração de soluções agrícolas 
                            inteligentes e integradas.</p>
                    </div>                    
                </div>
            </div>
            <div class="col s12 m4">
                <div class="card hoverable teal darken-2">
                    <div class="card-image">
                        <img src="assets/img/valores.jpg" alt="Equipe representando os valores da empresa">
                        <span class="card-title">Valores</span>
                    </div>
                    <div class="card-content white-text" style="height:250px !important;" >
                        <ul class="browser-default">
                            <li><h6>Ética</h6></li>
                            <li><h6>Inovação</h6></li>
                            <li><h6>Respeito</h6></li>
                            <li><h6>Comprometimento</h6></li>
                        </ul>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <?php include 'snippets/action_button.php'; ?>   
    <?php include 'snippets/footer.php'; ?>   
    <?php include 'snippets/js.php'; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            // Parallax
            $('.parallax').parallax();
    
        });
    </script>
</body>
</html>    
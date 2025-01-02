<?php
    $currPage = $_SERVER['REQUEST_URI'];
    
    $arrayActive = array(
        "index" => "",
        "solucoes" => "",
        "sistemas" => "",
        "contato" => "",
        "suporte" => "",
        "sobre" => ""
    );

    foreach ($arrayActive as $element => $value)
    if (strpos( $currPage, $element ) !== false) {
        $arrayActive[$element] = "active";
    }

    echo '
    <header>
    <a class="anchor" id="Top"></a>

    <ul id="DropSolucoes" class="dropdown-content">
        <li><a href="solucoes.php#ScorpIODust">Medidor de profundidade</a></li>
        <li><a href="solucoes.php#ScorpIOFlow">Automação de balanças</a></li>
        <li><a href="solucoes.php#Pethros">Gestão de combustíveis</a></li>
    </ul>

    <ul id="DropSistemas" class="dropdown-content">
        <li><a href="https://www.scorpio.app.br/apex/f?p=800" target="_blank">ScorpIO Flow</a></li>
        <li><a href="https://www.scorpio.app.br" target="_blank">ScorpIO Dust</a></li>
        <li><a href="https://www.silobag.app.br" target="_blank">Silo Bag</a></li>        
        <li><a href="https://www.pethros.com.br" target="_blank">Pethros</a></li>
    </ul>

    <ul id="DropSuporte" class="dropdown-content">
        <!--<li><a href="#">Documentação</a></li>
        <li><a href="#">Garantia</a></li>-->
        <li><a href="https://www.pethros.com.br/apex/f?p=100" target="_blank">Help-desk</a></li>
    </ul>

    <div class="navbar-fixed">
        <nav class="bg-light">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo"><img src="assets/img/logo.png" height="55px" width="auto"></a>
                <a href="#" data-target="MobileMenu" class="sidenav-trigger waves-effect waves-light circle teal-text"><i class="material-icons">menu</i></a>    
                <ul class="center hide-on-med-and-down text-default">
                    <li><a href="index.php">Home</a></li>
                    <li><a class="dropdown-trigger" href="#" data-target="DropSolucoes">Soluções<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#" data-target="DropSistemas">Sistemas<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a class="dropdown-trigger" href="#" data-target="DropSuporte">Suporte<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>                                
            </div>
        </nav>
    </div>

    <!-- Slide menu -->
    <ul id="MobileMenu" class="sidenav">
        <li class="bold ' . $arrayActive["index"]   . '"><a href="index.php" class="waves-effect waves-teal">Home</a></li>
        <li><div class="divider"></div></li>
        <li class="bold ' . $arrayActive["solucoes"] . '">
            <a href="solucoes.php">Soluções</a>
            <ul>
                <li class="bold" style="padding-left:20px;"><a href="solucoes.php#ScorpIODust" class="waves-effect waves-teal">ScorpIO Dust</a></li>     
                <li class="bold" style="padding-left:20px;"><a href="solucoes.php#ScorpIOFlow" class="waves-effect waves-teal">ScorpIO Flow</a></li>     
                <li class="bold" style="padding-left:20px;"><a href="solucoes.php#Pethros" class="waves-effect waves-teal">Pethros</a></li>     
            </ul>
        </li>
        <li><div class="divider"></div></li>
        <li class="bold ' . $arrayActive["sistemas"] . '">
            <a href="#">Sistemas</a>
            <ul>
                <li class="bold" style="padding-left:20px;"><a href="https://www.scorpio.app.br" class="waves-effect waves-teal" target="_blank">ScorpIO Dust</a></li>     
                <li class="bold" style="padding-left:20px;"><a href="https://www.scorpio.app.br/apex/f?p=800" class="waves-effect waves-teal" target="_blank">ScorpIO Flow</a></li>     
                <li class="bold" style="padding-left:20px;"><a href="https://www.silobag.app.br" class="waves-effect waves-teal" target="_blank">Silo Bag</a></li>        
                <li class="bold" style="padding-left:20px;"><a href="https://www.pethros.com.br" class="waves-effect waves-teal" target="_blank">Pethros</a></li>     
            </ul>
        </li>
        <li><div class="divider"></div></li>
        <li class="bold ' . $arrayActive["suporte"] . '"><a href="#" class="waves-effect waves-teal">Suporte</a></li>     
        <li class="bold ' . $arrayActive["contato"] . '"><a href="contato.php" class="waves-effect waves-teal">Contato</a></li>                
        <li><div class="divider"></div></li>
        <li class="bold ' . $arrayActive["sobre"]   . '"><a href="sobre.php" class="waves-effect waves-teal">Sobre</a></li>    
    </ul>
    
    <!-- End slide menu -->

    </header>
    ';
   
    echo "\n\r";
?>
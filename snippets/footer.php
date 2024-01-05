<?php
    $ano = date("Y");
    echo '
    <footer id="contato" class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">CONEX Tecnologia da Informação Ltda.</h5>
                    <ul>
                        <li class="grey-text text-lighten-4">10.292.582/0001-80</li>
                        <li class="grey-text text-lighten-4">Jaboticabal - SP</li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Contato</h5>
                    <ul>
                        <li><a class="white-text text-lighten-1" href="contato.php"><i class="fa-solid fa-envelope fa-lg"></i> Fale conosco</a></li>
                        <li><a class="white-text text-lighten-1" href="https://www.linkedin.com/company/conextecnologia" target="_blank"><i class="fa-brands fa-linkedin fa-lg"></i> /conextecnologia</a></li>
                        <li><a class="white-text text-lighten-1" href="https://wa.me/5518981322200?text=Olá%20estou%20entrando%20em%20contato%20através%20do%20site%20da%20Conex."><i class="fa-brands fa-whatsapp fa-lg"></i> (18) 98132-2200</a></li>
                        <li><a class="white-text text-lighten-1" href="#"><i class="fa-solid fa-phone fa-lg"></i> (18) 3217-2999</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Sobre</h5>
                    <ul>
                        <li><a class="white-text text-lighten-1" href="sobre.php#QuemSomos">Quem somos</a></li>
                        <li><a class="white-text text-lighten-1" href="sobre.php#Missao">Missão</a></li>
                        <li><a class="white-text text-lighten-1" href="politica.php#Privacidade">Privacidade</a></li>
                        <li><a class="white-text text-lighten-1" href="politica.php#Termos">Termos e condições</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <small>
                    © 2008-' . $ano . ' CONEX Tecnologia da Informação Ltda. Todos os direitos reservados.
                    <!--<a class="grey-text text-lighten-4 right" href="#!">More Links</a>-->
                </small>
                <span class="grey-text text-lighten-4 right">
                    <small>
                        Desenvolvido por Conex Tecnologia. | Crédito de algumas imagens: <a class="white-text text-lighten-1" href="https://www.freepik.com">Freepik.com</a>
                    </small>
                </span>
            </div>
        </div>
    </footer> ';
    echo "\n\r";
?>
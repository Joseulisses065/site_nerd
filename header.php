<?php
    echo '<header>
    <div class="logo">
        <a href="index.php"><img src="IMG/logo.png" alt=""></a>
    </div>
    <nav>
        <ul class="lista-op">
            <li><a href="#quem-somos">Quem somos</a></li>
            <li><a href="#redes-sociais">Onde estamos</a></li>
            <li><a href="#mais-vistos">Mais vistos</a></li>
            <li><a href="#recentes">Recentes</a></li>
        </ul>
    </nav>
    <div>
        <input id="check_2" checked type="checkbox">
        <label for="check_2">
            <div class="bar" onclick="apagar()">
                <div id="ball" class="ball"></div>
            </div>
        </label>
    </div>
    <div>
        <input type="text" class="pesquisa">
    </div>
    <div class="menu">
        <input id="check" type="checkbox" checked>
        <label class="bl-menu" for="check" onclick="menu()">
            <div class="linha" id="l1"></div>
            <div class="linha" id="l2"></div>
            <div class="linha" id="l3"></div>
        </label>
    </div>
</header>';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="icon" type="image/png" href="IMG/logo-b.png">
    <script type="text/javascript" src="JS/java.js"></script>
    <title>Nerd now</title>
</head>

<body>

    <!--cobeçalho e navbar-->
    <?php include_once 'header.php'?>

    <!--conteudo principal do site-->
    <main>
        <section class="banner">
            <div class="txt-banner">
                <div>
                    <h1>Marvel's Spider-Man e Bloodborne estão mais baratos nesta semana</h1>
                    <p>, sit amet consectetur adipisicing elit. Possimus, molestiae? Adipisci consectetur eligendi iusto
                        optio excepturi asperiores accusamus, aut possimus facere! Consequuntur aut nulla quae assumenda
                        quis blanditiis omnis voluptatem.sit
                        amet conse</p>
                    <a href="artigo-01.php"><div class="btn-leia">leia mais</div></a>
                </div>
            </div>

        </section>

        <section class="contein-cards">
            <div id="mais-vistos" class="mais-vistos">
                <h2>+Mais vistos</h2>

                <div>
                    <div> <img class="img-card" src="IMG/slider-img_3.png" alt=""></div>
                    <div class="xt-mais">
                        <h1>Marvel's Spider-Man e Bloodborne estão mais baratos nesta semana</h1>
                        <div class="atb">
                            <h2 class="categoria">Games</h2>
                            <h2 class="data">21/08/2021</h2>
                        </div>
                        <p>Bloodborne e outras centenas de títulos seguem mais baratos nas ofertas de fim de ano da PlayStation Store, que movimentam até 75% de desconto em jogos de PlayStation 4 (PS4) e PlayStation 5 (PS5) até 22 de dezembro
                        </p>
                        <a href="artigo-02.php"><div class="btn-leia">leia mais</div></a>

                    </div>

                </div>
                <div>
                    <div> <img class="img-card" src="IMG/featured_b.jpg" alt=""></div>
                    <div class="xt-mais">
                        <h1>Marvel's Spider-Man e Bloodborne estão mais baratos nesta semana</h1>
                        <div class="atb">
                            <h2 class="categoria">Games</h2>
                            <h2 class="data">21/08/2021</h2>
                        </div>
                        <p>Bloodborne e outras centenas de títulos seguem mais baratos nas ofertas de fim de ano da PlayStation Store, que movimentam até 75% de desconto em jogos de PlayStation 4 (PS4) e PlayStation 5 (PS5) até 22 de dezembro
                        </p>
                        <a href="artigo-03.php"><div class="btn-leia">leia mais</div></a>
                    </div>

                </div>
            </div>
            <div id="recentes" class="novidades">
                <h2>Novidades</h2>
                <div>
                    <div> <img class="img-card" src="IMG/featured_a.jpg" alt=""></div>
                    <div class="xt">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus facere quo corporis
                            commodi officiis maxime asperiores id consequuntur, culpa, nobis necessitatibus, atque ut
                            aliquid tenetur eligendi veritatis suscipit labore
                            eius.
                        </p>
                        <a href="artigo-04.php"><div class="btn-leia">leia mais</div></a>
                    </div>

                </div>
                <div>
                    <div> <img class="img-card" src="IMG/slider-img_2.png" alt=""></div>
                    <div class="xt">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus facere quo corporis
                            commodi officiis maxime asperiores id consequuntur, culpa, nobis necessitatibus, atque ut
                            aliquid tenetur eligendi veritatis suscipit labore
                            eius.
                        </p>
                        <a href="artigo-05.php"><div class="btn-leia">leia mais</div></a>
                    </div>

                </div>
                <div>
                    <div> <img class="img-card" src="IMG/slider-img_1.png" alt=""></div>
                    <div class="xt">
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus facere quo corporis
                            commodi officiis maxime asperiores id consequuntur, culpa, nobis necessitatibus, atque ut
                            aliquid tenetur eligendi veritatis suscipit labore
                            eius.
                        </p>
                        <a href="artigo-06.php"><div class="btn-leia">leia mais</div></a>
                    </div>

                </div>

            </div>
        </section>
        <section class="propaganda">
            <a href="artigo.php"><img src="IMG/channels4_banner.jpg" alt=""></a>
        </section>
        <section class="carrossel-baixo">
            <h2>Em destaque</h2>
            <div>
                <div class="carrosel-conteiner">
                    <div class="slides">
                        <input name="slide-c" type="radio" id="r1" checked>
                        <input name="slide-c" type="radio" id="r2">
                        <input name="slide-c" type="radio" id="r3">
                        <input name="slide-c" type="radio" id="r4">

                        
                        <div class="slide s1"><a href="artigo-06.php"><img src="IMG/slider-img_1.png" alt=""></a></div>
                        <div class="slide"><a href="artigo-05.php"><img src="IMG/slider-img_2.png" alt=""></a></div>
                        <div class="slide"><a href="artigo-02.php"><img src="IMG/slider-img_3.png" alt=""></a></div>
                        <div class="slide"><a href="artigo-07.php"><img src="IMG/slider-img_4.png" alt=""></a></div>
                        
                    </div>

                    <div class="navegacao">
                        <label id="nb-1" class="nav-ball" for="r1" onclick="navegacao(1)"></label>
                        <label id="nb-2"class="nav-ball" for="r2" onclick="navegacao(2)"></label>
                        <label id="nb-3" class="nav-ball" for="r3" onclick="navegacao(3)"></label>
                        <label id="nb-4" class="nav-ball" for="r4" onclick="navegacao(4)"></label>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--roda pé do site-->
<?php include_once 'footer.php'?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pipoca.com - Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/index.css">
</head>

<body>
    <?php
    include("header.php")
    ?>



    <main class="container-principal">
        <!-- TODO botar cor em cada um dos generos -->
        <section class="container__destaques">
            <img src="img/banner_projeto_filme.jpg" alt="">
        </section>

        <section class="container__generos-filmes">
            <ul class="generos-filmes">
                <li class="genero"> <a href="#animacao">Animação</a> </li>
                <li class="genero"> <a href="#drama">Drama</a> </li>
                <li class="genero"> <a href="#comedia">Comedia</a> </li>
                <li class="genero"> <a href="#acao">Ação</a> </li>
                <li class="genero"> <a href="#terror">Terror</a> </li>
            </ul>
        </section>

        <nav class="lista-filmes_nav">
            <a href="#">Filmes</a>
        </nav>
        <section class="container__lista-filmes">


            <h2 class="lista-filmes__title" id="animacao">Animação</h2>
            <ul class="lista-filmes">
                <li class="filme">
                    <img src="img/Filmes/animacao/imagem1" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Monstros S.A.</h3>
                </li>
                <li class="filme">
                    <img src="img/Filmes/animacao/imagem2" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">A Viagem de Chiriro</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/animacao/imagem3" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Divertidamente</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/animacao/imagem4" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Sherek</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/animacao/imagem5" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Toy Story</h3>

                </li>
            </ul>
        </section>
        <!-- FIm da lista de filmes -->

        </section>

        <!-- Sessão para armazenar filmes, caso necessário, fazer uma cópia embaixo. Começo da Lista de filmes -->
        <section class="container__lista-filmes">
            <h2 class="lista-filmes__title" id="drama">Drama</h2>
            <ul class="lista-filmes">
                <li class="filme">
                    <img src="img/Filmes/drama/drama1" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Estrelas Além do Tempo</h3>
                </li>
                <li class="filme">
                    <img src="img/Filmes/drama/drama2" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">O Jogo da Imitação</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/drama/drama3" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Inteligencia Artificial</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/drama/drama4" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Steve Jobs</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/drama/drama5" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Um Sonho Possível</h3>

                </li>
            </ul>
        </section>
        <!-- FIm da lista de filmes -->

        </section>

        <!-- Sessão para armazenar filmes, caso necessário, fazer uma cópia embaixo. Começo da Lista de filmes -->
        <section class="container__lista-filmes">
            <h2 class="lista-filmes__title" id="comedia">Comédia</h2>
            <ul class="lista-filmes">
                <li class="filme">
                    <img src="img/Filmes/comedia/comedia1" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Gente Grande</h3>
                </li>
                <li class="filme">
                    <img src="img/Filmes/comedia/comedia2" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">As Branquelas</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/comedia/comedia3" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Meninas Malvadas</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/comedia/comedia4" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Esposa de Mentirinha</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/comedia/comedia5" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Zohan, Agente Bom de Corte</h3>

                </li>
            </ul>
        </section>
        <!-- FIm da lista de filmes -->

        <!-- Sessão para armazenar filmes, caso necessário, fazer uma cópia embaixo. Começo da Lista de filmes -->
        <section class="container__lista-filmes">
            <h2 class="lista-filmes__title" id="acao">Ação</h2>
            <ul class="lista-filmes">
                <li class="filme">
                    <img src="img/Filmes/acao/acao1" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">John Wick</h3>
                </li>
                <li class="filme">
                    <img src="img/Filmes/acao/acao2" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">007</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/acao/acao3" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Velozes e Furiosos</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/acao/acao4" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Duro de Matar</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/acao/acao5" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Vingadores</h3>

                </li>
            </ul>
        </section>
        <!-- FIm da lista de filmes -->


        <!-- Sessão para armazenar filmes, caso necessário, fazer uma cópia embaixo. Começo da Lista de filmes -->
        <section class="container__lista-filmes">
            <h2 class="lista-filmes__title" id="terror">Terror</h2>
            <ul class="lista-filmes">
                <li class="filme">
                    <img src="img/Filmes/terror/terror1" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">A Morte do Demônio: A Ascensão</h3>
                </li>
                <li class="filme">
                    <img src="img/Filmes/terror/terror2" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Boneco do Mal 2</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/terror/terror3" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Escape Room 2</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/terror/terror4" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">The Exorcist</h3>

                </li>
                <li class="filme">
                    <img src="img/Filmes/terror/terror5" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">A Órfã</h3>

                </li>
            </ul>
        </section>
        <!-- Fim da lista de filmes -->


    </main>


    <?php
    include('footer.php');

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

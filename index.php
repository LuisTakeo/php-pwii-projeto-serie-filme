<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes series potocom</title>

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php
    include("header.php")
    ?>

    <section class="container__destaques">
    </section>

    <main class="container">
        <!-- TODO botar cor em cada um dos generos -->

        <section class="container__generos-filmes">
            <ul class="generos-filmes">
                <li class="genero">Terror</li>
                <li class="genero">Ação</li>
                <li class="genero">Drama</li>
                <li class="genero">Animação</li>
                <li class="genero">Comédia</li>
            </ul>
        </section>

        <!-- Sessão para armazenar filmes, caso necessário, fazer uma cópia embaixo. Começo da Lista de filmes -->
        <section class="container__lista-filmes">
            <h2 class="lista-filmes__title">Animação</h2>
            <ul class="lista-filmes">
                <li class="filme">
                    <img src="https://img.ibxk.com.br/2022/06/08/08144823103323.jpg?ims=328x" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Nome filme</h3>
                </li>
                <li class="filme">
                    <img src="https://img.ibxk.com.br/2022/06/08/08144823103323.jpg?ims=328x" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Nome filme</h3>

                </li>
                <li class="filme">
                    <img src="https://img.ibxk.com.br/2022/06/08/08144823103323.jpg?ims=328x" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Nome filme</h3>

                </li>
                <li class="filme">
                    <img src="https://img.ibxk.com.br/2022/06/08/08144823103323.jpg?ims=328x" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Nome filme</h3>

                </li>
                <li class="filme">
                    <img src="https://img.ibxk.com.br/2022/06/08/08144823103323.jpg?ims=328x" alt="" class="filme-imagem">
                    <h3 class="filme-titulo">Nome filme</h3>

                </li>
            </ul>
        </section>
        <!-- FIm da lista de filmes -->


    </main>


    <?php
    include('footer.php');

    ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
</body>

</html>

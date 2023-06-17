<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/index.css">
    
</head>

<body>
    <?php
    include("header.php")
    ?>

    <section class ="apresentacao">
    
        <h1> Um site feito por amantes de filmes para amantes de filmes.</h1>
    </section>

    <section class="gradiente">
        <div class="gradiente-div"></div>
    </section>

    <section class="container__lista-filmes">
            <h2 class="lista-filmes__title"></h2>
            <ul class="lista-filmes">
                <li class="filme">
             
                    <img src="https://m.media-amazon.com/images/M/MV5BYWZjMjk3ZTItODQ2ZC00NTY5LWE0ZDYtZTI3MjcwN2Q5NTVkXkEyXkFqcGdeQXVyODk4OTc3MTY@._V1_.jpg"
                     alt="" class="filme-imagem">
                    <h3 class="filme-titulo">    <a href="./parasite.php"> Parasite</h3> </a>
                    
                </li>
                <li class="filme">
                    <img src=" https://i.pinimg.com/originals/0c/fe/b4/0cfeb405948fb68609fc87764eb70cb5.jpg "alt="" class="filme-imagem">
                    <h3 class="filme-titulo"><a href="./moolight.php"> Titanic</h3> </a>

                </li>
                <li class="filme">
                    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/3ba32041615387.57acc4bf0b15f.jpg" alt="" class="filme-imagem">
                    <h3 class="filme-titulo"><a href="./titanic.php">Moonlight</h3></a>

                </li>
                <li class="filme">
                    <img src="https://m.media-amazon.com/images/M/MV5BMWE3NTE2YzgtNjUyYy00Y2NmLTljNWMtNjY4MjZhYmMzM2M4XkEyXkFqcGdeQXVyMTEyMDcwNw@@._V1_.jpg" alt="" class="filme-imagem">
                    <h3 class="filme-titulo"><a href="./tsol.php">The Silence of The Lambs</h3></a>

                </li>
                <li class="filme">
                    <img src="https://br.web.img3.acsta.net/pictures/15/11/13/16/57/186551.jpg"alt="" class="filme-imagem">
                    <h3 class="filme-titulo"><a href="./carol.php"> Carol</h3></a>

                </li>
            </ul>
        </section>



    <main class="container-fluid">
        <!-- TODO botar cor em cada um dos generos -->

<section class="container__generos-filmes">
<ul class="generos-filmes">
  <li class="genero">
    <img src="./img/panico1.jpeg" alt="Terror" class="genero-imagem">
    <span class="genero-texto">Terror</span>
  </li>
  <li class="genero">
    <img src="./img/johnwick1.jpg" alt="Ação" class="genero-imagem">
    <span class="genero-texto">Ação</span>
  </li>
  <li class="genero">
    <img src="./img/ashoras2.jpg" alt="Drama" class="genero-imagem">
    <span class="genero-texto">Drama</span>
  </li>
  <li class="genero">
    <img src="./img/girl1.jpg" alt="Animação" class="genero-imagem">
    <span class="genero-texto">Animação</span>
  </li>
  <li class="genero">
    <img src="./img/knives1" alt="Comédia" class="genero-imagem">
    <span class="genero-texto">Comédia</span>
  </li>
</ul>

</section>


        <!-- Sessão para armazenar filmes, caso necessário, fazer uma cópia embaixo. Começo da Lista de filmes -->
        
        <!-- FIm da lista de filmes -->


    </main>


    <?php
    include('footer.php');

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

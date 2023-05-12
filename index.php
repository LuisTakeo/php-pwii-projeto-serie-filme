<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes series potocom</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <header class="container__header">
        <div class="header__title">
            <h2>Filmes potocom</h2>
        </div>

        <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li class="list-item"><a href="#">Filmes</a></li>
                <li class="list-item"><a href="#">Series</a></li>
                <li class="list-item"><a href="#">Contato</a></li>
                <li class="list-item"><a href="#">Sobre</a></li>
            </ul>
        </nav>

        <div class="header__login">
            <button>Entrar</button>
        </div>

    </header>
    <main class="container">
        <section class="container__destaques">
            <h2 class="destaques_title">Nome filme</h2>
            <p class="destaques_descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste dolor velit odit incidunt at et nulla amet eos nihil pariatur facere repellendus, culpa cupiditate dignissimos maxime ipsa aliquid recusandae doloribus.</p>
        </section>

        <section class="container__generos-filmes">
            <ul class="generos-filmes">
                <li class="genero">Terror</li>
                <li class="genero">Ação</li>
                <li class="genero">Drama</li>
                <li class="genero">Animação</li>
                <li class="genero">Comédia</li>
            </ul>
        </section>
    </main>




    <section class="container">
        <form class="mb-3" action="./filme-salvar.php" method="post" id="container__cadastro">
            <label class="form-label" for="txNome">Nome do filme: </label>
            <input class="form-control" type="text" placeholder="Insira o nome do filme" name="txNome" id="txNome">

            <label class="form-label" for="txAno">Ano: </label>
            <input class="form-control" type="text" placeholder="Insira o ano" name="txAno" id="txAno">



            <label class="form-label" for="txDuracao">Duração: </label>
            <input class="form-control" type="text" placeholder="Insira a duração" name="txDuracao" id="txDuracao">

            <label class="form-label" for="txDescricao">Descrição: </label>
            <textarea class="form-control" placeholder="Insira a duração" name="txDescricao" id="txDescricao"></textarea>

            <label class="form-label" for="txGenero">Genero: </label>
            <input class="form-control" type="text" placeholder="Insira o gênero" name="txGenero" id="txGenero">

            <input type="submit" value="Salvar">
        </form>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

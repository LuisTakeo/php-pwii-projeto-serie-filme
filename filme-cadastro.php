<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Filmes cadastro</title>
</head>

<body>
    <form class="mb-3" action="./filme-salvar.php" method="post">
        <label class="form-label" for="txNome">Nome do filme: </label>
        <input class="form-control" type="text" placeholder="Insira o nome do filme" name="txNome" id="txNome">

        <label class="form-label" for="txAno">Ano: </label>
        <input class="form-control" type="text" placeholder="Insira o ano" name="txAno" id="txAno">



        <label class="form-label" for="txDuracao">Duração: </label>
        <input class="form-control" type="text" placeholder="Insira a duração" name="txDuracao" id="txDuracao">

        <label class="form-label" for="txDescricao">Descrição: </label>
        <textarea class="form-control" placeholder="Insira a duração" name="txDescricao" id="txDescricao"></textarea>

        <input type="submit" value="Salvar">
    </form>

    <!-- <form action="" method="post">
    <label class="form-label" for="txGenero">Genero: </label>
        <input class="form-control" type="text" placeholder="Insira aqui o genero" name="txGenero" id="txGenero">
    </form> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

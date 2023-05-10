<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form class="mb-3" action="./usuario-salvar.php" method="post">
        <label class="form-label" for="txNome">Nome: </label>
        <input class="form-control" type="text" placeholder="Insira o nome" name="txNome" id="txNome">

        <label class="form-label" for="txSobrenome">Sobrenome: </label>
        <input class="form-control" type="text" placeholder="Insira o sobrenome" name="txSobrenome" id="txSobrenome">

        <label class="form-label" for="txEmail">Email: </label>
        <input class="form-control" type="text" placeholder="Insira o email" name="txEmail" id="txEmail">

        <label class="form-label" for="txTelefone">Telefone: </label>
        <textarea class="form-control" placeholder="Insira o telefone" name="txTelefone" id="txTelefone"></textarea>

        <input type="submit" value="Salvar">
    </form>

    <!-- <form action="" method="post">
    <label class="form-label" for="txGenero">Genero: </label>
        <input class="form-control" type="text" placeholder="Insira aqui o genero" name="txGenero" id="txGenero">
    </form> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
<?php include("conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <title>Filmes cadastro</title>
</head>

<body>

    <?php 
        include("header.php");
    ?>


    <section class="container">
        <form class="mb-3" action="./filme-salvar.php" method="post" id="container__cadastro">
            <div>
                <label class="form-label" for="txNome">Nome do filme: </label>
                <input class="form-control" type="text" placeholder="Insira o nome do filme" name="txNome" id="txNome">
            </div>
            
            <div>
            <label class="form-label" for="txAno">Ano: </label>
            <input class="form-control" type="text" placeholder="Insira o ano" name="txAno" id="txAno">
            </div>

            <div>
            <label class="form-label" for="txDuracao">Duração: </label>
            <input class="form-control" type="text" placeholder="Insira a duração" name="txDuracao" id="txDuracao">
            </div>

            <div>
            <label class="form-label" for="txDescricao">Descrição: </label>
            <textarea class="form-control" placeholder="Insira a duração" name="txDescricao" id="txDescricao"></textarea>
            </div>

            <div>
            <label class="form-label" for="txGenero">Genero: </label>
            <input class="form-control" type="text" placeholder="Insira o gênero" name="txGenero" id="txGenero">
            </div>  
            <input type="submit" value="Salvar" class="salvar">
        </form>

    </section>

    <!-- TODO não mostrar o ID e linkar o genero -->
    <section class="container">
        <table class="table">
        <thead>
            <td class="col">Id</td>
            <td class="col">Nome</td>
            <td class="col">Ano</td>
            <td class="col">Duração</td>
            <td class="col">Descrição</td>
            <td class="col"></td>
        </thead>
        <tbody>
                <?php
                    $stmt = $pdo->prepare("select * from filmes");	
                    $stmt ->execute();
                    
                    while($row = $stmt ->fetch(PDO::FETCH_BOTH)){
                    echo "<tr class='celula'>";
                        echo "<td class='col'> $row[0] </td>";						
                        echo "<td class='col'> $row[1] </td>";						
                        echo "<td class='col'> $row[2] </td>";						
                        echo "<td class='col'> $row[3] </td>";											
                        echo "<td class='col'> $row[4] </td>";
                        echo "<td class='col'> 
                                <a href='filme-remover.php?id=$row[0]'> Remover </a>
                            </td>";
                    echo "</tr>";
                    }	
                ?>
        </tbody>
        </table>
        
    </section>

    <!-- <form action="" method="post">
    <label class="form-label" for="txGenero">Genero: </label>
        <input class="form-control" type="text" placeholder="Insira aqui o genero" name="txGenero" id="txGenero">
    </form> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>

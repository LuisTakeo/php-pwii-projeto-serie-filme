<?php 

    if(isset($_FILES["arqimage"])){
        $arqINome = $_FILES["arqimage"]["name"];
        $arqITipo = $_FILES["arqimage"]["type"];
        $arqITamanho = $_FILES["arqimage"]["size"];
        $arqINomeTemp = $_FILES["arqimage"]["tmp_name"];
        $erroImgMarc = $_FILES["arqimage"]["error"];
        $filmeGenero = $_POST["img-genero"];

        if($erroImgMarc==0){

            if(is_uploaded_file($arqINomeTemp)){
                if(move_uploaded_file($arqINomeTemp, "img/Filmes/". $arqINome)){
                    $caminho = $arqINome;
                    echo "Enviado com sucesso. PARABAINS";
                    echo "$caminho $filmeGenero";
                }else{
                    $erro = "Falha ao mover imagem do marcador";
                    echo "$erro";
                }
            }else{
                $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso";
                echo "$erro";
            }

        }else{
            $erro = "Erro no envio : " . $erro;
            echo "$erro";
        }

    }else{
        $erro = "Imagem do marcador enviado não encontrado";
        echo "$erro";
    }




?>
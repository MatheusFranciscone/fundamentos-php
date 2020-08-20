<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imgs/php.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Resultado</title>
</head>

<body>

<div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Atividade de Programação Web III</h1>
                <h5>Selecione a quantidade de colunas para criar uma tabela.</h5>
            </div>
        </div>
    </div>

    <div class=" container border m-5">
        <?php

        extract($_REQUEST, EXTR_OVERWRITE);

        $n = 0;
        echo ("<table class='table'>");
        echo ("<tr> <h1> Tabela de Imagens: </h1> </tr>");

        for ($i = 1; $i <= 20; $i++) {
            # code...

            if ($n == 0) {
                echo ("<tr>");
            }

            echo ("<td class='text-center'> <img src='Imagens/$i.png'> </td>");
            $n++;

            if ($n == $colunas) {
                echo ("</tr>");
                $n = 0;
            }
        }

        echo ("</table>");

        ?>

        <div class="mb-2">
            <input type="submit" value="Voltar" onclick="location.replace('index.php');">
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
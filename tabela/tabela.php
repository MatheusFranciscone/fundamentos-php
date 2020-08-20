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
    <div class=" container border m-5">
        <?php

        //função para receber os parâmetros tanto pelo POST, quanto para o GET e estrai eles
        extract($_REQUEST, EXTR_OVERWRITE);

        if ($dimensao == "uni") {

            echo ("<h1>Tabela Unidimensional com $linhas linha(s): </h1>");
            echo ("<table class='table table-striped table-dark'>");

            for ($i = 1; $i <= $linhas; $i++) {
                # code...

                echo ("<tr> <th> Linha $i </th> </tr>");
            }
            echo ("</table>");

        } else {

            echo ("<h1>Tabela com $linhas linha(s) e $colunas colunas: </h1>");
            echo ("<table class='table table-striped table-dark'>");

            // contador para fazer a quebra de linhas
            $n = 0;

            for ($i = 1; $i <= ($linhas * $colunas); $i++) {
                # code...

                if ($n == 0) {
                    echo ("<tr>");
                }

                echo ("<td> Célula $i </td>");

                $n++;

                if ($n == $colunas) {
                    echo ("</tr>");
                    $n = 0;
                }
            }
            echo ("</table>");
        }

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
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imgs/php.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Atividade Tabela de Imagem</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-success">
        <a class="navbar-brand " href="../index.php">Página Inicial</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../maior/index.php">Ativ.1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../par/index.php">Ativ.2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../boasvindas/index.php">Ativ.3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../total/index.php">Ativ.4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../tabela/index.php">Ativ.5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Ativ.6  <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Atividade de Programação Web III</h1>
                <h5>Selecione a quantidade de colunas para criar uma tabela.</h5>
            </div>
        </div>
    </div>

    <div class="container border m-5">

        <h1>Tabela de Imagens</h1>

        <form action="tabela.php" method="post">


            <p class="font-weight-bold">

                Preencha a Quantidade de Colunas: <input type="number" min="1" max="5" value="1" name="colunas" id="colunas">

            </p>

            <div class="mb-2">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar" onclick="location.reload();">
            </div>

        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
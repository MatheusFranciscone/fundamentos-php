<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imgs/php.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Atividade Tabela</title>
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
                    <a class="nav-link active" href="#">Ativ.5 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ativ.6</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Atividade de Programação Web III</h1>
                <h5>Selecione a dimensão e informe os valores para criar uma tabela.</h5>
            </div>
        </div>
    </div>

    <div class="container border m-5">

        <h1>Montar Tabela</h1>
        <p>Selecione a dimensão:</p>

        <form action="tabela.php" method="post">

            <input type="radio" id="uni" name="dimensao" value="uni" required onclick="Tabelas(this.value)"> <label>Unidimensional (Uma coluna)</label>
            <Br>
            <input type="radio" id="bid" name="dimensao" value="bid" required onclick="Tabelas(this.value)"> <label>Bidimensional (Várias colunas)</label>

            <div id="opcoes" class="w-75 container border m-2 p-2 invisible">

                <p class="font-weight-bold">Preencha as dimensões da tabela: </p>

                <p id="linhas" class="invisible">
                    Quantidade de Linhas: <input type="text" id="qtdlinhas" name="linhas" value="1" min="1" max="10">
                </p>

                <p id="colunas" class="invisible">
                    Quantidade de Colunas: <input type="text" id="qtdcolunas" name="colunas" value="2" min="2" max="10">
                </p>
            </div>

            <div class="mb-2">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar" onclick="location.reload()">
            </div>

        </form>


    </div>

    <script>
        function Tabelas(opcao) {
            if (opcao == "uni") {
                linhas.className = 'visible';
                colunas.className = 'invisible';
            } else {
                linhas.className = 'visible';
                colunas.className = 'visible';
            }

            opcoes.className = 'w-75 container border m-2 p-2 visible';
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>
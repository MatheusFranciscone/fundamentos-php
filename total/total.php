<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imgs/php.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Atividade Total</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Atividade de Programação Web III</h1>
                <h5>Digite os dados e será exibido o valor total do Produto.</h5>
            </div>
        </div>
    </div>

    <div class="container p-5 border border-dark mt-5 col-6">

        <form name="frmtotal" action="total.php" method="POST">

        <?php

            $produto = $_POST['nomep'];
            $valor = $_POST['valor'];
            $quantidade = $_POST['quant'];
            $pagamento = $_POST['pagamento'];

            echo "<h3>Produto: $produto</h3>";
            echo "<h3>Valor: $valor</h3>";
            echo "<h3>Quantidade: $quantidade</h3>";

            if ($pagamento == 'vista'){

                $valorvista = ($valor * $quantidade);
                $valorvistadesc =  $valorvista  * (10 / 100); 
                $valorvistapagardesc = $valorvista - $valorvistadesc;

                echo "<h3>Total: $valorvista </h3>";
                echo "<h3>Total com desconto à vista: $valorvistapagardesc </h3>";
            } else {

                $valorparcel = ($valor * $quantidade);
                $parcel = $valorparcel / 2;
                echo "<h3>Total: $valorparcel </h3>";
                echo "<h3>Total com desconto à vista: 2x de $parcel </h3>";
            }
        ?>

            
        <div class="row text-center mt-3">
                <div class="col-12">
                    <a href="index.php" class="btn btn-success btn-lg">Voltar</a>
                </div>
            </div>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
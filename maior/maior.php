<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../imgs/php.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


    <title>Atividade Maior</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row text-center mt-5">
            <div class="col-12">
                <h1>Atividade de Programação Web III</h1>
                <h5>Digite dois números para verificar qual é maior ou se são iguais.</h5>
            </div>
        </div>
    </div>

    <div class="container p-5 border border-dark mt-5 col-6">

        <form name="frmparimpar" action="parimpar.php" method="POST">

            <div class="text-center">
                <h1>Resultado:</h1>
            </div>

            <div class="row text-center mt-4">

                <div class="col-12">
                    <div class="form-group tex-center">

                        <?php
                        $numero1 = $_POST['num1'];
                        $numero2 = $_POST['num2'];

                        if ($numero1 == $numero2) {

                            echo "<h3>$numero1 e $numero2 são iguais!</h3>";

                        } else if ($numero1 > $numero2) {

                            echo "<h3>$numero1 é maior que $numero2!</h3>";

                        } else {

                            echo "<h3>$numero2 é maior que $numero1!</h3>";

                        }
                        ?>

                    </div>
                </div>
            </div>
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
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

    <div class="container border mt-5">

        <form name="frmtotal" action="total.php" method="POST">

            <h2>Preencha todos os dados do Produto</h2>


            Nome do Produto: <input type="text" id="nomep" name="nomep" required>
            <br><br>
            Valor: <input type="number" id="valor" name="valor" required>
            <br><br>
            Quantidade: <input type="number" id="quant" name="quant" required>
            <br><br>
            Pagamento:
            <br>
            <input type="radio" name="pagamento" id="pagamento" value="vista" required>
            <label>À vista (10% desconto)</label>
            <br>
            <input type="radio" name="pagamento" id="pagamento" value="parcel" required>
            <label>Parcelado em 2x</label>


            <div class="mb-2 mt-3">
                <input type="submit" value="Enviar">
                <input type="reset" value="Limpar" onclick="location.reload()">
                <input type="reset" value="Voltar" onclick="location.replace('../index.php');">
            </div>
        </form>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>
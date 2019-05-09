<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado IMC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        html, body{
            height: 500px;
            
        }
    </style>
</head>
<body>
    <div class="container mt-1 h-100">
        <div class="row justify-content-center h-75">
            <div class="col-4 bg-info rounded">
                <h2 class="text-center">Resultado</h2>
                <?php 
                    $resultado = $_POST["peso"] / $_POST["altura"] ** 2;
                    if(is_nan($resultado)):
                        echo "<p class=\"text-justify\">Peso ou altura inválido</p>";
                    else:
                        $resultado = number_format($resultado, 2);
                        if($resultado < 18.5){
                            echo "<p class=\"text-justify bg-white text-fluid rounded\">Seu IMC: $resultado</p>";
                        }elseif($resultado >= 18.5 && $resultado <= 24.9){
                            echo "<p class=\"text-justify bg-white text-fluid rounded\">Seu IMC: $resultado</p>";
                        }elseif($resultado >= 25 && $resultado <= 29.9){
                            echo "<p class=\"text-justify bg-white text-fluid rounded\">Seu IMC: $resultado</p>";
                        }elseif($resultado >= 30 && $resultado <= 34.9){
                            echo "<p class=\"text-justify bg-white text-fluid rounded\">Seu IMC: $resultado</p>";
                        }elseif($resultado >= 35 && $resultado <= 39.9){
                            echo "<p class=\"text-justify bg-white text-fluid rounded\">Seu IMC: $resultado</p>";
                        }else{
                            echo "<p class=\"text-justify bg-white text-fluid rounded\">Seu IMC: $resultado</p>";
                        }
                    endif
                ?>
                <form action="index.php" method="POST">
                    <button type="submit" class="btn btn-danger mt-2">Calcular Novamente</button>
                </form>
            </div>
            <div class="col-6 bg-info rounded">
                <img src="https://geracaofit.com/wp-content/uploads/2016/07/tabela-imc.jpg" class="img-fluid rounded mt-2">
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
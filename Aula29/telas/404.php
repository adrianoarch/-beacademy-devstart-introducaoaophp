<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erro</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<?php
$mensagem = "Desculpe, não foi possível encontrar a página solicitada.";
?>
<body class="vh-100">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div>
                    <h1 class="fs-3 fw-light text-center"><?php echo $mensagem; ?></h1>
                    <div class="text-center d-grid">
                        <picture>
                            <img class="img-fluid" style="width:35vw" src="./telas/images/error.svg" alt="Imagem de um ratinho comendo queijo olhando para o número de erro 404">
                        </picture>
                        <p>
                            <a href="/" class="btn text-light" style="background:#6C63FF">Voltar para a página inicial</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
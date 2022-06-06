<?php

$url = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h1 class="display-5">
                    <?php echo match ($url) {
                        '/' => 'Home',
                        '/login' => 'Login',
                        '/contato' => 'Contato',
                        default => 'Página não encontrada'
                    }; ?>
    
</body>
</html>
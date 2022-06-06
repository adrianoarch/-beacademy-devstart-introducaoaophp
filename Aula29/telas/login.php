<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./telas/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center g-5 mt-2">
        <div class="col-sm-4 col-md-8 text-center">
            <img class="img-fluid w-75" src="./telas/images/undraw.svg" alt="Desenho de um pessoa sentada em frente a um computador">
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mb-3">Login</h3>
                    <p class="text-muted">
                        Digite seus dados para fazer login no sistema
                    </p>
                 </div>
                <div class="card-body">
                    <form action="login.php" method="post">
                        <div class="form-group my-3">
                                <!-- <label for="email">E-mail</label> -->
                            <input type="email" name="email" id="email" class="form-control" placeholder="Digite seu e-mail">
                        </div>
                        <div class="form-group my-3">
                                <!-- <label for="senha">Senha</label> -->
                            <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha">
                        </div>
                        <div class="form-group my-3 d-flex">
                            <div class="flex-grow-1">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input" checked><span class="text-muted px-2 align-self-center">Lembre-me</span>
                            </div>
                            <div class="text-muted">
                                <a class="link-secondary" href="#">Esqueci a senha</a>
                            </div>
                        </div>
                         <div class="form-group d-grid my-4">
                            <button type="submit" class="btn text-light" style="background:#6C63FF">Entrar</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="mt-3 p-2">
                <p class="text-muted fs-5">
                    - Ou faça login com -
                </p>
                <div>
                    <a href="#" class="mr-2 display-4">
                        <i class="bx bxl-facebook-circle button__icon"></i></a>
                    <a href="#" class="mr-2 display-4">
                        <i class='bx bxl-google button__icon' style='color:#e40d0c'></i></a>
                    <a href="#" class="mr-2 display-4">
                        <i class='bx bxl-twitter button__icon' style='color:#2c77bb'></i></a>
                </div>
            </div>
        </div>
    </div>
    





    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
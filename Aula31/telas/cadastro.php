    <div class="container">
        <div class="row justify-content-center g-5 m-2 align-items-center">
            <div class="col-sm-4 col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-3 text-center">Cadastro</h3>
                        <p class="text-muted">
                            Digite seus dados para fazer cadastro no sistema
                        </p>
                    </div>
                    <div class="card-body mt-2">
                        <form action="cadastro.php" method="post">
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder=" Digite seu nome">
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" id="confirmaSenha" name="confirmaSenha" placeholder="Confirmar Senha">
                            </div>
                            <div class="form-group d-grid mb-3">
                                <button class="btn" style="background:#6C63FF" type="submit">
                                    <span class="box-icon text-light">
                                        <i class="bx bx-user"></i>
                                    </span>
                                    <span class="box-label text-light">
                                        Cadastrar
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 text-center">
                <img class="img-fluid" src="./telas/images/mobile.svg" style="width:35vw" alt="Desenho de um pessoa usando o celular com outro celular ao fundo">
            </div>
        </div>
    </div>
<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

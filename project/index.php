<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Gerenciamente de Funcionários</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">        
        <link rel="stylesheet" type="text/css" href="css/style_out.css">
    </head>
    <body>
        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <img src="./assets/img/login.svg" alt="imagem login" class="img-fluid px-0 pt-5">
                    </div>
                    <div class="col-lg-7 px-5 pt-5">
                        <div id="loginPrincipal">
                            <h1 class="font-weigth-bold py-3">Fazer Login</h1>
                            <h4>Bem-vindo ao seu gerenciador de funcionários</h4>
                            <form action="login.php" method="post">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="text" name="usuario" placeholder="Login:" class="form-control my-4 p-3">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" name="senha" placeholder="Senha" class="form-control my-3 p-3">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <button type="submit" class="btn1 mt-3 mb-5">Logar</button>
                                    </div>
                                </div>
                                <a href="esqueceu_senha.php">Esqueceu a senha?</a>
                                <p>Não tem uma conta? <a href="cadastro.php">Crie uma conta aqui</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer style="font-size: 11px; text-align: center; margin-top: 18px">
            <p>Desenvolvido por Júlio Aquino e Rafael Sousa. Programação para web - Universidade São Francisco,
                Campinas-SP.
            </p>
            <copyright>
                All rights reserved.
            </copyright>
        </footer>
    </body>
</html>
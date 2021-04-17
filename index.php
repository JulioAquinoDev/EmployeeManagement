<html>
    <head>
        <title>Gerenciamente de Funcionários</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">    
    </head>
    
    <body class="text-center">
        <main class="form-signin px-3">
            <div class="container base-login">
                <form method="post" action="login.php">
                    <fieldset>
                        <h1 class="h3 mb-3 fw-normal">Login</h1>
                        <div class="form-floating">
                            <input type="text" name="usuario" class="form-control" id="floatingInput" maxlength="25" placeholder="name.0000" />
                            <label for="txtUsuario floatingInput">Usuário:</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="senha" class="form-control" id="floatPassword" placeholder="Senha" />
                            <label for="floatingPassword">Senha:</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me" />
                                Lembrar-me / 
                            </label>
                        </div>
                        <button type="submit" class="w-100 btn-lg btn btn-outline-primary">Entrar</button>
                    </fieldset>
                </form>
            </div>
        </main>
    </body>
</html>
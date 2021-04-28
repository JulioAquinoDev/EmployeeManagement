<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap"
        rel="stylesheet">

    <title>Gerenciador funcionários!</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: rgb(211, 218, 218);
    }

    .row {
        background: #fff;
        border-radius: 30px;
        box-shadow: 12px 12px 22px grey;
    }

    .btn1 {
        border: none;
        outline: none;
        height: 50px;
        width: 100%;
        background-color: rgba(0, 176, 255, 1);
        color: #fff;
        border-radius: 4px;
        font-weight: bold;
    }

    .btn1:hover {
        background-color: #fff;
        border: 1px solid;
        color: #000;
    }
    </style>
</head>

<body>

    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-4">
                    <!-- <img src="./assets/img/login.svg" alt="imagem login" class="img-fluid px-0 pt-5"> -->
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h1 class="font-weigth-bold py-3">Alterar senha</h1>
                    <form action="alterarU.php" method="post">
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="email" name="email" placeholder="Digite seu email" class="form-control my-4 p-3">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>

</body>

<footer style="font-size: 11px; text-align: center; margin-top: 18px">

    <p>Desenvolvido por Júlio Aquino e Rafael Sousa. Programação para web - Universidade São Francisco,
        Campinas-SP.
    </p>
    <copyright>
        All rights reserved.
    </copyright>

</footer>

</html>
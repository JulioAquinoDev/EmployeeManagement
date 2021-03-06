<!doctype html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Ubuntu:wght@300;400;500;700&display=swap"
            rel="stylesheet">
        <title>Gerenciador funcionários!</title>
        <link rel="stylesheet" type="text/css" href="css/style_out.css">
    </head>
    <body>
        <section class="Form my-4 mx-5">
            <div class="container">
                <div class="row no-gutters">
                
                    <div class="col-lg-12 px-5 pt-5 text-center">
                    <?php
                    require_once 'usuarios.php';	
                    if(isset($_POST['email'])){
                    $us = new usuarios();
                    $us->setEmail($_POST['email']);
                    $resp=$us->buscarTodosEmail();
                    ?>
                        <h3 class="font-weigth-bold py-3" >Alterar senha de usuário</h3>
                        <form action="alterarU2.php" method="POST">
                            <table class="table table-striped">
                                <tr><td><p>E-mail:</td><td><p><input type="text" value="<?php echo $resp['email']?>" name="email" readonly="true" class="form-control my-4 p-3"></p></td></tr>
                                <tr><td><p>Senha:</td><td><p><input type="text" value="<?php echo $resp['senha']?>" name="senha" class="form-control my-4 p-3"></p></td></tr> 
                            </table>
                            <p ><input class='btn1 mt-3 mb-5 btn-outline-primary'd type="submit" value="Alterar"></p>
                        </form>
                    <?php
                    }
                ?>
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
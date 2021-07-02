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
						<?php
							require_once 'usuarios.php';
							if(isset($_POST['nomeC'])){
								$user = new usuarios();
								$user->setNomeUsuario($_POST['nomeC']);
								$user->setLogin($_POST['loginC']);
								$user->setSenha($_POST['senhaC']);
								$user->setEmail($_POST['emailC']);
								$user->setTelefone($_POST['telefoneC']);

                                $email = $_POST['emailC'];

                                $conn = new PDO("mysql:host=localhost;dbname=gerenc_empresa","root","");
                                $stmt=$conn->prepare("select * from Usuarios where email='$email'");
                                $stmt->execute();

                                if($stmt->rowCount() == 1){
                                    ?>
                                    <script>
                                    window.alert("E-mail já cadastrado!");
                                    window.location.href="cadastro.php";
                                    </script>
                                    <?php
                                }else{
                                    if($user->inserirU()){
                                        ?>
                                        <script>
                                        window.alert("Usuario inserido com sucesso!");
                                        window.location.href="index.php";
                                        </script>
                                        <?php
                                    }else{
                                        ?>
                                        <script>
                                        window.alert("Erro ao cadastrar usuário!");
                                        window.location.href="cadastro.php";
                                        </script>
                                        <?php
                                    }
							    }
                            }
						?>	
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
<!DOCTYPE html>
<?php
    require_once "verifica.php";
?>
<html>
    <head>
        <title>Gerenciamento de Funcionários</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style_in.css">
    </head>
    <body>
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">        
            <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3">           
                <?php          
                    echo "<p>Gerenciamento de funcionários</p>";
                    echo "<p>Bem-vindo, ".$_SESSION['nameUser']."!</p>";
                ?>
            </div>    
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <?php
                    echo "<a href='sair.php'><button class='btnsair btn btn-outline-light'><div style='color:#000'><img src='assets/img/exit.svg' width='16' height='16' fill='currentColor' class='bi bi-box-arrow-right' viewBox='0 0 16 16'>Sair</div></button></a>";            
                    ?>
                </li>
            </ul>                
        </header>
        <div class="px-4 py-5 my-2 text-center">
			<?php
				require_once 'funcionarios.php';
				require_once "verifica.php";

				if(isset($_POST['nomeF'])){
					$func = new funcionarios();
					$func->setNomeFuncionario($_POST['nomeF']);
					$func->setDataNascimento(date("Y-m-d", strtotime($_POST['datanascF'])));
					$func->setCPF($_POST['cpfF']);
					$func->setSalario($_POST['salarioF']);
					$func->setCargo($_POST['cargoF']);
					$func->setSetor($_POST['setorF']);
					$func->setId_Experiencia($_POST['experienciaF']);
					$func->setId_Usuario($_SESSION['codUser']);
                    
                    $cpf = $_POST['cpfF'];

                    $conn = new PDO("mysql:host=localhost;dbname=gerenc_empresa","root","");
                    $stmt=$conn->prepare("select * from Funcionarios where cpf='$cpf'");
                    $stmt->execute();

                    if($stmt->rowCount() == 1){
                        ?>
                        <script>
                        window.alert("CPF já cadastrado!");
                        window.location.href="inserir.php";
                        </script>
                        <?php
                    }else{
                        if($func->inserirF()){
                            ?>
                            <script>
                            window.alert("Funcionario inserido com sucesso!");
                            window.location.href="home.php";
                            </script>
                            <?php
                        }else{
                            ?>
                            <script>
                            window.alert("Erro ao cadastrar Funcionario!");
                            window.location.href="inserir.php";
                            </script>
                            <?php
                        }
                    }	
				}
			?>
		</div>
    </body>
</html>
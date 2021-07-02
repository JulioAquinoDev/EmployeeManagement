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

				if(isset($_POST['nome'])){
					$fc = new funcionarios();
					$fc->setIdFuncionario($_POST['id']);
					$fc->setNomeFuncionario($_POST['nome']);
					$fc->setDataNascimento(date("Y-m-d", strtotime($_POST['datanasc'])));
					$fc->setCPF($_POST['cpf']);
					$fc->setSalario($_POST['salario']);
					$fc->setCargo($_POST['cargo']);
					$fc->setSetor($_POST['setor']);
					if($fc->alterar()){
                        ?>
                        <script>
						window.alert("Funcionario alterado com sucesso!");
                        </script>
                        <?php
					}else{
                        ?>
                        <script>
						window.alert("Erro ao alterar dados do Funcionário!");
                        </script>
                        <?php
					}
                    ?>
                    <script>
					window.location.href="home.php";
                    </script>
                    <?php
				}
			?>
		</div>
    </body>
</html>
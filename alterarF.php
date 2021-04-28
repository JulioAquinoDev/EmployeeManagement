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
        <script src="js/script.js"></script>
        <style type="text/css">
            * {margin: 0;padding: 0;box-sizing: border-box;}
            body{background-color: rgb(211, 218, 218);;}
            .base-login{width: 400px;margin-top: 100px;}
            .row2 {border-radius: 30px;box-shadow: 12px 12px 22px grey;}
            .btnb{width:150px;height:100px;border-radius:20px;}
            .btns{border-radius:50%;}
            .btnhm{width:80px;}
            .tablef{font-size: 16px;}
            .menu{background-color: #FFFFFF;width:1200px;display:flex;}
            .btnsair {background-color:#ECF0F1;}
        </style>
    </head>

    <body>

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">        
            <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3">           
                <?php          
                    echo "<p>Gerenciamento de funcionários</p>";
                    echo "<p>Bem vindo, ".$_SESSION['nameUser']."!</p>";
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
                if(isset($_GET['idfuncionario'])){
                $fc = new funcionarios();
                $fc->setIdFuncionario($_GET['idfuncionario']);
                $resp=$fc->buscarTodosId();
                ?>
                    <h3>Alterar dados do funcionário</h3>
                    <form action="alterarF2.php" method="POST">
                        <table class="table table-striped">
                            <tr><td><p>Id:</td><td><p><input type="number" value="<?php echo $resp['idfuncionario']?>" name="id" readonly="true"></p></td></tr>
                            <tr><td><p>Nome:</td><td><p><input type="text" value="<?php echo $resp['nomefuncionario']?>" name="nome" required></p></td></tr>
                            <tr><td><p>Data de Nascimento:</td><td><p><input type="date" value="<?php echo $resp['datanascimento']?>" name="datanasc"></p></td></tr>
                            <tr><td><p>CPF:</td><td><p><input type="text" value="<?php echo $resp['cpf']?>" name="cpf"></p></td></tr>
                            <tr><td><p>Salario:</td><td><p><input type="text" value="<?php echo $resp['salario']?>" name="salario"></p></td></tr>
                            <tr><td><p>Cargo:</td><td><p><input type="text" value="<?php echo $resp['cargo']?>" name="cargo"></p></td></tr>
                            <tr><td><p>Setor:</td><td><p><input type="text" value="<?php echo $resp['setor']?>" name="setor"></p></td></tr>  
                        </table>
                        <p ><input class='btn btnhm btn-outline-primary'd type="submit" value="Alterar"></p>
                    </form>
                <?php
                }
            ?>

        </div>
    </body>
</html>
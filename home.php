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
            .btns{border-radius:10%;}
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
                    
            <div id="tabelaFunc" class="table-responsive row2">
                <?php
                    require_once "funcionarios.php";
                    $funcio = new funcionarios();
                    $resp = $funcio->buscarTodos();
                    echo"<table class='table table-striped table-dark'>";
                    echo"<thead>";
                    echo"<tr>";
                    echo"
                    <th colspan='2'>
                    <a href='inserir.php' class='btn bthm btn-outline-success' alt='Inserir novo funcionário'>Inserir</a>
                    </th>
                    <th>ID</th><th>Nome</th><th>Data de Nascimento</th>";
                    echo"<th>CPF</th><th>Cadastro</th><th>Salario</th><th>Cargo</th>";
                    echo"<th>Setor</th><th>Experiência</th><th>Responsável</th>";
                    echo"</tr>";
                    echo"</thead>";
                    foreach($resp as $linha){
                        echo"<tr>";
                        echo"<td><a href=alterarF.php?idfuncionario=".$linha['idfuncionario']." class='btn btnhm btn-outline-primary'>Alterar</a></td>";
                        echo"<td><a href=excluirF.php?idfuncionario=".$linha['idfuncionario']." class='btn btnhm btn-outline-danger'>Excluir</a></td>";
                        echo"<td>".$linha['idfuncionario']."</td>";
                        echo"<td>".$linha['nomefuncionario']."</td>";
                        echo"<td>".date('d/m/Y',strtotime($linha['datanascimento']))."</td>";
                        echo"<td>".substr($linha['cpf'],0,3).'.'.substr($linha['cpf'],3,3).'.'.substr($linha['cpf'],6,3).'-'.substr($linha['cpf'],9,2)."</td>";
                        echo"<td>".date('d/m/Y',strtotime($linha['cadastro']))."</td>";
                        echo"<td>"."R$ ".$linha['salario']."</td>";
                        echo"<td>".$linha['cargo']."</td>";
                        echo"<td>".$linha['setor']."</td>";
                        echo"<td>".$linha['tipo']." de ".$linha['quantidade']." ".$linha['tempo']."</td>";
                        echo"<td>".$linha['nomeusuario']."</td>";
                        echo"</tr>";
                    }
                    echo"</table>";
                ?>
            </div>                

        </div>
    </body>
</html>
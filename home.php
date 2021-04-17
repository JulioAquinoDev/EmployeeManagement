<!DOCTYPE html>
<?php
    session_start();
    include "conexao.php";
?>
<html>
    <head>
        <title>Gerenciamento de Funcionários</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script src="js/script.js"></script>
    </head>

    <body>

        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">        
            <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3">           
                <?php           
                    echo "<p>Gerenciamento de funcionários</p>";
                    echo "<p>Bem vindo, ".$_SESSION['user']."!</p>";
                ?>
            </div>    
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <?php
                    echo "<p><a class='nav-link' href='index.php'>Sair</a></p>"               
                    ?>
                </li>
            </ul>                
        </header>

        <div class="container-fluid">
            <div class="row">

                <nav id="sidbarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="position-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item"><p id="bt_exibir" onclick="mudar('tabelaFunc')">Exibir</p></li>
                            <li class="nav-item"><p>Inserir</p></li>                            
                            <li class="nav-item"><p>Alterar</ps=></li>
                            <li class="nav-item"><p>Remover</p=></li>
                        </ul>
                    </div>
                </nav>                     
                
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div id="tabelaFunc" class="table-responsive" style="display:none">
                        <?php
                            require_once 'funcionarios.php';
                            $funcio = new funcionarios();
                            #$resp = $funcio->buscarTodos();
                            echo"<table class='table table-dark table-sm'>";
                            echo"<thead>";
                            echo"<tr>";
                            echo"<th>ID</th><th>Nome</th><th>Data de Nascimento</th>";
                            echo"<th>CPF</th><th>Data do Cadastro</th><th>Cargo</th>";
                            echo"<th>Setor</th><th>Experiência</th><th>Responsável</th>";
                            echo"</tr>";
                            echo"</thead>";
                            echo"</table>";
                        ?>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>
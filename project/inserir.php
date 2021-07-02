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
            <div id="inserirDados">
                <h3>Inserir dados do funcionários</h3>
                <form action="inserirF.php" method="post">
                <p><label for="nomeF">Nome:</label><br />
                <input type="text" name="nomeF" required></p>
                <p><label for="datanascF">Data de Nascimento:</label><br />
                <input type="date" name="datanascF"></p>
                <p><label for="cpfF">CPF:</label><br />
                <input type="text" name="cpfF"></p>
                <p><label for="salarioF">Salario:</label><br />
                <input type="text" name="salarioF" placeholder="5000.00"></p>
                <p><label for="cargoF">Cargo:</label><br />
                <input type="text" name="cargoF"></p>
                <p><label for="setorF">Setor:</label><br />
                <input type="text" name="setorF"></p>
                <p><label for="experienciaF">Experiência:</label><br />
                <select name="experienciaF">
                    <option>Selecione:</option>
                    <?php
                        $conn = new PDO("mysql:host=localhost;dbname=gerenc_empresa","root","");
                        $stmt=$conn->prepare("select * from experiencia");
                        $stmt->execute();
                        $resp=$stmt->fetchAll();
                        foreach($resp as $linha){?>
                            <option value="<?php echo $linha['idexperiencia'];?>">
                                <?php echo $linha['tipo']." ".$linha['quantidade']." ".$linha['tempo']; ?>
                            </option>
                        <?php
                        }?>
                </select></p>
                <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
                </form>
            </div>
        </div>
    </body>
</html>
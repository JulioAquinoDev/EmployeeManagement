<?php
    require_once 'funcionarios.php';
    require_once 'experiencia.php';
    require_once 'usuarios.php'
    $data = date('Y-m-d',strtotime(str_replace('-',$_POST['datanascF'])));
    $usa = $_POST['idusu'];
    if(isset($_POST['nomeF'])){
		$func = new funcionarios();
		$func->setNomeFuncionario($_POST['nomeF']);
		$func->setDataNascimento($data);
		$func->setCPF($_POST['cpfF']);
        $func->setSalario($_POST['salarioF']);
        $func->setCargo($_POST['cargoF']);
        $func->setSetor($_POST['setorF']);
        $func->setId_Experiencia($_POST['experienciaF']);
        $func->setId_Usuario($usa);

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
			   window.location.href="home.php";
			</script>
			<?php
		}
	}
?>

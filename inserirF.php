<?php
    require_once 'funcionarios.php';
	$data = $_POST['datanascF'];
	$dt = $data->format('Y-m-d');
	
    if(isset($_POST['nomeF'])){
		$func = new funcionarios();
		$func->setNomeFuncionario($_POST['nomeF']);
		$func->setDataNascimento($_POST['datanascF']);
		$func->setCPF($_POST['cpfF']);
        $func->setSalario($_POST['salarioF']);
        $func->setCargo($_POST['cargoF']);
        $func->setSetor($_POST['setorF']);
        $func->setId_Experiencia($_POST['experienciaF']);

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

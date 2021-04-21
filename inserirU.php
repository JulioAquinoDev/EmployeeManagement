<?php
    require_once 'usuarios.php';
    if(isset($_POST['nomeC'])){
		$user = new usuarios();
		$user->setNomeUsuario($_POST['nomeC']);
		$user->setLogin($_POST['loginC']);
		$user->setSenha($_POST['senhaC']);
        $user->setEmail($_POST['emailC']);
        $user->setTelefone($_POST['telefoneC']);
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
?>

<?php
    $host = 'localhost';
    $user = 'root';
    $senha_bd = '';
    $bd = 'gerenc_empresa';
    
    $conexao = mysqli_connect($host,$user,$senha_bd,$bd) or die ('Não foi possivél conectar.');
?>

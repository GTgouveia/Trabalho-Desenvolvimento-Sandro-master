<?php

 if (isset($_POST['cli_nome'])) {
	$cli_nome = $_POST['cli_nome'];
    $cli_endRua = $_POST['cli_endRua'];
    $cli_endComplemento = $_POST['cli_endComplemento'];
    $cli_endNum = $_POST['cli_endNum'];
    $cli_endBairro = $_POST['cli_endBairro'];
    $cli_endCEP = $_POST['cli_endCEP'];
    $cli_email = $_POST['cli_email'];
    $cli_telefone = $_POST['cli_telefone'];
    $loj_Codigo = $_POST['loj_Codigo'];

    $conexao = mysqli_connect("localhost","root","","BDMFDS") or die (mysql_error());
    $conexao->query("insert into clientes('Cli_codigo', 'cli_nome', 'cli_endRua', 'cli_endComplemento', 'cli_endNum', 'cli_endBairro', 'cli_endCEP', 'cli_email', 'cli_telefone', 'loj_Codigo') values(null, '$cli_nome', '$cli_endRua', '$cli_endComplemento', '$cli_endNum', '$cli_endBairro', '$cli_endCEP', '$cli_email', '$cli_telefone', '$loj_Codigo')");

  header("Location:/cadastroCliente.php");
  die();
 }
?>
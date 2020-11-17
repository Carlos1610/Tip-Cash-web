<?php 
	include 'conexao.php'; 
	$sql = 'INSERT INTO usuario VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
	$s = $_POST['senhaC'];
	$n = $_POST['nomeC'];
	$e = $_POST['emailC'];
	$cel1 = $_POST['cel1'];
	$cel2 = $_POST['cel2'];
	$CPF = $_POST['CPF'];
	$V = 0;
	$P;
	sha1($s);
	$stmt  = mysqli_prepare($con, $sql);
	if($stmt == false) 
		{
			die("<pre>".mysqli_error($con).PHP_EOL.$sql."</pre>");
		}
	mysqli_stmt_bind_param($stmt, "isssdsss", $P, $n, $e, $s, $v, $cel1, $cel2, $CPF);
	if(mysqli_stmt_execute($stmt)){
		echo 'registros inserido com sucesso';
		header('Status: 301 Moved Permanently', false, 301);
		header('Location: index.php');
	}
	else
	{
		echo mysqli_error($con);
		echo "erro no cadastro";
	}
?>
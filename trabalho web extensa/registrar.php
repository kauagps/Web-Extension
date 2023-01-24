<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql = mysqli_connect('localhost', 'root', '', 'kauagab', 3306);
	if(!$sql){
		die("problema de conecçao");
	}
	$registrar = "INSERT INTO usuario VALUES(null, '$nome', '$email', '$senha', '0')";
	if(mysqli_query($sql, $registrar)){
		header('Location: hhome.html');
	}
	else{
		echo "problema com registro";
	}
?>
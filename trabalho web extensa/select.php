<?php
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$login = False;
	$sql = mysqli_connect('localhost', 'root', '', 'kauagab', 3306);
	if(!$sql){
		die("erro de conecção");
	}

	$rec = "SELECT * FROM usuario";
	$result = mysqli_query($sql, $rec);
	if (mysqli_num_rows($result) > 0) {
		while ($linha = mysqli_fetch_assoc($result)) {
			if(($linha['senha'] == $senha) and ($linha['email'] == $email)){
				echo "login efetuado";
				session_start();
				$_SESSION['nome'] = $linha['nome'];
				$_SESSION['biblioteca'] = $linha['biblioteca'];
				$_SESSION['id'] = $linha['id'];
				header('Location: hhome.html');
				$login = True;
			}
		}
	}
	if($login == False){
		echo "email ou senha errada";
	}

?>
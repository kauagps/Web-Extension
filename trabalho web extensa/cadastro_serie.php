<?php
	session_start();
	$id_usuario = $_SESSION['id'];
	$biblioteca_usuario = $_SESSION['biblioteca'];

	$imagem = $_FILES['imagem']['name'];
	if (move_uploaded_file($_FILES['imagem']['tmp_name'], "imagens_series/" . $imagem)){
		echo "arquivo movido";
	}
	else{
		echo "erro no upload";
	}

	$nome = $_POST['nome'];
	$temporada = $_POST['temporada'];
	$episodio = $_POST['episodio'];
	$detalhes = $_POST['detalhes'];

	$conect = mysqli_connect('localhost', 'root', '', 'kauagab', 3306);
	if (!$conect) {
		die("problema de conexão");
	}

	$sql_insert = "INSERT INTO biblioteca VALUES (null, '$imagem', '$nome', '$temporada', '$episodio', '$detalhes', '0', '0')";

	if(mysqli_query($conect, $sql_insert)){
		echo "insereido com sucesso";
		$id_serie_cadastrada = "SELECT AUTO_INCREMENT FROM information_schema.tables WHERE table_name = 'biblioteca'";
		$id_serie_cadastrada = (mysqli_query($conect, $id_serie_cadastrada));
		while ($linha = mysqli_fetch_assoc($id_serie_cadastrada)) {
			$id_serie_cadastrada_1 = $linha['AUTO_INCREMENT'];
		}

		$id_serie_cadastrada_2 = $id_serie_cadastrada_1 - 1;
		$update_usuario = "UPDATE usuario SET biblioteca= '$biblioteca_usuario $id_serie_cadastrada_2' WHERE id= $id_usuario";
		if (mysqli_query($conect, $update_usuario)) {
			echo "<br>updeitado";
			$seeion_biblioteca = $biblioteca_usuario . " " . $id_serie_cadastrada_2;
			$_SESSION['biblioteca'] = $seeion_biblioteca;
			header('Location: biblioteca.php');
		}

	}
	else{
		echo "deu ruim";
	}
?>
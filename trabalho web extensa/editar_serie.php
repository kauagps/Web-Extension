<?php 
	$conexao = mysqli_connect('localhost', 'root', '', 'kauagab', 3306);
	if (!$conexao) {
		die("deu B.O ai");
	}

	/*antigos valores*/
	$id_serie = $_COOKIE['id_serie'];
	$imagem_serie = $_COOKIE['imagem_serie'];
	$nome_serie = $_COOKIE['nome_serie'];
	$temporada_serie = $_COOKIE['temporada_serie'];
	$episodio_serie = $_COOKIE['episodio_serie'];
	$detalhes_serie = $_COOKIE['detalhes_serie'];
	$qnt_episodios_serie = $_COOKIE['qnt_episodios_serie'];
	$qnt_temporadas_serie = $_COOKIE['qnt_temporadas_serie'];


	if (isset($_GET['excluir'])) {
		$sql = "DELETE FROM biblioteca WHERE id=$id_serie";
		if (mysqli_query($conexao, $sql)) {
			header('Location: biblioteca.php');
		}
		else{
			die("problema de exclusao");
		}
	}

	/*novos valores*/
	$imagem = $_FILES['imagem']['name'];
	$nome = $_POST['nome'];
	$qnt_temporadas = $_POST['qnt_temporadas'];
	$qnt_episodios = $_POST['qnt_episodios'];
	$detalhes = $_POST['detalhes'];
	$temporada = $_POST['temporada'];
	$episodio = $_POST['episodio'];

	if (($imagem == $imagem_serie) and ($nome == $nome_serie) and ($temporada == $temporada_serie) and ($episodio == $episodio_serie) and ($detalhes == $detalhes_serie) and ($qnt_episodios == $qnt_episodios_serie) and ($qnt_temporadas == $qnt_temporadas_serie)) {
		header('Location: biblioteca.php');
	}

	$sql = "UPDATE biblioteca SET imagem='$imagem_serie', nome='$nome', qnt_episodios='$qnt_episodios', qnt_temporadas='$qnt_temporadas', detalhes='$detalhes', temporada='$temporada', episodio='$episodio' WHERE id=$id_serie";

	if (mysqli_query($conexao,$sql)) {
		echo "deu bom ai tio";
		header('Location: biblioteca.php');
	}
	else{
		echo"deu bosta na sql ai";
	}
?>
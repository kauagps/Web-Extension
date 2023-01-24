<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="cadastro_serie.css">
</head>
<body>
	<div id="meio">
		<?php
		setcookie("id_serie", $id_serie = $_GET['id_serie'], time()+3600);
		setcookie("imagem_serie", $imagem = $_GET['imagem'], time()+3600);
		setcookie("nome_serie", $nome = $_GET['nome'], time()+3600);
		setcookie("qnt_temporadas_serie", $qnt_temporadas = $_GET['qnt_temporadas'], time()+3600);
		setcookie("qnt_episodios_serie", $qnt_episodios = $_GET['qnt_episodios'], time()+3600);
		setcookie("detalhes_serie", $detalhes = $_GET['detalhes'], time()+3600);
		setcookie("episodio_serie", $episodio = $_GET['episodio'], time()+3600);
		setcookie("temporada_serie", $temporada = $_GET['temporada'], time()+3600);

		echo"<div id='titulo'>";
			echo"<h1>Editar ".$nome."</h1>";
		echo"</div>";
		echo "<form method='POST' action='editar_serie.php' enctype='multipart/form-data'>";
			echo"imagem";/*pensando em colocar <img> aqi */
			echo"<input type='file' name='imagem' value='".$imagem."'>";
			echo"<br>";
			echo"nome";
			echo"<input type='text' name='nome' value='".$nome."'>";
			echo"<br>";
			echo"quantidade de temporada";
			echo"<input type='number' name='qnt_temporadas' value='".$qnt_temporadas."'>";
			echo"<br>";
			echo"quantidade de episodio";
			echo"<input type='number' name='qnt_episodios' value='".$qnt_episodios."'>";
			echo"<br>";
			echo"temporada";
			echo"<input type='number' name='temporada' value='".$temporada."'>";
			echo"<br>";
			echo"episodio";
			echo"<input type='number' name='episodio' value='".$episodio."'>";
			echo"<br>";
			echo"detalhes";
			echo"<input type='text' name='detalhes' value='".$detalhes."'>";
			echo"<br>";
			echo"<div id='input_button'>";
				echo"<input type='submit' name='ENTRAR' value='ENTRAR' id='botao'>";
			echo"</div>";
		echo"</form>";
		?>
		<p id="castro">Nao possui uma conta?</p>
		<p id="linkcadastro"><a href="registrar.html">cadastrar-se aqui</a></p>
		<a href="editar_serie.php?excluir=True">Excluir Serie!!</a>
	</div>
</body>
</html>
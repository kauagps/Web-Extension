<?php 
	session_start();
	$series_usuario = (explode(' ', $_SESSION['biblioteca']));

	$conectar = mysqli_connect('localhost', 'root', '', 'kauagab', 3306);
	if (!$conectar) {
		die("problema de conxão");
	}

	$sql = "SELECT * FROM biblioteca";
	$res = mysqli_query($conectar, $sql);

	$biblioteca = array();

	if (mysqli_num_rows($res) > 0) {
		while ($linha = mysqli_fetch_assoc($res)) {
			foreach ($series_usuario as $key => $value) {
				if ($linha['id'] == $value) {
					array_push($biblioteca, array(
						'id_serie' => $linha['id'],
						'imagem' => $linha['imagem'],
						'nome' => $linha['nome'],
						'qnt_temporadas' => $linha['qnt_temporadas'],
						'qnt_episodios' => $linha['qnt_episodios'],
						'detalhes' => $linha['detalhes'],
						'temporada' => $linha['temporada'],
						'episodio' => $linha['episodio']
						)
					);
				}
			}	
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>biblioteca</title>
	<link rel="stylesheet" type="text/css" href="biblioteca.css">
</head>
<header id="cabecalho">
	<form>
		<button id="button_cabecalho" >
			<img src="menu.png">
		</button>
	</form>
	<h1 id="titulo_cabecalho">BIBLIOTECA</h1>
	<button id="button_cabecalho2">
		<img src="usuario.png">
	</button>
</header>
<body>
	<div id="body">
		<div id="principais">
			
			<table>
				<?php 
					echo "<tr>";
					$cont = 1;
					foreach ($biblioteca as $key => $value) {
						echo "<td>";
							echo "<a href='editar.php?id_serie=".$value['id_serie']."&imagem=".$value['imagem']."&nome=".$value['nome']."&qnt_temporadas=".$value['qnt_temporadas']."&qnt_episodios=".$value['qnt_episodios']."&detalhes=".$value['detalhes']."&temporada=".$value['temporada']."&episodio=".$value['episodio']."'>";
								echo "<div id='series_branca'></div>";
								echo "<div id='series_sla'>";
									echo "<div id='imgserie'><img src='imagens_series/" . $value['imagem'] . "' id='serie'></div>";
									echo "<button id='play'>";
										echo "<img src='play.png'></button>";
								echo "</div>";				
								
							echo "</a>";
							echo "<h4>" . $value['nome'] . "</h4>";
							echo "<p>t: " . $value['temporada'] . ", ep: " . $value['episodio'] . "</p>";
						echo "</td>";
						if ($cont % 3 == 0) {
							echo '</tr></table></div></div><div id="body"><div id="principais"><table><tr>';
							$cont = 0;
						}
						if ($key == count($biblioteca) - 1 and 1 % $cont == 0){
							$i = 1;
							while($i <= 2){
								echo "<a><td id='vazia'><p> </p></td></a>";
								$i++;
							}
							echo "</tr>";
						}
						elseif($key == count($biblioteca) - 1 and 2 % $cont == 0){
							echo "<a><td id='vazia'></td></a>";

							echo "</tr>";
						}
						$cont++;
					}

				?>
			</table>
		</div>
		<div class="icones" >
		  	<a href="cadastro_serie.html">
		  		<img class="img-responsive" src="adicao.png" alt="blablabla">
		    	<!--<img class="img-responsive" src="/img/whatsapp-watercolor.png" alt="botão de compartilhamento whatsapp" title="Compartilhe o link da página no whatsapp">-->
		  	</a>
		</div>
	</div>
</body>
</html>
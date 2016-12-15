<!DOCTYPE html>
<html>
<head>
	<title>Premiere Page PHP, example 1</title>
	<meta http-equiv="content-type" content="text/html: charset=utf-8"/>
</head>
<body>
<?php 
	echo "<p>Bonjour!!! de Villebon Sur Yvette</p>";
	for ($nombre_de_lignes = 1; $nombre_de_lignes <= 10; $nombre_de_lignes++) {
		echo 'Ceci est la ligne n' . $nombre_de_lignes . '<br />';

	}
?>
</body>
</html>

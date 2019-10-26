<table>
	<tr>
		<td><b>Detalles:</b></td>
	</tr>
	<?php
	$comentario = recoge('comentarios');
	$longitud = strlen($comentario);
	echo '<tr><td>Longitud:</td><td>' . $longitud . '</td></tr>';

	$palabras = str_word_count($comentario, 0);
	echo '<tr><td>Nº de palabras:</td><td>' . $palabras . '</td></tr>';

	$letras = count_chars(strtolower($comentario), 0);
	$mayorValor = array_keys($letras, max($letras));

	echo '<tr><td>Letra + repetida:</td><td>' . implode(array_map(function ($letra) {
		return chr($letra);
	}, $mayorValor), ',') . '</td></tr>';

	$palabras = str_word_count($comentario, 1);
	$frecuenciaPalabras = array_count_values($palabras);
	$palabrasMasRepetidas = array_keys($frecuenciaPalabras, max($frecuenciaPalabras));

	echo '<tr><td>Palabra + repetida:</td><td>' . implode($palabrasMasRepetidas, ',') . '</td></tr>';
	?>
</table>
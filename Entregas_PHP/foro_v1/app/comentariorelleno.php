<form name='comentariorelleno' method="POST">
	<table>
		<tr>
			<td>Tema</td>
		</tr>
		<tr>
			<?php
			$tema = recoge('tema');
			$comentario = recoge('comentarios');

			?>
			<td><input type="text" name="tema" value=" <?= $tema ?> " class="boton" size="35"></td>
		</tr>
		<tr>
			<td>Comentario:</td>
		</tr>
		<tr>
			<td><textarea name="comentarios" rows="7" cols="40" maxlength="300"><?= $comentario ?></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="orden" value="Detalles" class="boton">&nbsp;
				<input type="submit" name="orden" value="Nueva opinión" class="boton">&nbsp; <input type="submit" name="orden" value="Terminar" class="boton"></td>

	</table>
</form>
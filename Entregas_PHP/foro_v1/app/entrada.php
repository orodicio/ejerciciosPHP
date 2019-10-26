<form name='entrada' method="POST">
	<table>
		<tr>
			<td>Nombre:</td>
			<td><input type="text" name="nombre" value="<?= recoge('nombre') ?>" class="boton"></td>
		</tr>
		<tr>
			<td>Contraseña:</td>
			<td><input type="password" name="contraseña" value="<?= recoge('contraseña') ?>" class="boton"></td>
		</tr>
	</table>
	<input type="submit" name="orden" value="Entrar" class="boton">
</form>
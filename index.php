<?php  include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Stock System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg']; 
			unset($_SESSION['msg']);
		?>
	</div>
<?php endif ?>

	<table>
	<h2>Vehículos en Stock</h2>
	<thead>
		<tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Versión</th>
			<th>Potencia</th>
			<th>Cilindrada</th>
			<th>Combustible</th>
			<th>Transmisión</th>
			<th>Precio</th>
			<th colspan="2">Opciones</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['marca']; ?></td>
			<td><?php echo $row['modelo']; ?></td>
			<td><?php echo $row['version']; ?></td>
			<td><?php echo $row['potencia']; ?></td>
			<td><?php echo $row['cilindrada']; ?></td>
			<td><?php echo $row['combustible']; ?></td>
			<td><?php echo $row['transmision']; ?></td>
			<td><?php echo $row['precio']; ?></td>
			<td>
				<a href="index.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Editar</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Eliminar</a>
			</td>
		</tr>
	<?php } ?>
</table>

	<form method="post" action="server.php" >
	<h2>Añade Nuevos Vehículos</h2>
		<input type="hidden" name="id" value="<?php echo $id; ?>" required>
		<div class="input-group">
			<label>Marca</label>
			<input type="text" name="marca" value="<?php echo $marca; ?>" required>
		</div>
		<div class="input-group">
			<label>Modelo</label>
			<input type="text" name="modelo" value="<?php echo $modelo; ?>">
		</div>
		<div class="input-group">
			<label>Versión</label>
			<input type="text" name="version" value="<?php echo $version; ?>">
		</div>
		<div class="input-group">
			<label>Potencia</label>
			<input type="text" name="potencia" value="<?php echo $potencia; ?>">
		</div>
		<div class="input-group">
			<label>Cilindrada</label>
			<input type="text" name="cilindrada" value="<?php echo $cilindrada; ?>">
		</div>
		<div class="input-group">
			<label>Combustible</label>
			<input type="text" name="combustible" value="<?php echo $combustible; ?>">
		</div>
		<div class="input-group">
			<label>Transmisión</label>
			<input type="text" name="transmision" value="<?php echo $transmision; ?>">
		</div>
		<div class="input-group">
			<label>Precio de Venta al Público</label>
			<input type="text" name="precio" value="<?php echo $precio; ?>">
		</div>
		<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" >Actualizar</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save">Añadir</button>
			<?php endif ?>
		</div>
	</form>
</body>
</html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title></title>

	
</head>
<body>
		

		<?php
			include './clases.php';

			$query = new db();
			$sql = "SELECT * FROM perfilequipo";
			$result = $query->db_sql($sql);
			if($result != null){
				while($fila = $result->fetch_assoc()){

			
		?>

		<table class="table table-bordered">
		<tr>
			<td class="table-dark">Identificación</td><td><?php echo $fila["idequipo"];?></td><td class="table-dark" colspan="6">ID</td><td colspan="6"><?php echo $fila["idequipo"];?></td>	
		</tr>
		<tr>
			<td colspan="6" rowspan="7">Foto</td>
			<td colspan="6" class="table-dark">Nombres y apellido</td>
		</tr>
		<tr>
			<td colspan="6"><?php echo $fila["idequipo"];?></td>
		</tr>
		<tr>
			<td colspan="6" class="table-dark">Descripción personal y profesional</td>
		</tr>
		<tr>
			<td colspan="6"><?php echo $fila["perfil"];?> 
			</td>
		</tr>
		<tr>
			<td class="table-dark">Habilidades</td>
			<td class="table-dark">01</td>
			<td class="table-dark">02</td>
			<td class="table-dark">03</td>
			<td class="table-dark">04</td>
			<td class="table-dark">05</td>
		</tr>
		<tr>
			<td>Nombre Habilidad</td>
			<td><?php echo $fila["habilidad01"];?> </td>
			<td><?php echo $fila["habilidad02"];?> </td>
			<td><?php echo $fila["habilidad03"];?> </td>
			<td><?php echo $fila["habilidad04"];?> </td>
			<td><?php echo $fila["habilidad05"];?> </td>
		</tr>
		
		<tr>
			<td colspan="6" class="table-dark">Información contacto</td>
			<td class="table-dark">email</td>
			<td colspan="3"><?php echo $fila["email"];?> </td>
			<td class="table-dark">Telefono</td>
			<td><?php echo $fila["telefono"];?> </td>
		</tr>
	</table>
	<?php
			}
		}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>	
</body>
</html>
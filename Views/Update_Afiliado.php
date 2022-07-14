<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar Tablas</title>
</head>

<body onLoad="activarPrimerControl()">
	<?php include '../Controllers/Update_datos_afiliado.php';

	if (($regempleado = $registros->fetch(PDO::FETCH_BOTH)) && ($regem = $regis->fetch(PDO::FETCH_BOTH))) {
	?>
		<form action="../Controllers/AccionUpdateConsulta2.php" method="post">
			<tr>
				<td>
					<table border="3" bgcolor="#f18787">
						<tr>
							<td style="color:#ffffff" bgcolor="#797575"><strong><em>Actualizar Datos Basicos Afiliado</em></strong></td< /tr>
						<tr>
							<td> TipoDocumento:
								<input type="text" name="tipo" value="<?php echo $regempleado['TipoDocumento'] ?>">
							</td>
							<td>Documento: <input type="text" name="doc" value="<?php echo $regempleado['Documento'] ?>">
							</td>
						</tr>
						<td>Primer Nombre: <input type="text" name="pnombre" value="<?php echo $regempleado['PrimerNombre'] ?>">
						</td>
						<td> Segundo Nombre: <input type="text" name="snombre" value="<?php echo $regempleado['SegundoNombre'] ?>">
						</td>
				</tr>
				<tr>
					<td> Primer Apellido: <input type="text" name="pap" value="<?php echo $regempleado['PrimerApellido'] ?>">
					</td>
					<td> Segundo Apellido: <input type="text" name="sap" value="<?php echo $regempleado['SegundoApellido'] ?>">
					</td>
				</tr>
				<tr>
					<td colspan="3"> Direccion Residencia: <input type="text" name="dir" value="<?php echo $regempleado['DirResidencia'] ?>">
					</td>
				</tr>
				<tr>
					<td> Municipio: <input type="text" name="mu" value="<?php echo $regempleado['Municipio'] ?>">
					</td>
					<td> Departamento: <input type="text" name="dep" value="<?php echo $regempleado['Departamento'] ?>">
					</td>
					<td> Barrio: <input type="text" name="ba" value="<?php echo $regempleado['Barrio'] ?>">
					</td>
				</tr>
				<tr>
					<td> Telefono: <input type="text" name="tel" value="<?php echo $regempleado['Telefono'] ?>">
					</td>
					<td> Celular: <input type="text" name="cel" value="<?php echo $regempleado['Celular'] ?>">
					</td>
					<td> Correo: <input type="text" name="correo" value="<?php echo $regempleado['Correo'] ?>">
					</td>
				</tr>
				<tr>
					<td> MunNacimiento: <input type="text" name="mun" value="<?php echo $regempleado['MunNacimiento'] ?>">
					</td>
					<td> DepNacimiento: <input type="text" name="depn" value="<?php echo $regempleado['DepNacimiento'] ?>">
					</td>
					<td> FechaN: <input type="text" name="fechan" value="<?php echo $regempleado['FechaN'] ?>">
					</td>
				</tr>
				<tr>
					<td> Ocupacion: <input type="text" name="ocu" value="<?php echo $regempleado['Ocupacion'] ?>">
					</td>
					<td> Riesgo: <input type="text" name="riesgo" value="<?php echo $regempleado['Riesgo'] ?>">
					</td>
				</tr>
				<tr>
					<td> Primer Apellido: <input type="text" name="1ap" value="<?php echo $regempleado['1Apellido'] ?>">
					</td>
					<td> Segundo Apellido: <input type="text" name="2ap" value="<?php echo $regempleado['2Apellido'] ?>">
					</td>
					<td> Pirmer Nombre: <input type="text" name="1nom" value="<?php echo $regempleado['1Nombre'] ?>">
					</td>
				</tr>
				<tr>
					<td> Segundo Nombre: <input type="text" name="2nom" value="<?php echo $regempleado['2Nombre'] ?>">
					</td>
					<td> Sexo: <input type="text" name="sexo" value="<?php echo $regempleado['Sexo'] ?>">
					</td>
					<td> Numero documento: <input type="text" name="ndoc" value="<?php echo $regempleado['Ndocumento'] ?>">
					</td>
				</tr>
				<tr>
					<td> TipoDocumento: <input type="text" name="tip" value="<?php echo $regempleado['TipDocumento'] ?>">
					</td>
					<td> FechaExpe: <input type="text" name="fechae" value="<?php echo $regempleado['FechaExpe'] ?>">
					</td>
				</tr>
				</table>
				<table border="3" bgcolor="#f18787">
					<tr>
						<td style="color:#ffffff" bgcolor="#797575">
							<em>Beneficiario 1</em></strong>
						</td>
					<tr>
					<tr>
						<td> TipoDocumento: <input type="text" name="tipo0" value="<?php echo $regem['Tipodocumento'] ?>">
						</td>
						<td>NDocumento: <input type="text" name="doc0" value="<?php echo $regem['NDocumento'] ?>">
						</td>
					</tr>
					<tr>
						<td> Primer Apellido: <input type="text" name="pap0" value="<?php echo $regem['PrimerApellido'] ?>">
						</td>
						<td> Segundo Apellido: <input type="text" name="sap0" value="<?php echo $regem['SegundoApellido'] ?>">
						</td>
					</tr>
					<td>Primer Nombre: <input type="text" name="pnombre0" value="<?php echo $regem['PrimerNombre'] ?>">
					</td>
					<td> Segundo Nombre: <input type="text" name="snombre0" value="<?php echo $regem['SegundoNombre'] ?>">
					</td>
					<td> Sexo: <input type="text" name="sexo0" value="<?php echo $regem['Sexo'] ?>">
					</td>
					</tr>
					<tr>
						<td> Parentesco: <input type="text" name="par0" value="<?php echo $regem['Parentesco'] ?>">
						</td>
						<td>Novedad: <input type="text" name="nov0" value="<?php echo $regem['Novedad'] ?>">
						</td>
						<td>Nacionalidad: <input type="text" name="nacio0" value="<?php echo $regem['Nacionalidad'] ?>">
						</td>
					</tr>
					<tr>
						<td>DirResidencia: <input type="text0" name="dire0" value="<?php echo $regem['DirResidencia'] ?>">
						</td>
						<td>Municipio: <input type="text" name="mu0" value="<?php echo $regem['Municipio'] ?>">
						</td>
						<td>Departamento: <input type="text" name="dep0" value="<?php echo $regem['Departamento'] ?>">
						</td>
					</tr>
					<tr>
						<td>FechaN: <input type="text" name="fechan0" value="<?php echo $regem['FechaN'] ?>"></td>
						<td>Telefono: <input type="text" name="tel0" value="<?php echo $regem['Telefono'] ?>"></td>
					<td>Celular: <input type="text" name="cel0" value="<?php echo $regem['Celular'] ?>">
					</td>
					<td>Correo: <input type="text" name="correo0" value="<?php echo $regem['Correo'] ?>">
			</table>


			</SELECT> <br><br>
			<input type="submit" value="Modificar"> <br>
			<input type="hidden" name="documentoAnt" value="<?php echo $regempleado['Documento'] ?>">
		</form>
		<?php } else {echo "No existe Afiliado";}?> <br/><br/>


	<p><a href='javascript:history.go(-1)'>Anterior</a></p>
	<p><a href='javascript:history.go(-2)'>Inicio</a></p>
</body>

</html>
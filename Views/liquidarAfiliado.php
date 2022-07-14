<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>liquidacion Cotizante</title>
</head>

<body>
	<h3><em><strong>LIQUIDACION AFILIADO</strong></em></h3><br>

	<?php 
	require_once("../Config/Config.php");
	include "../libraries/core/Conexion.php";
	$conexion = new Conexion();

	$sql = "SELECT TipoDocumento,Documento,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,DirResidencia,Municipio,Departamento, Barrio,Telefono,Celular,Correo,MunNacimiento,DepNacimiento,FechaN,Ocupacion,Riesgo,1Apellido,2Apellido,1Nombre,2Nombre,Sexo,Ndocumento,TipDocumento,FechaExpe FROM afiliado WHERE Documento='$_REQUEST[documento]'";
	$registros = $conexion->executeSQL($sql);
	if (!$registros) { printf("Problemas en el Select.\n" . $conexion->error . "\n"); }
	if ($reg = $registros->fetch(PDO::FETCH_BOTH)) {
		echo "EMPRESA XYZ <br>";
		$fecha = date("d:m:Y");
		echo "Dia/Mes/Ano : " . $fecha . "<br>";
		$fecha = date("h:i:s" . " A");
		echo "Hora : " . $fecha . "<br>- - - - - - - - - - - - - - - - -<br>" . "<br>";
		$bruto = 0;
		echo  "<table border=2 bgcolor=#d9697c></tr><tr>
       <td style=color:#ffffff bgcolor=#797575>DATOS ACTUALES DEL AFILIADO</td></tr><tr><td>
     TipoDocumento:" . $reg['TipoDocumento'] . "</td><td>Documento: " . $reg['Documento'] .
			"</td></tr><tr><td>Primer Nombre : " . $reg['PrimerNombre'] .
			"</td><td>Segundo Nombre: " . $reg['SegundoNombre'] .
			"</td></tr><tr><td>Primer Apellido:" . $reg['PrimerApellido'] .
			"</td><td>Segundo Apellido:" . $reg['SegundoApellido'] .
			"</td></tr></td><td style=color:#ffffff bgcolor=#797575>
	A.DATOS UBICACION AFILIADO</td>
     <tr><td colspan=3>Direccion de Residencia:" . $reg['DirResidencia'] .
			"</td></tr><tr><td>Municipio: " . $reg['Municipio'] .
			"</td><td>Departamento:" . $reg['Departamento'] .
			"</td><td>Barrio y/o vereda:" . $reg['Barrio'] .
			"<tr></td><td>Telefono:" . $reg['Telefono'] .
			"</td><td>Celular:" . $reg['Celular'] .
			"</td><tr></td><td>Correo Electronico:" . $reg['Correo'] .
			"</td></tr><tr>
	<td style=color:#ffffff bgcolor=#797575 colspan=3>B.FECHA Y/O LUGAR DE NACIMIENTO</td>
	</tr><tr><td>Municipio de Nacimiento:" . $reg['MunNacimiento'] .
			"</td><td>
	Departamento de Nacimiento:" . $reg['DepNacimiento'] . "</td>
	<td>Fecha de Nacimiento:" . $reg['FechaN'] . "</td>
	</tr><tr><td style=color:#ffffff bgcolor=#797575>C. OCUPACION U OFICIO
	<td>Ocupacion:" . $reg['Ocupacion'] . "<td>
	 Riesgo:" . $reg['Riesgo'] . "</td>
	</tr><tr><td style=color:#ffffff bgcolor=#797575 colspan=3>D. NOMBRES Y/O SEXO DEL AFILIADO</td></tr><tr><td>
	Primer Apellido :" . $reg['1Apellido'] . "</td><td>
	Segundo Apellido :" . $reg['2Apellido'] . "</td></tr><tr><td>
	Primer Nombre :" . $reg['1Nombre'] . "</td><td>
	Segundo Nombre :" . $reg['2Nombre'] . "</td><td>
	 Sexo :" . $reg['Sexo'] .
			"</td></tr><tr><td style=color:#ffffff bgcolor=#797575>E. TIPO Y/O NÚMERO DE DOCUMENTO</td></tr><tr><td>
	 N.documento Anterior:" . $reg['Ndocumento'] . "</td><td>
	 TipDocumento :" . $reg['TipDocumento'] . "</td></td><td>
    Fecha de Expedicion:" . $reg['FechaExpe'] . "</td></tr></table>";
	}

	$bene = "SELECT Documento,TipoDocumento,NDocumento,Sexo,PrimerApellido,SegundoApellido,PrimerNombre,SegundoNombre,Parentesco,Novedad,Nacionalidad,DirResidencia,Municipio,Departamento,FechaN,Telefono,Celular,Correo FROM beneficiario WHERE Documento='$_REQUEST[documento]'";
	$registros =  $conexion->executeSQL($bene);
	if (!$registros) { printf("Problemas en el Select.\n" . $conexion->error . "\n"); }

	if ($reg = $registros->fetch(PDO::FETCH_BOTH)) {
		echo "EMPRESA XYZ <br>";
		$fecha = date("d:m:Y");
		echo "Dia/Mes/Ano : " . $fecha . "<br>";
		$fecha = date("h:i:s" . " A");
		echo "Hora : " . $fecha . "<br> - - - - - - - - - - - - - - - - - <br>";
		$bruto = 0;
		echo "<table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>
       G. BENEFICIARIO</td></tr>
       </tr><tr><td>TipoDocumento: " . $reg['TipoDocumento'] .
			"</td><td>N.Documento: " . $reg['NDocumento'] .
			"</td><td>Sexo: " . $reg['Sexo'] .
			"</td></tr><tr><td>Primer Apellido:" . $reg['PrimerApellido'] .
			"</td><td>Segundo Apellido: " . $reg['SegundoApellido'] .
			"</td></tr><tr><td>Primer Nombre : " . $reg['PrimerNombre'] .
			"</td><td>Segundo Nombre: " . $reg['SegundoNombre'] .
			"</td><td>Parentesco: " . $reg['Parentesco'] .
			"</td></tr><tr><td>Parentesco: " . $reg['Novedad'] .
			"</td><td>Novedad: " . $reg['Novedad'] . "</td></tr><tr><td>Nacionalidad: " . $reg['Nacionalidad'] .
			"</td><td>Direccion: " . $reg['DirResidencia'] .
			"</td></tr><tr><td>Municipio: " . $reg['Municipio'] . "</td><td>Departamento:" . $reg['Departamento'] .
			"</td></tr><tr><td>Fecha de Nacimiento:" . $reg['FechaN'] .
			"</td><td>Telefono: " . $reg['Telefono'] .
			"</td><td>Celular: " . $reg['Celular'] .
			"</td></tr><tr><td>Correo: " . $reg['Correo'] . "</tr></td></table>";
	}

	?> <br> <a href="pagina3F.php"><em>Pagina Principal</em></a>
</body>

</html>
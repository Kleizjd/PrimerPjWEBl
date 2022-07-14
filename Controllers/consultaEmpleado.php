<!DOCTYPE HTML>
<html>

<head>
	<title>consultar por codigo</title>
</head>

<body>
	<?php require_once("../Config/Config.php");
	include "../libraries/core/Conexion.php";
	$conexion = new Conexion();
	$sql = "SELECT TipoDocumento,Documento,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,DirResidencia,Municipio,Departamento, Barrio,Telefono,Celular,Correo,MunNacimiento,DepNacimiento,FechaN,Ocupacion,Riesgo,1Apellido,2Apellido,1Nombre,2Nombre,Sexo,Ndocumento,TipDocumento,FechaExpe FROM afiliado WHERE Documento='" . $_REQUEST['documento'] . "'";
	// /* Sentencia Preparada, etapa 1: preparacion */ 
	$sentencia = $conexion->executeSQL($sql);

	$beneficiario = "SELECT * FROM beneficiario WHERE Documento='" . $_REQUEST['documento'] . "'";
	$consul = $conexion->executeSQL($beneficiario);

	if (((!$sentencia)) && ((!$consul))) {printf("Problemas en el Select.\n" . $conexion->error . "\n");}
	if (!$consul) {printf("Problemas en el Select.\n" . $conexion->error . "\n");}

	if (($reg = $consul->fetch(PDO::FETCH_BOTH))&& ($regi = $sentencia->fetch(PDO::FETCH_BOTH))) {
		echo  "<table border=2 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>DATOS ACTUALES DEL AFILIADO</td></tr><tr><td>TipoDocumento:" . $reg['TipoDocumento'] . "</td><td>Documento: " . $reg['Documento'] .
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
	 <td>Ocupacion:" . $reg['Ocupacion'] . "<td></td></tr></table>";


		echo "<br><table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>
       G. BENEFICIARIO1</td></tr>
       </tr><tr><td>TipoDocumento: " . $regi['Tipodocumento'] .
			"</td><td>N.Documento: " . $regi['NDocumento'] .
			"</td><td>Sexo" . $regi['Sexo'] .
			"</td></tr><tr><td>Primer Apellido:" . $regi['PrimerApellido'] .
			"</td><td>Segundo Apellido: " . $regi['SegundoApellido'] .
			"</td></tr><tr><td>Primer Nombre : " . $regi['PrimerNombre'] .
			"</td><td>Segundo Nombre: " . $regi['SegundoNombre'] .
			"</td><td>Parentesco: " . $regi['Parentesco'] .
			"</td></tr><tr><td>Novedad: " . $regi['Novedad'] . "</td></tr><tr><td>Nacionalidad:" . $regi['Nacionalidad'] .
			"</td><td>Direccion: " . $regi['DirResidencia'] .
			"</td></tr><tr><td>Municipio: " . $regi['Municipio'] . "</td><td>Departamento:" . $regi['Departamento'] .
			"</td></tr><tr><td>Fecha de Nacimiento:" . $regi['FechaN'] .
			"</td><td>Telefono: " . $regi['Telefono'] .
			"</td><td>Celular: " . $regi['Celular'] .
			"</td></tr><tr><td>Correo: " . $regi['Correo'] . "</tr></td></table>";
		echo "<br>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>";
	} else {
		echo "NO existe Afiliado con ese Documento" . "<br>";
	}
	?> <br>
	<a href="../index.php"><em>Pagina Principal</em></a>
</body>

</html>
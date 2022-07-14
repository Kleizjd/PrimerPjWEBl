<!DOCTYPE html>
<html>

<head>
	<title>MySQL Accion Consulta Insert</title>
	<meta charset="utf-8">
</head>

<body> <?php 
		require_once("../Config/Config.php");
		include "../libraries/core/Conexion.php";
		$conexion = new Conexion();
		$sql = "SELECT * FROM afiliado ORDER BY Documento";
		$consulta = $conexion->executeSQL($sql);
		$bene = "SELECT * FROM beneficiario ORDER BY Documento";
		$consul = $conexion->executeSQL($sql);
	
		if (!$consulta) { printf("Problemas en el Select.\n" . $Conexion->error . "\n"); }
		// foreach ($ingresos as $ingreso){
		while (($reg = $consulta->fetch(PDO::FETCH_BOTH)) && ($regi = $consul->fetch(PDO::FETCH_BOTH))) {

			echo  "<table border=2 bgcolor=#d9697c></tr><tr><td style=color:#ffffff bgcolor=#797575>DATOS ACTUALES DEL AFILIADO</td></tr><tr><td>";
			echo "TipoDocumento:" . $reg['TipoDocumento'] . "</td><td>Documento: " . $reg['Documento'];
			echo "</td></tr><tr><td>Primer Nombre : " . $reg['PrimerNombre'];
			echo "</td><td>Segundo Nombre: " . $reg['SegundoNombre'];
			echo "</td></tr><tr><td>Primer Apellido:" . $reg['PrimerApellido'];
			echo "</td><td>Segundo Apellido:" . $reg['SegundoApellido'];
			echo "</td></tr></td><td style=color:#ffffff bgcolor=#797575>A.DATOS UBICACION AFILIADO</td>";
			echo "<tr><td colspan=3>Direccion de Residencia:" . $reg['DirResidencia'];
			echo "</td></tr><tr><td>Municipio: " . $reg['Municipio'];
			echo "</td><td>Departamento:" . $reg['Departamento'];
			echo "</td><td>Barrio y/o vereda:" . $reg['Barrio'];
			echo "<tr></td><td>Telefono:" . $reg['Telefono'];
			echo "</td><td>Celular:" . $reg['Celular'];
			echo "</td><tr></td><td>Correo Electronico:" . $reg['Correo'];
			echo "</td></tr><tr><td style=color:#ffffff bgcolor=#797575 colspan=3>B.FECHA Y/O LUGAR DE NACIMIENTO</td>";
			echo "</tr><tr><td>Municipio de Nacimiento:" . $reg['MunNacimiento'];
			echo "</td><td>oDepartamento de Nacimiento:" . $reg['DepNacimiento'] . "</td>";
			echo "<td>Fecha de Nacimiento:" . $reg['FechaN'] . "</td>";
			echo "</tr><tr><td style=color:#ffffff bgcolor=#797575>C. OCUPACION U OFICIO<td>Ocupacion:" . $reg['Ocupacion'] . "<td>";
			echo "Riesgo:" . $reg['Riesgo'] . "</td></tr><tr></TABLE>";

			echo "<br><table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>";
			echo  "G. BENEFICIARIO1</td></tr>";
			echo  "</tr><tr><td>TipoDocumento: " . $regi['Tipodocumento'];
			echo "</td><td>N.Documento: " . $regi['NDocumento'];
			echo "</td><td>Sexo" . $regi['Sexo'];
			echo "</td></tr><tr><td>Primer Apellido:" . $regi['PrimerApellido'];
			echo "</td><td>Segundo Apellido: " . $regi['SegundoApellido'];
			echo "</td></tr><tr><td>Primer Nombre : " . $regi['PrimerNombre'];
			echo "</td><td>Segundo Nombre: " . $regi['SegundoNombre'];
			echo "</td><td>Parentesco: " . $regi['Parentesco'];
			echo "</td></tr><tr><td>Parentesco: " . $regi['Novedad'];
			echo "</td><td>Novedad: " . $regi['Novedad'] . "</td></tr><tr><td>Nacionalidad:" . $regi['Nacionalidad'];
			echo "</td><td>Direccion: " . $regi['DirResidencia'];
			echo "</td></tr><tr><td>Municipio: " . $regi['Municipio'] . "</td><td>Departamento:" . $regi['Departamento'];
			echo "</td></tr><tr><td>Fecha de Nacimiento:" . $regi['FechaN'];
			echo "</td><td>Telefono: " . $regi['Telefono'];
			echo "</td><td>Celular: " . $regi['Celular'];
			echo "</td></tr><tr><td>Correo: " . $regi['Correo'] . "</tr></td></table>";
		}
		?> </br> <a href="../index.php"><em>Pagina Principal</em></a>
</body>

</html>
-
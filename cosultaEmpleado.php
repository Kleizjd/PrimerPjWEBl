<!DOCTYPE HTML > <html> 
<head> 
<title>consultar por codigo</title>
</head>
<body> 
<?php $conexion=new mysqli("localhost","root","","formulario"); 
  if ($conexion->connect_errno) { 
  echo "Problemas en la conexion a MySQL: " . $conexion->connect_error; 
  }
$sql = "select TipoDocumento,Documento,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,DirResidencia,Municipio,Departamento,
                         Barrio,Telefono,Celular,Correo,MunNacimiento,DepNacimiento,FechaN,Ocupacion,Riesgo,1Apellido,2Apellido,1Nombre,2Nombre,
						 Sexo,Ndocumento,TipDocumento,FechaExpe        from afiliado where Documento=?";

// /* Sentencia Preparada, etapa 1: preparación */ 
 $sentencia = $conexion->prepare($sql); 
 if (!$sentencia) { 
  printf("Problemas en la Sentencia Preparada.\n". $conexion->error . "\n"); 
  } 
// /* Sentencia preparada, etapa 2: vincular parametros y ejecutar */
 $docu = $_REQUEST['documento'];
 $sentencia->bind_param("i", $docu); 
 if (!$sentencia) {
	 printf("Problemas en la Vinculación de Parámetros.\n". $conexion->error . "\n"); 
	 } $sentencia->execute(); 
	 if (!$sentencia) {
		 printf("Problemas en la Ejecución.\n". $conexion->error . "\n"); 
	 } /* Sentencia preparada, etapa 3: Obtener Resultado */ $regist=$sentencia->get_result();
	 if (!$regist) { 
	 printf("Problemas en el Select.\n". $conexion->error . "\n");
	 }
$bene = "select * from beneficiario where Documento=?";
		 $consul=$conexion->prepare($bene);
		 $consul->bind_param("i", $docu);
		 $consul->execute();
		  $registros=$consul->get_result();
		  
 $bene2 = "select * from beneficiario1 where Documento=?";
 $consult=$conexion->prepare($bene2);
	  $consult->bind_param("i", $docu); 
	  $consult->execute();
      $registro1=$consult->get_result();
     if (((!$registros))&&((!$registro1))&&((!$regist))) { 
	 printf("Problemas en el Select.\n". $conexion->error . "\n");
	 }	 
 if (!$sentencia) { 
printf("Problemas en el Select.\n". $conexion->error . "\n"); 
}

 if((($reg=$regist->fetch_assoc()))&&(($regi = $registros->fetch_assoc()))&&(($regis=$registro1->fetch_assoc()))) {
	 echo  "<table border=2 bgcolor=#d9697c><tr>
       <td style=color:#ffffff bgcolor=#797575>DATOS ACTUALES DEL AFILIADO</td></tr>
  <tr><td>
     TipoDocumento:".$reg['TipoDocumento']."</td><td>Documento: ".$reg['Documento'].
	"</td></tr><tr><td>Primer Nombre : ".$reg['PrimerNombre'].
	"</td><td>Segundo Nombre: ".$reg['SegundoNombre'].
    "</td></tr><tr><td>Primer Apellido:".$reg['PrimerApellido'].
	"</td><td>Segundo Apellido:".$reg['SegundoApellido'].
	"</td></tr></td><td style=color:#ffffff bgcolor=#797575>
	A.DATOS UBICACION AFILIADO</td>
     <tr><td colspan=3>Direccion de Residencia:".$reg['DirResidencia'].
	"</td></tr><tr><td>Municipio: ".$reg['Municipio'].
	"</td><td>Departamento:".$reg['Departamento'].
	"</td><td>Barrio y/o vereda:".$reg['Barrio'].
	"<tr></td><td>Telefono:".$reg['Telefono'].
	"</td><td>Celular:".$reg['Celular'].
	"</td><tr></td><td>Correo Electronico:".$reg['Correo'].
	"</td></tr><tr>
	<td style=color:#ffffff bgcolor=#797575 colspan=3>B.FECHA Y/O LUGAR DE NACIMIENTO</td>
	</tr><tr><td>Municipio de Nacimiento:".$reg['MunNacimiento'].
	"</td><td>
	Departamento de Nacimiento:".$reg['DepNacimiento']."</td>
	<td>Fecha de Nacimiento:".$reg['FechaN']."</td>
	</tr><tr><td style=color:#ffffff bgcolor=#797575>C. OCUPACION U OFICIO
	 <td>Ocupacion:".$reg['Ocupacion']."<td></td></tr></table>";

	 
   echo "<br><table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>
       G. BENEFICIARIO1</td></tr>
       </tr><tr><td>TipoDocumento: ".$regi['Tipodocumento'].
	"</td><td>N.Documento: ".$regi['NDocumento'].
	"</td><td>Sexo".$regi['Sexo'].
    "</td></tr><tr><td>Primer Apellido:".$regi['PrimerApellido'].
	"</td><td>Segundo Apellido: ".$regi['SegundoApellido'].
	"</td></tr><tr><td>Primer Nombre : ".$regi['PrimerNombre'].
	"</td><td>Segundo Nombre: ".$regi['SegundoNombre'].
	"</td><td>Parentesco: ".$regi['Parentesco'].
	"</td></tr><tr><td>Novedad: ".$regi['Novedad']."</td></tr><tr><td>Nacionalidad:".$regi['Nacionalidad'].
	"</td><td>Direccion: ".$regi['DirResidencia'].
	"</td></tr><tr><td>Municipio: ".$regi['Municipio']."</td><td>Departamento:".$regi['Departamento'].
	"</td></tr><tr><td>Fecha de Nacimiento:".$regi['FechaN'].
	"</td><td>Telefono: ".$regi['Telefono'].
	"</td><td>Celular: ".$regi['Celular'].
	"</td></tr><tr><td>Correo: ".$regi['Correo']."</tr></td></table>";
	
	echo "<br><table border=3 bgcolor=#d9697c><tr><td style=color:#ffffff bgcolor=#797575>
       G. BENEFICIARIO2</td></tr>
       </tr><tr><td>TipoDocumento: ".$regis['Tipodocumento'].
	"</td><td>N.Documento: ".$regis['NDocumento'].
	"</td><td>Sexo".$regis['Sexo'].
    "</td></tr><tr><td>Primer Apellido:".$regis['PrimerApellido'].
	"</td><td>Segundo Apellido: ".$regis['SegundoApellido'].
	"</td></tr><tr><td>Primer Nombre : ".$regis['PrimerNombre'].
	"</td><td>Segundo Nombre: ".$regis['SegundoNombre'].
	"</td><td>Parentesco: ".$regis['Parentesco'].
	"</td></tr><tr><td>Novedad: ".$regis['Novedad']."</td></tr><tr><td>Nacionalidad:".$regis['Nacionalidad'].
	"</td><td>Direccion: ".$regis['DirResidencia'].
	"</td></tr><tr><td>Municipio: ".$regi['Municipio']."</td><td>Departamento:".$regis['Departamento'].
	"</td></tr><tr><td>Fecha de Nacimiento:".$regis['FechaN'].
	"</td><td>Telefono: ".$regis['Telefono'].
	"</td><td>Celular: ".$regis['Celular'].
	"</td></tr><tr><td>Correo: ".$regis['Correo']."</tr></td></table>";
    
	   echo "<br>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>";
   } else { echo "NO existe Afiliado con ese Documento"."<br>";
  } /* se recomienda el cierre explícito de la Sentencia */
    $sentencia->close(); 
   $consul->close();$consult->close();
  $conexion->close();
   ?> <br>
   <a href="principal.php"><em>Pagina Principal</em></a>
 </body> 
</html>

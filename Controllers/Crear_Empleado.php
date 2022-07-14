
     
<?php 	  
	require_once("../Config/Config.php");
   include "../libraries/core/Conexion.php";
        $conexion = new Conexion();
        // $executeSQL = $conexion->conect();
          $caja1=isset($_REQUEST['caja1'])? $_REQUEST['caja1'].", ":"";
          $caja2=isset($_REQUEST['caja2'])? $_REQUEST['caja2'].", ":"";
          $caja3=isset($_REQUEST['caja3'])? $_REQUEST['caja3'].", ":"";
		  $caja4=isset($_REQUEST['caja4'])? $_REQUEST['caja4'].", ":"";
          $caja5=isset($_REQUEST['caja5'])? $_REQUEST['caja5'].", ":"";
          $caja6=isset($_REQUEST['caja6'])? $_REQUEST['caja6']:"";
		  
		  $caja01=isset($_REQUEST['caja01'])? $_REQUEST['caja01'].", ":"";
          $caja02=isset($_REQUEST['caja02'])? $_REQUEST['caja02'].", ":"";
          $caja03=isset($_REQUEST['caja03'])? $_REQUEST['caja03'].", ":"";
		  $caja04=isset($_REQUEST['caja04'])? $_REQUEST['caja04'].", ":"";
          $caja05=isset($_REQUEST['caja05'])? $_REQUEST['caja05'].", ":"";
          $caja06=isset($_REQUEST['caja06'])? $_REQUEST['caja06']:"";

	$sql = sprintf("INSERT INTO beneficiario(Documento,TipoDocumento,NDocumento,Sexo,PrimerApellido,SegundoApellido,PrimerNombre,SegundoNombre,Parentesco,Novedad,Nacionalidad, DirResidencia,Municipio,Departamento,FechaN,Telefono,Celular,Correo) VALUES (%u,'%s',%u,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$_POST['documento'],$_REQUEST['dt'],$_REQUEST['ND'],$_REQUEST['tip'],$_REQUEST['apellido0'],$_REQUEST['apellido2'],$_REQUEST['nombre0'],$_REQUEST['nombre1'],$caja1.$caja2.$caja3.$caja4.$caja5.$caja6, $_REQUEST['obj'],$_REQUEST['nacionalidad'],$_REQUEST['direccionr'],$_REQUEST['municipiox'], $_REQUEST['departamentox'],$_REQUEST['fechad'],$_REQUEST['tel'],$_REQUEST['cel'],$_REQUEST['email']);
	
						
   if (!$conexion->executeSQL($sql)) {printf("Problemas en el Insert.\n". $conexion->error ."\n"); } 
   else{ echo "!!REGISTRO EXITOSO!!<br>"; }
  
   $afi = sprintf(
   "INSERT INTO Afiliado(TipoDocumento,Documento,PrimerNombre,SegundoNombre,PrimerApellido,SegundoApellido,DirResidencia,Municipio,Departamento,Barrio,Telefono,Celular,Correo,MunNacimiento,DepNacimiento,FechaN,Ocupacion,Riesgo,1Apellido,2Apellido,1Nombre,2Nombre,Sexo,Ndocumento,TipDocumento,FechaExpe) VALUES ('%s',%u,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",$_POST['docto'], $_POST['documento'],$_POST['Pnombre'], $_POST['Snombre'],$_POST['pApellido'],$_POST['sApellido'],$_POST['direccion'],$_POST['mun'],$_POST['departamento'],$_POST['barrio'],$_POST['telefono'],$_POST['celular'],$_POST['correo'], $_POST['ciudadn'],$_POST['departamenton'],$_POST['fecha'], $_POST['ocu'],$_POST['riesgo'],$_POST['papellidop'], $_POST['sapellidos'],$_POST['Pnombrep'],$_POST['Snombres'], $_POST['tipo'],$_POST['ingreso'],$_POST['docto1'],$_POST['expedicion']);

   if (!$conexion->executeSQL($afi)) { printf("Problemas en el Insert.\n". $conexion->error ."\n"); } 
   else{ echo "!!REGISTRO EXITOSO!!<br>"; }

//  $conexion->close();
?>
<a href="../index.php"><em>Pagina Principal</em></a>


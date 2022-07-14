 <?php
		require_once("../Config/Config.php");
		include "../libraries/core/Conexion.php";
		$conexion = new Conexion();

		$sql = "UPDATE afiliado SET TipoDocumento='".$_POST['tipo']."', Documento='".$_POST['doc']."', PrimerNombre='".$_POST['pnombre']."', SegundoNombre='".$_POST['snombre']."',PrimerApellido='".$_POST['pap']."', SegundoApellido='".$_POST['sap']."', DirResidencia='".$_POST['dir']."', Municipio='".$_POST['mu']."', Departamento='".$_POST['dep']."',Barrio='".$_POST['ba']."' ,Telefono='".$_POST['tel']."' ,Celular='".$_POST['cel']."' ,Correo='".$_POST['correo']."' ,MunNacimiento='".$_POST['mun']."' ,DepNacimiento='".$_POST['depn']."' ,FechaN='".$_POST['fechan']."' ,Ocupacion='".$_POST['ocu']."' ,Riesgo='".$_POST['riesgo']."' ,1Apellido='".$_POST['1ap']."' ,2Apellido='".$_POST['2ap']."' ,1Nombre='".$_POST['1nom']."', 2Nombre='".$_POST['2nom']."',Sexo='".$_POST['sexo']."' ,Ndocumento='".$_POST['ndoc']."',TipDocumento='".$_POST['tip']."',FechaExpe='".$_POST['fechae']."'    WHERE Documento='".$_POST['documentoAnt']."' ";
		$sentencia = $conexion->executeSQL($sql);

		echo "!!El Afiliado fue modificado OK!!<br>";
		$bene = "UPDATE beneficiario SET Documento='".$_POST['doc']."',TipoDocumento='".$_POST['tipo0']."', NDocumento='".$_POST['doc0']."', Sexo='".$_POST['sexo0']."' ,PrimerApellido='".$_POST['pap0']."',SegundoApellido='".$_POST['sap0']."',PrimerNombre='".$_POST['pnombre0']."',SegundoNombre='".$_POST['snombre0']."', Parentesco='".$_POST['par0']."',Novedad='".$_POST['nov0']."', Nacionalidad='".$_POST['nacio0']."', DirResidencia='".$_POST['dire0']."', Municipio='".$_POST['mu0']."', Departamento='".$_POST['dep0']."',FechaN='".$_POST['tel0']."',Telefono='".$_POST['tel0']."' ,Celular='".$_POST['cel0']."' ,Correo='".$_POST['correo0']."' WHERE Documento='".$_POST['documentoAnt']."' ";
		$senten = $conexion->executeSQL($bene);

		echo "!!El Beneficiario fue modificado OK!!<br>";

		?>
	<p><a href='javascript:history.go(-1)'>Anterior</a></p>
	<p><a href='javascript:history.go(-2)'>Inicio</a></p>

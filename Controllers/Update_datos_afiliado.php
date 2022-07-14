	<?php
	require_once("../Config/Config.php");
	include "../libraries/core/Conexion.php";
	$conexion = new Conexion();

	/* AFILIADO */
	$sql = "SELECT * FROM afiliado WHERE Documento='" . $_REQUEST['documento'] . "'";
	$registros = $conexion->executeSQL($sql);
	/* BENEFICIARIO */
	$beneficiario = "SELECT * FROM beneficiario WHERE Documento='" . $_REQUEST['documento'] . "'";
	$regis = $conexion->executeSQL($beneficiario);
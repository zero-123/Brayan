<?php 
include'../conexion/conexion.php';
include'../sesiones/verificar_sesion.php';

$pNombre    =$_POST["nombre"];
$pPaterno   =$_POST["paterno"];
$pMaterno   =$_POST["materno"];
$pCorreo    =$_POST["correo"];
$pFechaNac  =$_POST["fecha_nac"];
$pDireccion =$_POST["direccion"];
$pTipo      =$_POST["tipo"];
$pGenero    =$_POST["genero"];

$fecha =date("Y-m-d"); 
$hora  =date ("H:i:s");

$activo=1;
$usuario=$_SESSION["idPersona"];

mysql_query("SET NAMES utf8");

 	$insertar = mysql_query("INSERT INTO personas (
											nombre,
											ap_paterno,
											ap_materno,
											correo,
											fecha_nac,
											sexo,
											direccion,
											tipo,
											activo,
											fecha_registro,
											hora_registro,
											id_usuario
										)
										VALUES
											(
												'$pNombre',
												'$pPaterno',
												'$pMaterno',
												'$pCorreo',
												'$pFechaNac',
												'$pGenero',
												'$pDireccion',
												'$pTipo ',
												$activo,
												'$fecha',
												'$hora',
												$usuario
											)",$conexion)or die(mysql_error());

 ?>

 <script language="javascript">
 	window.location="nuevo.php";
 </script>

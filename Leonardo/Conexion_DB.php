<?php
$hostname="db.inf.uct.cl";
$usuario_db="A2022_ejaramillo";
$password_db="A2022_ejaramillo";
$db_name="A2022_ejaramillo";

//include_once ('DB.php');
$nombre = $_POST ['nombre'];
$apellido = $_POST ['apellido'];
$correo = $_POST ['correo'];
$telefono=$_POST ['telefono'];
$carrera = $_POST ['carrera'];
$asignatura = $_POST ['asignatura'];

$db = msqli_connect($hostname,$usuario_db,$password_db,$db_name);
$sql = "INSERT INTO 'ayudantia'('nombre','apellido','correo','telefono','carrera','asignatura') 
        VALUES ('$nombre','$apellido','$correo','$telefono','$carrera','$asignatura')";

echo mysqli_query($db,$sql); 
?>
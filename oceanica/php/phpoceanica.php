<?php

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$numeropersonas = $_POST['numeropersonas'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "oceanics";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "insert into salesforce (dia, mes, anio, nombre, apellido, dni, numeropersonas) values('$dia', '$mes', '$anio', '$nombre', '$apellido','$dni','$numeropersonas')";

if ($conn->query($sql) === TRUE) {
	echo "realizado";
} else {
	echo "Error: ".$sql."<br>".$conn->error;
}

$conn->close();

?>
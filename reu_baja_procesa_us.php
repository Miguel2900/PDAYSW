<?php
//dir2022_alta_procesa.php
$servername = "localhost";
$username = "usuario2022";
$password = "usuario2022";
$dbname = "reu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("DELETE FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $Nombre);

$Nombre = $_POST["Nombre"];

if ($stmt->execute())
{
	echo "Registro borrado. Se borrĂ³ a" . $Nombre;
}//if
else
{
	echo "No se encontrĂ³ el registro";
}//else

$stmt->close();
$conn->close();
?>
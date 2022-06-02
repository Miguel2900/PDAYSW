<?php
//reu_actualiza_procesa.php
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

// prepare and bind
$stmt = $conn->prepare("UPDATE usuarios SET password=? WHERE usuario=?");
$stmt->bind_param("ss", $Nombre, $Contraseña);

$Nombre = $_POST["Nombre"];
$Correo = $_POST["Contraseña"];

if ($stmt->execute())
{
	echo "Record updated successfully";
	?>
	<h1>Directorio Actualizado</h1>
	Nombre: <?php echo $Nombre; ?><br/>
	Contraseña: <?php echo $Contraseña; ?><br/>

<?php
}
else
{
	echo "Record not found";
}	

$stmt->close();
$conn->close();
?>
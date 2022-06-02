<?php
//reu_actualiza_busca.php
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
$stmt = $conn->prepare("SELECT usuario, password FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $Nombre);

$Nombre = $_POST["Nombre"];

if ($stmt->execute())
{
	$result = $stmt->get_result();
	
	if($row = $result->fetch_assoc()) {
		?>
		<h1>Actualizar datos de contacto</h1>
		<form action="reu_actualiza_procesa_us.php" method="post">
			Nombre: <input type="text" id="Nombre" name="Nombre" value="<?php echo $row["usuario"]?>"><br>
			Correo: <input type="text" id="Contraseña" name="Contraseña" value="<?php echo $row["password"]?>"><br>
			<input type="submit">
		</form>
	    <?php	
	}
}//if
else
{
	echo "No se encontró el registro";
}//else

$stmt->close();
$conn->close();
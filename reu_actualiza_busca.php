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
$stmt = $conn->prepare("SELECT Nombre, Correo, Celular, Parentesco, Sangre, Seguro, Poliza FROM reu WHERE Nombre = ?");
$stmt->bind_param("s", $Nombre);

$Nombre = $_POST["Nombre"];

if ($stmt->execute())
{
	$result = $stmt->get_result();
	
	if($row = $result->fetch_assoc()) {
		?>
		<h1>Actualizar datos de contacto</h1>
		<form action="reu_actualiza_procesa.php" method="post">
			Nombre: <input type="text" id="Nombre" name="Nombre" value="<?php echo $row["Nombre"]?>"><br>
			Correo: <input type="text" id="Correo" name="Correo" value="<?php echo $row["Correo"]?>"><br>
            Celular: <input type="text" id="Celular" name="Celular" value="<?php echo $row["Celular"]?>"><br>
            Parentesco: <input type="text" id="Parentesco" name="Parentesco" value="<?php echo $row["Parentesco"]?>"><br>
            Sangre: <input type="text" id="Sangre" name="Sangre" value="<?php echo $row["Sangre"]?>"><br>
            Seguro: <input type="text" id="Seguro" name="Seguro" value="<?php echo $row["Seguro"]?>"><br>
            Poliza: <input type="text" id="Poliza" name="Poliza" value="<?php echo $row["Poliza"]?>"><br><br>
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
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
$stmt = $conn->prepare("UPDATE reu SET Correo=?, Celular=?, Parentesco=?, Sangre=?, Seguro=?, Poliza=? WHERE Nombre=?");
$stmt->bind_param("sisssss", $Correo, $Celular, $Parentesco, $Sangre, $Seguro, $Poliza, $Nombre);

$Nombre = $_POST["Nombre"];
$Correo = $_POST["Correo"];
$Celular = $_POST["Celular"];
$Parentesco = $_POST["Parentesco"];
$Sangre = $_POST["Sangre"];
$Seguro = $_POST["Seguro"];
$Poliza = $_POST["Poliza"];

if ($stmt->execute())
{
	echo "Record updated successfully";
	?>
	<h1>Directorio Actualizado</h1>
	Nombre: <?php echo $Nombre; ?><br/>
	Correo: <?php echo $Correo; ?><br/>
	Celular: <?php echo $Celular; ?><br/>
    Parentesco: <?php echo $Parentesco; ?><br/>
    Sangre: <?php echo $Sangre; ?><br/>
    Seguro: <?php echo $Seguro; ?><br/>
    Poliza: <?php echo $Poliza; ?><br/>

<?php
}
else
{
	echo "Record not found";
}	

$stmt->close();
$conn->close();
?>
  <?php
//reu_alta_procesa.php
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
$stmt = $conn->prepare("INSERT INTO reu (Nombre, Correo, Celular, Parentesco, Sangre, Seguro, Poliza) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssissss", $Nombre, $Correo, $Celular, $Parentesco, $Sangre, $Seguro, $Poliza);

$Nombre = $_POST["Nombre"];
$Correo = $_POST["Correo"];
$Celular = $_POST["Celular"];
$Parentesco = $_POST["Parentesco"];
$Sangre = $_POST["Sangre"];
$Seguro = $_POST["Seguro"];
$Poliza = $_POST["Poliza"];

$stmt->execute();

echo "Has agregado correctamente el contacto de emergencia";

$stmt->close();
$conn->close();
?>
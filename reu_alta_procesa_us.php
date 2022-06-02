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
$stmt = $conn->prepare("INSERT INTO usuarios (usuario, password) VALUES (?, ?)");
$stmt->bind_param("ss", $Nombre, $Contraseña);

$Nombre = $_POST["Nombre"];
$Contraseña = $_POST["Contraseña"];

$stmt->execute();

echo "Has agregado correctamente un nuevo usuario";

$stmt->close();
$conn->close();
?>
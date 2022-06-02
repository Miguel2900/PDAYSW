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

$stmt = $conn->prepare("SELECT usuario, password FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $Nombre);

$Nombre = $_POST["Nombre"];

if ($stmt->execute())
{
    $result = $stmt->get_result();
    if($row = $result->fetch_assoc()) {
        echo '<style>
        table, th, td {
            border: 1px solid white;
            border-collapse: collapse;
        }
        th, td {
        background-color: #A2E200;F
        padding: 15px;
        }
        </style>';
        echo '<table>';
        echo '<tr><th>Usuario</th><th>Contraseña</th></tr>';

        echo "<tr><td>" . $row["usuario"] . "</td><td>" . $row["password"] . "</td></tr>";

        ?>
        <form action="reu_baja_procesa_us.php" method="post">
            ¿Desea borrar a <?php echo $row["usuario"] ?>?<br/>
            <input type="hidden" name="Nombre" value="<?php echo $row["usuario"] ?>">
            <input type="submit" value="Borrar">
        </form>
        <?php	
    }
}//if
else{
    echo "No se encontro registro";
}

$stmt->close();
$conn->close();

?>
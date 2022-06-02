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

$stmt = $conn->prepare("SELECT Nombre, Correo, Celular, Parentesco, Sangre, Seguro, Poliza FROM reu WHERE Nombre = ?");
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
        echo '<tr><th>Nombre</th><th>Correo</th><th>Celular</th>
        <th>Parentesco</th><th>Tipo de sangre</th><th>Seguro</th><th>Poliza</th>
        </tr>';

        echo "<tr><td>" . $row["Nombre"] . "</td><td>" . $row["Correo"] . "</td><td>" . $row["Celular"] .
        "</td><td>" . $row["Parentesco"] . "</td><td>" . $row["Sangre"] . "</td><td>" . $row["Seguro"] .
        "</td><td>" . $row["Poliza"] . "</td></tr>";

        ?>
        <form action="reu_baja_procesa.php" method="post">
            ¿Desea borrar a <?php echo $row["Nombre"] ?>?<br/>
            <input type="hidden" name="Nombre" value="<?php echo $row["Nombre"] ?>">
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
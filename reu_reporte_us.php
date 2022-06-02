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

$sql = "SELECT usuario, password FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo '<style>
    table, th, td {
        border: 1px solid white;
        border-collapse: collapse;
    }
    th, td {
      background-color: #A2E200;
      padding: 15px;
    }
    </style>';
  echo '<table>';
  echo '<tr><th>Nombre</th><th>Contraseña</th></tr>';
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["usuario"] . "</td><td>" . $row["password"] . "</td></tr>";
  }
  echo '</table>';
} else
  echo "0 resultados";

$conn->close();

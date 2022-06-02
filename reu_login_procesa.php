<?php
//reu_login_procesa.php
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
$stmt->bind_param("s", $Usuario);

session_start();

$Usuario = $_POST["Usuario"];
$PasswordEnviado = $_POST["Password"];

if ($stmt->execute())
{
	$result = $stmt->get_result();
	
	if($row = $result->fetch_assoc())
	{	
		if($row["password"] == $PasswordEnviado)
		{//Password Correcto
			$_SESSION["LoginError"] = "0";
			$_SESSION["Usuario"] = $Usuario;
			header("Location:/FORMS%20CON%20BD%20COMPLETA/FORMULARIOSP2.php");
		}//if
		else
		{//Password Incorrecto
			$_SESSION["LoginError"] = "1";
			header("Location: reu_login.php");
			exit();
		}//else
	}//if
	else
	{//Usuario no existe
		$_SESSION["LoginError"] = "1";
		header("Location: reu_login.php");
		exit();		
	}
}//if
else
{
	echo "Error";
}//else

$stmt->close();
$conn->close();
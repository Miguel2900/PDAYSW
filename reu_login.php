<!DOCTYPE HTML>
<!--reu_login.php-->
<html>  
<body>

<form action="reu_login_procesa.php" method="post">
	<h1>Directorio - Autenticación</h1>
	<?php
		session_start();
		//unset($_SESSION["LoginError"]);
		if (isset($_SESSION["LoginError"]))
		{
			if($_SESSION["LoginError"] == "1")
			{
				echo "Error de autenticación.<br><br>";
			}//if
		}//if
		$_SESSION["LoginError"] = "0";
	?>
	Usuario: <input type="text" id="Usuario" name="Usuario"><br>
	Password: <input type="password" id="Password" name="Password"><br>
	<input type="submit" value="Entrar">
</form>

</body>
</html>
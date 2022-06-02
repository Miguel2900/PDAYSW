<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title>Formularios principales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript" src="rab.js"></script>
    <script type="text/javascript" src="emergencia.js"></script>
    <link rel="icon" type="image/x-icon" href="logo.png">
</head>

<body style="color: rgb(255, 255, 255);
background-color: rgb(26, 72, 116);" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="./Inicio.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./FORMULARIOSP.php">Formularios principales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./FORMULARIOSS.php">Formularios secuandarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./USUARIOS.php">Usuarios</a>
                </li>
            </ul>
            <img src="logo.png" alt="Logo" style="width:40px;" class="rounded-pill">
        </div>
    </nav>
    <br><br><br>

    <div id="section5" class="container-fluid text-white" style="padding: 20px 20px; background-color: rgb(188, 144, 91);">

<!-- USO DE PHP PARA BASE DE DATOS -->
<div id="caso_em" style="padding: 20px 20px; background-color: rgb(121, 176, 180);" ng-app="myApp" ng-controller="myCtrl">
    <h2>USUARIOS PARA BASE DE DATOS</h2>
    <br>
    <div>
        <button type="button" class="btn btn-light" onclick="alta_contacto()">Alta de usuario</button>
        <button type="button" class="btn btn-light" onclick="baja_contacto()">Baja de usuario</button>
        <button type="button" class="btn btn-light" onclick="actualiza_contacto()">Atualizacion de
            usuario</button>
        <button type="button" class="btn btn-light" onclick="busqueda_contacto()">Busqueda de usuario</button>
        <button type="button" class="btn btn-dark" onclick="reporte_contacto()">Reporte de usuario</button>
    </div>

    <div id="eme_ata" style="display: none;">

        <br>
        <h4>RECOPILACION DE DATOS</h4><br>
        <form action="http://localhost/FORMS CON BD COMPLETA/reu_alta_procesa_us.php" method="post">
            Nombre del usuario: <input type="text" id="Nombre" name="Nombre"><br><br>
            Contraseña del usuario: <input type="text" id="Contraseña" name="Contraseña"><br><br>
            <input class="btn btn-dark" type="submit">
        </form>
    </div>

    <div id="em_rep" style="display: none;">
        <br>
        <h4>REPORTE DE USUARIOS</h4><br>
        <form action="http://localhost/FORMS CON BD COMPLETA/reu_reporte_us.php">
            <input class="btn btn-dark" type="submit" value="Mostrar reporte">
        </form>
    </div>

    <div id="em_bqd" style="display: none;">
        <br>
        <h4>BUSCAR USUARIO</h4><br>
        <form action="http://localhost/FORMS CON BD COMPLETA/reu_buscar_us.php" method="post">
            Nombre de usuario:
            <input type="text" id="Nombre" name="Nombre"><br>
            <input class="btn btn-dark" type="submit" value="Buscar">
        </form>
    </div>

    <div id="em_baja" style="display: none;">
        <br>
        <h4>ELIMINAR USUARIO</h4><br>
        <form action="http://localhost/FORMS CON BD COMPLETA/reu_eliminar_us.php" method="post">
            Nombre de usuario:
            <input type="text" id="Nombre" name="Nombre"><br>
            <input class="btn btn-dark" type="submit" value="Buscar">
        </form>
    </div>

    <div id="em_act" style="display: none;">
        <br>
        <h4>ACTUALIZAR USUARIO</h4><br>
        <form action="http://localhost/FORMS CON BD COMPLETA/reu_actualiza_busca_us.php" method="post">
            Nombre del usuario:
            <input type="text" id="Nombre" name="Nombre"><br>
            <input class="btn btn-dark" type="submit" value="Buscar">
        </form>
    </div>
</div>

    

</body>

</html>
<!DOCTYPE html>
<html>

<?php
session_start();
?>

<head>
    <title>Página de inicio</title>
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
background-color: #004173;" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">


</body>

<div class="container-fluid p-5 bg-primary text-white text-center">
    <h1>Proyecto final - PROGRAMACIÓN DE APLICACIONES Y SERVICIOS WEB</h1>
    <p>Carreón Alonso Sebastián Alfonso - Miguel Ángel Ledesma</p>
</div>

<div class="container mt-5" style="transform: translatey(50%);">
    <div class="row" style="display:flex; justify-content:space-around; margin:1em">
        <div class="col-sm-4" style="border-radius: 25px; padding:25px; text-align:center; background-color:#0979B0">
            <button type="button" class="btn btn-primary"><a style="color:white; text-decoration:none" href="./FORMULARIOSP.php">FORMULARIOS PRINCIPALES</a></button>
            <br><br>
            <center>
                <div class="col-sm-10 bg-secondary" style="background-color:#0979B0; border-radius: 25px; padding:10px">
                    <h6>En este apartado se encuentran los dos formularios principales</h6><br>
                    <p>Estos son: FORMULARIO DE INVITADOS y FORMULARIOS DE EMERGENCIA</p>
                </div>
            </center>
        </div>

        <div class="col-sm-4" style="border-radius: 25px; padding:25px; text-align:center; background-color:#0979B0">
            <button type="submit" class="btn btn-primary"><a style="color:white; text-decoration:none" href="./FORMULARIOSS.php">FORMULARIOS SECUNDARIOS</a></button><br><br>
            <center>
                <div class="col-sm-10 bg-secondary" style="background-color:#0979B0; border-radius: 25px; padding:10px">
                    <h6>En este aparatado se encuentran los formularios extras, los cuales ocupan PHP, JSON y JavaScript</h6>
                </div>
            </center>
        </div>

        <div class="col-sm-4" style="border-radius: 25px; padding:25px; text-align:center; background-color:#0979B0">
            <button type="button" class="btn btn-primary"><a style="color:white; text-decoration:none" href="./USUARIOS.php">USUARIOS</a></button><br><br>
            <center>
                <div class="col-sm-10 bg-secondary" style="background-color:#0979B0; border-radius: 25px; padding:10px">
                    <h6>En este apartado podemos hacer operaciones con los usuarios</h6>
                </div>
            </center>
        </div>
    </div>
</div>

</html>
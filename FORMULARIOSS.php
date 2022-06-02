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
    <Script>
        $(document).ready(function() {
            $("#jqanimar").click(function() {
                $("#jqanimar2").animate({
                    left: '250px',
                    height: '10px'
                }, "slow");
            });

            $("#jqanimar1").click(function() {
                $("#jqanimar2").animate({
                    left: '50px',
                    height: '100px'
                }, "slow");
            });


            $("#hide").click(function() {
                $("#jqanimar2").hide();
            });

            $("#show").click(function() {
                $("#jqanimar2").show();
            });

            $("#fade").click(function() {
                $("#cu1").fadeIn();
                $("#cu2").fadeIn("slow");
                $("#cu3").fadeIn(3000);
            });

            $("#fade2").click(function() {
                $("#cu1").fadeOut();
                $("#cu2").fadeOut("slow");
                $("#cu3").fadeOut(3000);
            });

            $("#flip").click(function() {
                $("#panel").slideDown("slow");

            });

            $("#flip2").click(function() {
                $("#panel").slideUp("slow");

            });

            $("#json").click(function() {
                const obj = {
                    marca: "",
                    modelo: "",
                    placas: "",
                    año: 0,
                    plazas: 0,
                    instrucciones: ""
                };
                obj.marca = document.getElementById("marcaA").value;
                obj.modelo = document.getElementById("modeloA").value;
                obj.placas = document.getElementById("placasA").value;
                obj.año = document.getElementById("añoA").value;
                obj.plazas = document.getElementById("plazasA").value;
                obj.instrucciones = document.getElementById("valetA").value;

                const myJSON = JSON.stringify(obj);
                document.getElementById("jsson").innerHTML = myJSON;

                alert(myJSON);

            });

            $("#angular").click(function() {
                const obj = {
                    op1: "",
                    op2: "",
                    op3: ""
                };
                obj.op1 = document.getElementById("firstOp").value;
                obj.op2 = document.getElementById("secondOp").value;
                obj.op3 = document.getElementById("thirdOp").value;

                const myJson = JSON.stringify(obj);
                alert(myJson);
            });
        });
    </Script>

    <script>
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.firstOp = "Botella de Vino";
            $scope.secondOp = "Cartera";
            $scope.thirdOp = "Corbata"
        });
    </script>
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
    <br></br><br>
    <div id="section5" class="container-fluid text-white" style="padding: 20px 20px; background-color: rgb(188, 144, 91);">
        <h1>FORMULARIOS EXTRAS PHP, JSSON, JS, ETC</h1><br>

        <div style="padding: 20px 20px; background-color: darkred;">
            <h3>VALET PARKING</h3><br>
            <button type="button" class="btn btn-light" onclick="alta()">Alta</button>
            <button type="button" class="btn btn-light" onclick="bajas()">Baja</button>
            <button type="button" class="btn btn-light" onclick="buscar()">Buscar</button>
            <button type="button" class="btn btn-light" onclick="cambios()">Cambiar</button>
            <button type="button" class="btn btn-dark" onclick="report()">Reporte</button>
            <button type="button" class="btn btn-dark" onclick="location.href='reu_reporte_valet.php'">Ver personal del valet</button>

            <div id=altas style="display: none;">
                <br>
                <label for="lname">Qué coche vas a llevar ? (Marca)</label><br>
                <select id="marcaA">
                    <option value="Audi">Audi</option>
                    <option value="Mercedes">Mercedes</option>
                    <option value="BMW">BMW</option>
                    <option value="Smart">Smart</option>
                </select><br><br>
                <label for="lname">Qué modelo es ?</label><br>
                <input type="text" id="modeloA"><br><br>
                <label for="lname">Cuáles son sus placas ?</label><br>
                <input type="text" id="placasA"><br><br>
                <label for="lname">De qué año es ?</label><br>
                <select id="añoA">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2017">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select><br><br>
                <label for="lname">Cuantas plazas tiene ?</label><br>
                <select id="plazasA">
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select><br><br>
                <label for="lname">Instrucciones para el valet:</label><br>
                <textarea id="valetA" name="message" rows="5" cols="30"></textarea><br><br>
                <button type="button" class="btn btn-light" id="json"> GUARDAR Y DESPLEGAR</button><br><br>
                <p id="jsson"></p>

                <button type="button" class="btn btn-dark" onclick="register()">Registrar</button>
            </div>

            <div id="reporte2" style="display: none;">
                <br>
                <table id="reporte" class="table table-striped table-light"></table>
            </div>

            <div id="buscar2" style="display: none;">
                <br>
                <h2>Consulta de coches</h2>
                Selecciona un campo para buscar:<br>
                <select id="campoBusqueda">
                    <option value="marca">marca</option>
                    <option value="modelo">modelo</option>
                    <option value="placas">placas</option>
                    <option value="año">año</option>
                    <option value="plazas">plazas</option>
                </select>

                <input type="text" maxlength="40" id="textoBusqueda" /><br><br>
                <button type="submit" class="btn btn-dark" onclick="busqueda()">Buscar</button>
                <br><br>
                <p id="message"></p>
                <table id="resultadoBusqueda" class="table table-striped table-light"></table>
            </div>

            <div id="bajas" style="display: none;">
                <br>
                <h2>Baja de alumnos</h2>
                <div class="body">
                    Introduce las placas del auto a dar de baja
                    <br><br>
                    <input type="text" maxlength="10" id="claveB" /><br><br>
                    <button class="btn btn-dark" type="submit" onclick="deleteData()">DAR DE BAJA</button>
                </div>
            </div>

            <div id="cambios" style="display: none;">
                <br>
                <h2>Modificar coche</h2>
                Introduce las placas del coche a modificar<br><br>
                <input type="text" maxlength="6" id="buscarC" /><br><br>
                <button type="button" class="btn btn-dark" onclick="changeData()">Buscar</button><br><br>
                <div class="body" id="formCambios" style="display:none">
                    <div class="body">
                        <p>Modifica los campos que requieras:</p>
                        <label for="lname">Qué coche vas a llevar ? (Marca)</label><br>
                        <select id="marcaC">
                            <option value="Audi">Audi</option>
                            <option value="Mercedes">Mercedes</option>
                            <option value="BMW">BMW</option>
                            <option value="Smart">Smart</option>
                        </select><br><br>
                        <label for="lname">Qué modelo es ?</label><br>
                        <input type="text" id="modeloC"><br><br>
                        <label for="lname">Cuáles son sus placas ?</label><br>
                        <input type="text" id="placasC"><br><br>
                        <label for="lname">De qué año es ?</label><br>
                        <select id="añoC">
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2017">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                        </select><br><br>
                        <label for="lname">Cuantas plazas tiene ?</label><br>
                        <select id="plazasC">
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br><br>
                        <label for="lname">Instrucciones para el valet:</label><br>
                        <textarea id="valetC" name="message" rows="5" cols="30"></textarea><br><br>
                    </div>
                    <button type="button" class="btn btn-dark" onclick="updateData()">Modificar</button>
                </div>

            </div>
        </div>

        <br>

        <div style="padding: 20px 20px; background-color: rgb(48, 109, 43);" ng-app="myApp" ng-controller="myCtrl">
            <h2>INTERCAMBIO</h2>
            <label>Opcion 1:</label><br>
            <input type="text" ng-model="firstOp" id="firstOp"><br><br>
            <label>Opcion 2:</label><br>
            <input type="text" ng-model="secondOp" id="secondOp"><br><br>
            <label>Opcion 3:</label><br>
            <input type="text" ng-model="thirdOp" id="thirdOp"><br><br>
            Opciones de Intercambio: {{firstOp + ", " + secondOp + " o " + thirdOp}}
            <br><br>
            <button type="button" class="btn btn-dark" id="angular"> DESPLEGAR</button><br>
        </div>
    </div>
    <br>
</body>

</html>
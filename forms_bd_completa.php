<!DOCTYPE html>
<html>
<?php
session_start();
?>

<head>
    <title>FORMS COMPLETO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script type="text/javascript" src="rab.js"></script>
    <script type="text/javascript" src="emergencia.js"></script>
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
                    <a class="nav-link" href="#section1">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Forms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">jquery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">Bootstrap</a>
                </li>
            </ul>
            <img src="logo.jpg" alt="Logo" style="width:40px;" class="rounded-pill">
        </div>
    </nav>
    <br><br><br>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Atencion!</strong> Debes llenar todos los campos para poder continuar
    </div>

    <div id="section1" class="container-fluid bg-secondary text-white" style="padding:25px 20px;">
        <h1>PRACTICA DE FORM - REUNION</h1>
        <h6>CARREÓN ALONSO SEBASTIAN - LEDESMA MIGUEL ANGEL</h6><br>
        <div class="spinner-grow text-dark"></div>
        <button type="button" class="btn btn-light" id="flip">Mostrar formulario</button>
        <button type="button" class="btn btn-light" id="flip2">Ocultar formulario</button>
    </div>

    <br>
    <section id="section2" class="container-fluid bg-success text-white" style="padding:20px 20px;">
        <h3 id="form_inv">FORMULARIO DE INVITADOS</h3>
        <form id="panel" style="display: none;">
            <fieldset>
                <div id="datosinv">
                    <legend>DATOS DE INVITADO</legend>
                    <label for="fname">Nombre:</label><br>
                    <input type="text" id="fname" name="fname" value="---" autofocus><br><br>
                    <label for="lname">Apellido:</label><br>
                    <input type="text" id="lname" name="lname" value="---"><br><br>
                </div>

                <label for="gests">Seleccione la cantidad de invitados:</label><br><br>
                <input type="radio" value="none">
                <label>ninguno</label>
                <input type="radio" value="few">
                <label>1 a 3 personas</label>
                <input type="radio" value="lot">
                <label>3 o mas personas</label><br><br>

                <label for="food">Seleccione que comida quisiera en la reunion:</label><br><br>
                <input type="checkbox" value="veggie">
                <label>Vegetariana</label><br>
                <input type="checkbox" value="mexican">
                <label>Mexicana</label><br>
                <input type="checkbox" value="asian">
                <label>Asiatica</label><br>
                <input type="checkbox" value="italian">
                <label>Italiana</label><br><br>

                <label for="place">Seleccione el lugar que desee para realizar la fiesta:</label>
                <br><br>
                <select id="placeSelector">
                    <option>Salon de fiesta</option>
                    <option>Casa</option>
                    <option>Jardín</option>
                    <option>Antro</option>
                </select><br><br>

                <div id="demo" class="carousel slide" data-bs-ride="carousel">

                    <!-- Indicators/dots -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                    </div>

                    <!-- The slideshow/carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <center><img src="salon.jpeg" alt="Salon" class="center" style="width:400px"></center>
                        </div>
                        <div class="carousel-item">
                            <center><img src="casa.jpg" alt="Casa" class="d-block" style="width:400px"></center>
                        </div>
                        <div class="carousel-item">
                            <center><img src="jardin.jpg" alt="jardin" class="d-block" style="width:400px"></center>
                        </div>
                        <div class="carousel-item">
                            <center><img src="antro.jpg" alt="Antro" class="d-block" style="width:400px"></center>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>


                <label for="theme">Seleccione el tipo de temática que prefiere:</label><br><br>
                <select id="placeSelector" size="3" multiple>
                    <option>Black & White</option>
                    <option>Años 80's</option>
                    <option>Sombreros locos</option>
                    <option>Lentes chistosos</option>
                </select><br>
                <p>Puedes esocger más de una opción usando CTRL+click</p><br>
                <div id="agrcom">
                    <label for="message">Aquí puedes agregar un comentario:</label>
                    <br><br>
                    <textarea name="message" rows="10" cols="30"></textarea><br>
                    <br>
                </div>
                <label for="button">Clickea este botón para una sorpresa</label><br><br>
                <button type="button" class="btn btn-light" type="button" onclick="alert('Estamos felices de que asistas a la fiesta')">
                    Sorpresa</button><br><br>

                <label for="wine">Escribe el alcohol que deseas tomar</label>
                <br><br>

                <input list="wine">
                <datalist id="wine">
                    <option value="Pliudere">
                    <option value="Rexfox">
                    <option value="Chatome">
                    <option value="Peralta">
                </datalist>
                <small>
                    <p>Vinos sugeridos</p>
                </small>
                <br>
                <p>Con cuanta actitud vienes ?</p>
                0
                <input type="range" id="a" name="a" value="50">
                100
                <br><br>

                <p>Cuando prefieres que sea la fiesta:</p>
                <input type="date" id="birthday" name="birthday">
                <br><br><br>

                <label id="numero" for="phone">Dejanos tu numero de celular:</label><br><br>
                <input type="tel" id="phone" name="phone" placeholder="55-00-00-00-00" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"><br><br>
                <small>Formato: 55-00-00-00-00</small><br><br>
                <input type="reset">
                <input type="submit" value="Submit">

            </fieldset>
        </form>
    </section>

    <br>

    <div id="section3" class="container-fluid bg-warning text-white" style="padding: 20px 20px;">
        <h3>USO DE EFECTOS</h3>
        <br>
        <button type="button" class="btn btn-light" id="jqanimar1">Animar izquierda</button>
        <button type="button" class="btn btn-light" id="jqanimar">Animar derecha</button>
        <button type="button" class="btn btn-light" id="hide">Esconder</button>
        <button type="button" class="btn btn-light" id="show">Mostrar</button><br><br>
        <div id="jqanimar2" style="background:#21babf;height:100px;width:100px;position:absolute;"></div>
        <br><br><br><br><br>
        <button type="button" class="btn btn-light" id="fade">Mostrar cajas</button>
        <button type="button" class="btn btn-light" id="fade2">Desvanecer cajas</button><br><br><br>

        <div id="cu1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
        <div id="cu2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
        <div id="cu3" style="width:80px;height:80px;display:none;background-color:blue;"></div>
        <br>
    </div>

    <br>

    <!--Aquí empieza la parte de bootstrap-->

    <div id="section4" class="container-fluid bg-secondary text-white" style="padding: 20px 20px;">
        <div id="infoext">
            <h3>INFORMACIÓN EXTRA</h3><br>
            <button type="button" class="btn btn-success" data-bs-toggle="collapse" data-bs-target="#demo">Info
                extra</button>
            <div id="demo" class="collapse">
                <br>
                <p>Este evento es para que todos podamos vernos despues de estos últimos
                    años difíciles. Queremos tener un pequeño tiempo para ustedes y que la pasen increible.</p>
            </div>
        </div>

        <br><br>
        <div>
            <h3>NAVEGACIÓN RÁPIDA</h3>
            <ul class="nav">
                <li class="nav-item">
                    <a class="btn" href="#form_inv">Formulario de invitado</a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="#section3">Uso de afectos</a>
                </li>
                <li class="nav-item">
                    <a class="btn" href="#caso_em">Casos de emergencia</a>
                </li>
            </ul>
        </div>
    </div>


    <!--JSON-->

    <br>
    <div id="section5" class="container-fluid text-white" style="padding: 20px 20px; background-color: rgb(188, 144, 91);">
        <h1>FORMULARIOS EXTRAS PHP, JSSON, JS, ETC</h1><br>

        <div style="padding: 20px 20px; background-color: darkred;">
            <h3>VALET PARKING</h3><br>
            <button type="button" class="btn btn-light" onclick="alta()">Alta</button>
            <button type="button" class="btn btn-light" onclick="bajas()">Baja</button>
            <button type="button" class="btn btn-light" onclick="buscar()">Buscar</button>
            <button type="button" class="btn btn-light" onclick="cambios()">Cambiar</button>
            <button type="button" class="btn btn-dark" onclick="report()">Reporte</button>

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

        <br>


        <!-- USO DE PHP PARA BASE DE DATOS -->
        <div id="caso_em" style="padding: 20px 20px; background-color: rgb(121, 176, 180);" ng-app="myApp" ng-controller="myCtrl">
            <h2>CASOS DE EMERGENCIA</h2>
            <br>
            <button type="button" class="btn btn-light" onclick="alta_contacto()">Alta de contacto</button>
            <button type="button" class="btn btn-dark" onclick="location.href='reu_login.php'">LOGIN</button>
            <br><br>
            <button type="button" class="btn btn-light" onclick="baja_contacto()">Baja de contactos</button>
            <button type="button" class="btn btn-light" onclick="actualiza_contacto()">Atualizacion de
                contactos</button>
            <button type="button" class="btn btn-light" onclick="busqueda_contacto()">Busqueda de contactos</button>
            <button type="button" class="btn btn-dark" onclick="reporte_contacto()">Reporte de contactos</button>


            <div id="eme_ata" style="display: none;">

                <br>
                <h4>RECOPILACION DE DATOS</h4><br>
                <?php

                if (!isset($_SESSION["Usuario"])) { //Nunca se asignó, no autenticado correctamente
                    $_SESSION["LoginError"] = "1";
                    header("Location: http://localhost/FORMS CON BD COMPLETA/reu_login.php");
                    exit;
                } //if
                ?>
                <form action="http://localhost/FORMS CON BD COMPLETA/reu_alta_procesa.php" method="post">
                    Nombre del contacto de emergencia: <input type="text" id="Nombre" name="Nombre"><br><br>
                    Correo del contacto de emergencia: <input type="text" id="Correo" name="Correo"><br><br>
                    Celular del contacto de emergencia: <input type="text" id="Celular" name="Celular"><br><br>
                    Parentesco: <input type="text" id="Parentesco" name="Parentesco"><br><br>
                    Tipo de sangre: <input type="text" id="Sangre" name="Sangre"><br><br>
                    Seguro: <input type="text" id="Seguro" name="Seguro"><br><br>
                    No. de poliza: <input type="text" id="Poliza" name="Poliza"><br><br>
                    <input class="btn btn-dark" type="submit">
                </form>
            </div>

            <div id="em_rep" style="display: none;">
                <br>
                <h4>REPORTE DE CONTACTOS</h4><br>
                <form action="http://localhost/FORMS CON BD COMPLETA/reu_reporte.php">
                    <input class="btn btn-dark" type="submit" value="Mostrar reporte">
                </form>
            </div>

            <div id="em_bqd" style="display: none;">
                <br>
                <h4>BUSCAR CONTACTO</h4><br>
                <form action="http://localhost/FORMS CON BD COMPLETA/reu_buscar.php" method="post">
                    Nombre de contacto:
                    <input type="text" id="Nombre" name="Nombre"><br>
                    <input class="btn btn-dark" type="submit" value="Buscar">
                </form>
            </div>

            <div id="em_baja" style="display: none;">
                <br>
                <h4>ELIMINAR CONTACTO</h4><br>
                <form action="http://localhost/FORMS CON BD COMPLETA/reu_eliminar.php" method="post">
                    Nombre de contacto:
                    <input type="text" id="Nombre" name="Nombre"><br>
                    <input class="btn btn-dark" type="submit" value="Buscar">
                </form>
            </div>

            <div id="em_act" style="display: none;">
                <br>
                <h4>ACTUALIZAR CONTACTO</h4><br>
                <form action="http://localhost/FORMS CON BD COMPLETA/reu_actualiza_busca.php" method="post">
                    Nombre del contacto:
                    <input type="text" id="Nombre" name="Nombre"><br>
                    <input class="btn btn-dark" type="submit" value="Buscar">
                </form>
            </div>

        </div>
    </div>

</body>

</html>
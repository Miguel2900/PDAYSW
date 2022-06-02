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
            $("#flip").click(function() {
                $("#panel").slideDown("slow");

            });

            $("#flip2").click(function() {
                $("#panel").slideUp("slow");

            });
        });
    </Script>
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
                <input type="tel" id="phone" name="phone" placeholder="55-00-00-00-00" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"><br><br>
                <small>Formato: 55-00-00-00-00</small><br><br>
                <input type="reset">
                <input type="submit" value="Submit">

            </fieldset>
        </form>
    </section>

    <br>
    <div id="section5" class="container-fluid text-white" style="padding: 20px 20px; background-color: rgb(188, 144, 91);">

        <!-- USO DE PHP PARA BASE DE DATOS -->
        <div id="caso_em" style="padding: 20px 20px; background-color: rgb(121, 176, 180);" ng-app="myApp" ng-controller="myCtrl">
            <h2>CASOS DE EMERGENCIA</h2>
            <br>
            <div>
                <button type="button" class="btn btn-light" onclick="alta_contacto()">Alta de contacto</button>
                <button type="button" class="btn btn-light" onclick="baja_contacto()">Baja de contactos</button>
                <button type="button" class="btn btn-light" onclick="actualiza_contacto()">Atualizacion de
                    contactos</button>
                <button type="button" class="btn btn-light" onclick="busqueda_contacto()">Busqueda de contactos</button>
                <button type="button" class="btn btn-dark" onclick="reporte_contacto()">Reporte de contactos</button>
            </div>

            <div id="eme_ata" style="display: none;">

                <br>
                <h4>RECOPILACION DE DATOS</h4><br>
                <form action="http://localhost/FORMS CON BD COMPLETA/reu_alta_procesa.php" method="post">
                    Nombre del contacto de emergencia: <input type="text" id="Nombre" name="Nombre"><br><br>
                    Correo del contacto de emergencia: <input type="text" id="Correo" name="Correo"><br><br>
                    Celular del contacto de emergencia: <input type="text" id="Celular" name="Celular"><br><br>
                    Parentesco:
                    <select id="Parentesco" name="Parentesco">
                        <option value="familiar">Familiar</option>
                        <option value="amigo">Amigo</option>
                        <option value="pareja">Pareja</option>
                    </select><br><br>
                    <div>
                        <label> Tipo de sangre: </label> <br>
                        Tipo A <input type="radio" id="Sangre" name="Sangre" value="a">
                        Tipo B <input type="radio" id="Sangre" name="Sangre" value="b">
                        Tipo AB <input type="radio" id="Sangre" name="Sangre" value="ab">
                        Tipo O <input type="radio" id="Sangre" name="Sangre" value="o"><br><br>
                        Seguro: <input type="text" id="Seguro" name="Seguro"><br><br>
                        No. de poliza: <input type="text" id="Poliza" name="Poliza"><br><br>
                    </div>
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
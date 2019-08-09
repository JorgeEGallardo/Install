<?php include "ext/header.php" ?>
<?php include "ext/navbar.php" ?>
<?php
session_start();
if(isset($_SESSION["user"])){
    header("Location: index");
    }
?>
<div class="container">
    <div class="row">
        <div class="col-6" style="margin-top:8%;">
            <div class="rounded" style=" background-color:rgba(225, 225, 225, 0.2)">
                <h1 style="color:rgba(2, 25, 25, 0.8);" class="display-4 text-center font-bold">SECT
                    Telecomunicaciones
                </h1>
                <p style="margin-bottom:12%" class="lead my-3  font-bold text-light">Dedicar a innovar las telecomunicaciones en el
                    estado al mejor
                    precio,con las mejores marcas y tecnologías.</p>
            </div>
        </div>
        <div class="col-5 bg-light rounded" style="margin-top:4%; margin-left:8%;padding:3%">
            <h4 class="text-center"> Ingreso al sistema </h4>

            <form action="scripts/login.php" id="login">
                <div class="form-group" style="margin-top:10%">
                    <div id="error">
                    </div>
                    <label for="user">Nombre de usuario</label>
                    <input type="email" class="form-control" id="user" name="user" aria-describedby="Nombre de usuario"
                        placeholder="Ingresa tu usuario">
                    <small id="Nombre de usuario" class="form-text text-muted">Si olvidaste tu nombre de usuario
                        contacta con el administrador</small>
                </div>
                <div class="form-group" style="margin-top:5%">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" name="password"
                        placeholder="Contraseña">
                    <small id="Nombre de usuario" class="form-text text-muted">Clave única para acceder al sistema, en
                        caso de olvido contacta con el administrador</small>

                </div>

            </form>
            <button type="button" onclick="POSTF('login')" style="width:100%; margin-top:10%"
                class="btn btn-success">Ingresa al
                sistema</button>
        </div>
    </div>
    <script src="js/login.js"></script>
    <?php include "ext/footer.php" ?>
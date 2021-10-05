<?php
/* Nombre de la página web. */
define('TITLE', 'Bienvenido');
/* Incluimos las rutas */
?>
<!DOCTYPE HTML>
<html lang="es-mx">

<head>
    <?php include "../assets/dep/head.php"; ?>
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <title><?php echo TITLE; ?></title>
</head>
<header>
    <?php include '../assets/dep/navbar.php' ?>
</header>


<body>
    <!-- Validamos si la sesión está iniciada. -->
    <?php if (!isset($_SESSION['rol'])) : ?>
        <!-- En este apartado es donde se mostrar- -->
        <!-- el formulario para registrarse o para -->
        <!-- iniciar sesión.                       -->
        <div class="row align-items-center">
            <!-- Área de registro de usuario -->
            <div class="col-6" id="frmSignUp">
                <div class="container">
                    <h1>Registro</h1>
                    <form class="row g-3">
                        <hr>
                        <h3>Datos personales</h3>
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-3">
                            <label for="inputPassword4" class="form-label">Apellido paterno</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-3">
                            <label for="inputPassword4" class="form-label">Apellido materno</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-md-4">
                            <label for="inputPassword4" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="inputPassword4">
                        </div>
                        <div class="form-check-inline col-md-4">
                            <label for="inputPassword4" class="form-label">Sexo</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Default radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Default checked radio
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h3>Datos de usuario</h3>
                        <div class="col-md-5">
                            <label for="inputPassword4" class="form-label">Nombre de usuario</label>
                            <input type="username" class="form-control" id="inputPassword4" placeholder="Ej. Andres213">
                        </div>
                        <div class="col-7">
                            <label for="inputAddress" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="inputAddress" placeholder="Ej. albertog21@gmail.com">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="inputAddress2">
                        </div>
                        <div class="col-6">
                            <label for="inputAddress2" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="inputAddress2">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Acepto terminos y condiciones
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Termina el área de registro usr. -->
            <!-- Área de inicio de sesión    -->
            <div class="col-6" id="frmSignIn">
                <h1>Inicio de sesión</h1>
                <hr>
                <div class="cointainer">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre de usuario / Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                </div>
            </div>
            <!-- Termina el área de inicio de ses -->
        </div>
        <hr>
    <?php endif; ?>
</body>
<?php include '../assets/dep/footer.php' ?>

</html>
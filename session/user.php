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
                            <label for="txtUsrName" class="form-label">Nombre</label>
                            <input type="username" class="form-control" id="txtUsrName">
                        </div>
                        <div class="col-md-3">
                            <label for="txtUsrLastName" class="form-label">Apellido paterno</label>
                            <input type="usrlastname" class="form-control" id="txtUsrLastName">
                        </div>
                        <div class="col-md-3">
                            <label for="txtUsrMLastName" class="form-label">Apellido materno</label>
                            <input type="usrmlastname" class="form-control" id="txtUsrMLastName">
                        </div>
                        <div class="col-md-4">
                            <label for="Bdate" class="form-label">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="Bdate">
                        </div>
                        <div class="form-check-inline col-md-4">
                            <label for="inputPassword4" class="form-label">Sexo</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="MaleGender">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Masculino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="FemaleGender" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Femenino
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="OtherGender" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Otro
                                </label>
                            </div>
                        </div>
                        <hr>
                        <h3>Datos de usuario</h3>
                        <div class="col-md-5">
                            <label for="txtNickName" class="form-label">Nombre de usuario</label>
                            <input type="username" class="form-control" id="txtNickName" placeholder="Ej. Andres213">
                        </div>
                        <div class="col-7">
                            <label for="txtAddress" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="txtAddress" placeholder="Ej. albertog21@gmail.com">
                        </div>
                        <div class="col-6">
                            <label for="txtPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="txtPassword">
                        </div>
                        <div class="col-6">
                            <label for="txtCPassword" class="form-label">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="txtCPassword">
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
                            <label for="txtUsrNameOrEmail" class="form-label">Nombre de usuario / Correo</label>
                            <input type="email" class="form-control" id="txtUsrNameOrEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="txtloginPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="txtloginPassword">
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
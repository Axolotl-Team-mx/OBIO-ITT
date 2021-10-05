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
        <!-- Área de registro de usuario -->
        <div class="container" id="frmSignUp">
        </div>
        <!-- Termina el área de registro usr. -->
        <!-- Área de inicio de sesión    -->
        <div class="container" id="frmSignIn">
        </div>
        <!-- Termina el área de inicio de ses -->
    <?php endif; ?>
</body>
<?php include '../assets/dep/footer.php' ?>

</html>
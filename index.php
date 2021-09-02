<?php
define('TITLE', 'Inicio - AxolotlTeam');
include_once 'assets/dependencies/connection.php';
session_start();
?>
<!DOCTYPE HTML>
<html lang="es-mx">

<head>
    <?php include 'assets/dependencies/head.php' ?>
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" />
    <title><?php echo TITLE; ?></title>
</head>
<header>
    <?php include 'assets/dependencies/navbar.php' ?>
</header>

<body>
    <h1>AxolotlTeam</h1>
    <h2>AxolotlTeam es un grupo de estudiantes de ingeniería que busca participar y sobresalir en
        los diferentes concursos.
        También nos agrada la idea de aprender mas sobre las herramientas que nos permitan cambiar la
        perspectiva de la sociedad buscando un cambio positivo en ella.</h2>
</body>
<footer>
    <?php include 'assets/dependencies/foot.php' ?>
</footer>

</html>
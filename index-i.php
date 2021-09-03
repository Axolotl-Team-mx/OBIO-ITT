<?php
define('TITLE', 'OBIO - ITT');
include_once 'assets/dependencies/connection.php';
session_start();
?>
<!DOCTYPE HTML>
<html lang="es-mx">

<head>
    <?php include 'assets/dependencies/head.php' ?>
    <link rel="shortcut icon" href="assets/img/icon/favicon.ico" />
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<header>
    <?php include 'assets/dependencies/navbar.php' ?>
</header>

<body>
    <head>
        <h1 class="titulo">AxolotlTeam</h1>
    </head>
    
    <nav>  
        <a href="#">Mas vendidos</a>
        <a href="#">Novedades</a>
        <a href="#">Promociones</a>
    </nav>
    
    <section>
        <h2>¿Quienes somos?</h2>
        <p>
        AxolotlTeam es un grupo de estudiantes de ingeniería que busca participar y sobresalir en
        los diferentes concursos.
        También nos agrada la idea de aprender mas sobre las herramientas que nos permitan cambiar la
        perspectiva de la sociedad buscando un cambio positivo en ella.
        </p>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="48" height="48" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="12" cy="11" r="3" />
            <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
        </svg>
        <p>Tijuana, Baja California</p>

        <a href="#">Contactar</a>
    </section>
    <section>
        <h2>Miembros</h2>
        <h3>Alvaro G.</h3>
        <h3>Alan G.</h3>
        <h3>Isaias P.</h3>
    </section>
</body>
<footer>
    <?php include 'assets/dependencies/foot.php' ?>
</footer>

</html>
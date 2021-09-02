<?php
define('TITLE', 'Bienvenido - AxolotlTeam');
include_once '../assets/dependencies/connection.php';
session_start();

if (!isset($_SESSION['rol'])) {
    header('location: login.php');
} else {
    if ($_SESSION['rol'] != 1) {
        header('location: ../login.php');
    }
}
?>
<!DOCTYPE HTML>
<html lang="es-mx">

<head>
    <?php include '../assets/dependencies/head.php' ?>
    <link rel="shortcut icon" href="../assets/img/icon/favicon.ico" />
    <title><?php echo TITLE; ?></title>

</head>
<header>
    <?php include '../assets/dependencies/navbar.php' ?>
</header>

<body>
    <h1>AxolotlTeam</h1>
    <h2>Bienvenido.</h2>
</body>
<footer>
    <?php include '../assets/dependencies/foot.php' ?>
</footer>

</html>
<?php
define('TITLE', 'OBIO - Inicio'); // Texto de la pestaña del navegador
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
<h1 style="color: #000000;">Venta de productos Organicos de la mejor calidad!</h1>
<p>&nbsp;</p>
<h2 style="color: #2e6c80;">¿Que es OBIO Shop?</h2>
<p>Somos un equipo que esta decidido en ofrecerte los mejores productos sembrados y procesdos por la comunidad local de manera organica. Que sean lo mas saludables posibles y con el mejor precio del mercado. Todo al alcance de un click.</p>
<h2 style="color: #2e6c80;">Algunas de nuestras Caracteristicas:</h2>
<ol style="list-style: none; font-size: 14px; line-height: 32px; font-weight: bold;">
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/01-interactive-connection.png" alt="interactive connection" width="45" />Buena Comunicacion con el Cliente</li>
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/02-html-clean.png" alt="html cleaner" width="45" />Buen cuidado de nuestros Productos</li>
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/03-docs-to-html.png" alt="Word to html" width="45" />Buena organizacion de nuestra Pagina</li>
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/04-replace.png" alt="replace text" width="45" />Productos actualizados al estandar actual</li>
<li style="clear: both;"><img style="float: left;" src="https://html-online.com/img/05-gibberish.png" alt="gibberish" width="45" />Posibilidad de compartirlo a las redes sociales</li>
</ol>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<h2 style="color: #2e6c80;">Productos en Venta:</h2>
<table class="editorDemoTable" style="height: 390px;">
<thead>
<tr style="height: 18px;">
<td style="height: 18px; width: 267.797px;">Tipo de Producto 1</td>
<td style="height: 18px; width: 354.766px;">Producto</td>
<td style="height: 18px; width: 42.3906px;">Precio</td>
</tr>
</thead>
<tbody>
<tr style="height: 18px;">
<td style="height: 18px; width: 267.797px;">Tipo de Producto 2</td>
<td style="height: 18px; width: 354.766px;">Producto</td>
<td style="height: 18px; width: 42.3906px;">0</td>
</tr>
<tr style="height: 22px;">
<td style="height: 22px; width: 267.797px;">Tipo de Producto 3</td>
<td style="height: 22px; width: 354.766px;">Producto</td>
<td style="height: 22px; width: 42.3906px;">0</td>
</tr>
<tr style="height: 22px;">
<td style="height: 22px; width: 267.797px;">Tipo de Producto 4</td>
<td style="height: 22px; width: 354.766px;">Producto</td>
<td style="height: 22px; width: 42.3906px;">0</td>
</tr>
<tr style="height: 18px;">
<td style="height: 18px; width: 267.797px;">Tipo de Producto 5</td>
<td style="height: 18px; width: 354.766px;">Producto</td>
<td style="height: 18px; width: 42.3906px;">0</td>
</tr>
</tbody>
</table>
<p><strong>&nbsp;</strong></p>
<p><strong>Dejanos saber tu opinion en nuestra caja de comentarios</strong><br /><strong>Gracias!</strong></p>
<p><strong>&nbsp;</strong></p>
</body>
<footer>
    <?php include 'assets/dependencies/foot.php' ?>
</footer>

</html>
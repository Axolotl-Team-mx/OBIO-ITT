<?php
/* Nombre de la página web. */
define('TITLE', 'Nuestros productos');
/* Incluimos las rutas */
?>
<!DOCTYPE HTML>
<html lang="es-mx">

<head>
    <?php include "assets/dep/head.php"; ?>
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <title><?php echo TITLE; ?></title>
</head>
<header>
    <?php include 'assets/dep/navbar.php' ?>
</header>

<body>
    <!-- Comienzan los productos top -->
    <div class="container" id="frmTopProducts">
        <!-- Código referente a los productos top, esta parte se diseñará -->
        <!-- directamente  con php y la lectura de la calificación de las -->
        <!-- calificaciones  de los clientes, es decir, el dato se tomará -->
        <!-- directamente de la base de datos. -->
    </div>
    <!-- Termina el área de productos top -->

    <!-- Comienzan los productos     -->
    <div class="container" id="frmTopProducts">
        <!-- Lista de los productos en la tienda, estos se distribuirán a -->
        <!-- mediante las categorías.                                     -->
    </div>
    <!-- Termina el área de productos     -->
</body>
<?php include 'assets/dep/footer.php' ?>

</html>
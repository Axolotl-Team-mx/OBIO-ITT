<?php
$boots = "assets/css/styles.css";
switch (basename($_SERVER["PHP_SELF"])) {
    case 'user.php':
        $boots = "../assets/css/styles.css";
        break;
}
?>
<!-- Área de dependencias. -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- Definimos nuestro styles. -->
<link rel="stylesheet" href="<?php echo $boots ?>">
<!-- Definimos fonts de google -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@300;700&display=swap" rel="stylesheet">
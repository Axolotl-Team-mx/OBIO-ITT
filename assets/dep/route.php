<!-- Comienzan funciones PHP -->
<?php
function userLoc()
{
    /* Arreglo con las rutas de cada página. */
    $url = array(
        "logo" => "#",
        "index" => "#",  /* 0 index url       */
        "market" => "#", /* 1 market url      */
        "signin" => "#", /* 2 signin url      */
        "signup" => "#", /* 3 signup url      */
        "profile" => "#",/* 4 profile url     */
        "panel" => "#"   /* 5 panel url       */
    );
    /* |=====| Preguntamos si está definida la sesión. |=====| */
    if (isset($_SESSION['rol'])) {
        /* |=====| Definimos valores por defecto para este |=====| */
        /* |=====| caso.                                   |=====| */
        $url['index'] =  'index.php';
        $url['market'] = 'market.php';
        $url['signin'] = 'signin.php';
        $url['signup'] = 'signup.php';
        /* |=====| Validamos  en que parte de la página se |=====| */
        /* |=====| encuentra el usuario.                   |=====| */
        switch (basename($_SERVER["PHP_SELF"])) {
            case "index.php":
                $url['index'] = 'prueba.php';
                $url['market'] = 'index.php';
                $url['profile'] = 'index.php';
                break;
            default:
                echo basename($_SERVER["PHP_SELF"]);
                break;
        }
        /* |=====| FIN validación de posición del usuario. |=====| */
    } else {
        /* |=====| Definimos valores por defecto para este |=====| */
        /* |=====| caso.                                   |=====| */
        $url['logo'] =  'assets/img/Logo.png';
        $url['index'] =  'index.php';
        $url['market'] = 'market.php';
        $url['signin'] = 'signin.php';
        $url['signup'] = 'signup.php';
        /* |=====| Validamos  en que parte de la página se |=====| */
        /* |=====| encuentra el usuario.                   |=====| */
        switch (basename($_SERVER["PHP_SELF"])) {
            case "user.php":
                $url['logo'] =  '../assets/img/Logo.png';
                $url['index'] =  '../index.php';
                $url['market'] = '../market.php';
                $url['signin'] = '../signin.php';
                $url['signup'] = '../signup.php';
                break;
            default:
                break;
        }
        /* |=====| FIN validación de posición del usuario. |=====| */
    }
    /* |=====| Regresamos el arreglo de los links.     |=====| */
    return $url;
    /* |=====| FIN pregunta de sesión.                 |=====| */
}
?>
<!-- Terminan funciones PHP  -->
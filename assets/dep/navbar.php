<!-- Comienza el código para establecer las rutas de los archivos y dependencias. -->
<?php
include "route.php";
$Links = userLoc();
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="collapse navbar-collapse" id="bdNavbar">
        <a class="navbar-brand p-2 me-2" href="#" aria-label="Bootstrap">
            <a class="navbar-brand" href="#">
                <img src='<?php echo $Links['logo']; ?>' alt="" width="60" height="60">
            </a>
        </a>
        <hr class="d-md-none text-white-50">

        <ul class="navbar-nav flex-row flex-wrap ms-md-auto p-2">
            <!-- Botón de inicio. -->
            <li class="nav-item col-6 col-md-auto">
                <a class="nav-link p-2" href="<?php echo $Links['index']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                    </svg>
                    Inicio</a>
            </li>

            <!-- Botón hacia productos. -->
            <li class="nav-item col-6 col-md-auto">
                <a class="nav-link p-2" href="<?php echo $Links['market']; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-basket2-fill" viewBox="0 0 16 16">
                        <path d="M5.929 1.757a.5.5 0 1 0-.858-.514L2.217 6H.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h.623l1.844 6.456A.75.75 0 0 0 3.69 15h8.622a.75.75 0 0 0 .722-.544L14.877 8h.623a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1.717L10.93 1.243a.5.5 0 1 0-.858.514L12.617 6H3.383L5.93 1.757zM4 10a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 1 1-2 0v-2zm4-1a1 1 0 0 1 1 1v2a1 1 0 1 1-2 0v-2a1 1 0 0 1 1-1z" />
                    </svg>
                    Productos</a>
            </li>

            <!-- Botón de inicio de sesión. -->
            <!-- Validamos si la sesión está iniciada. -->
            <?php
            if (!isset($_SESSION['rol']))
                if (basename($_SERVER["PHP_SELF"]) != 'user.php') :
            ?>
                <li class="nav-item col-6 col-md-auto" id="btnsignIn">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                            </svg>
                            Identificate
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="nav-link p-2" onclick="showForm()" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseLogin">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                Iniciar sesión</a>
                            <!-- Definimos el link de user.php -->
                            <a class="nav-link p-2" href="session/user.php" role="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"></path>
                                </svg>
                                Registrarme</a>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
        </ul>

        <!-- Formulario de inicio de sesión -->
        <div id="formLogin" style="display: none;">
            <form class="d-flex input-group">
                <input type="text" aria-label="First name" placeholder="Usuario" class="form-control">
                <input type="password" aria-label="Last name" placeholder="Contraseña" class="form-control">
                <a class="btn btn-outline-secondary " type="button" onclick="showForm()" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                    </svg>
                </a>
            </form>
        </div>

        <!-- Área de busqueda. -->
        <div class="d-flex p-3">
            <form class="input-group">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <a href="#" type="submit" class="btn btn-outline-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </a>
            </form>
        </div>
        <!-- Fin navBar -->
    </div>
</nav>
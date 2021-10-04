<!-- php -->
<?php
$Logo = "assets/img/Logo.png";
switch (basename($_SERVER["PHP_SELF"])) {
    case 'user.php':
        $Logo = "../assets/img/Logo.png";
        break;
}
?>
<!-- JS -->
<script src="assets/js/nav.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- Footer -->
<footer>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-2 py-2">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="<?php echo $Logo; ?>" class="d-block mx-lg-auto img-fluid" alt="OBIO Orgánico" width="350" height="250" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Contáctanos</h1>
                <p>
                    OBIO es un fruto del esfuerzo, creatvidad y compromiso de comunidades,
                    cooperaticas y organizaciones de pequeños productores rurales que trabajan
                    la tierra y ofrecen a los consumidores productos saludables, frescos, libres
                    de plaguicidas, producidos bajo esquemas que respetan y protegen la biodiversidad.
                </p>
            </div>
        </div>
    </div>
</footer>
var showLogin = false;
/* Función que permite esconder el botón de login. */
function showForm() {
    if (!showLogin) {
        document.getElementById("btnsignIn").style.display = "none";
        document.getElementById("formLogin").style.display = "inline";
        showLogin = !showLogin;
    } else {
        document.getElementById("btnsignIn").style.display = "inline";
        document.getElementById("formLogin").style.display = "none";
        showLogin = !showLogin;
    }
}

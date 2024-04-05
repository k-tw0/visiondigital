document.addEventListener("DOMContentLoaded", function () {
    const menuIcon = document.getElementById("menuIcon");
    const menuContent = document.getElementById("menuContent");
    const equisMenu = document.getElementById("id-equis-menu"); // Referencia al icono de cerrar menú

    menuIcon.addEventListener("click", toggleMenu);
    equisMenu.addEventListener("click", toggleMenu);

    function toggleMenu() {
        if (menuContent.style.left === "0px") {
            menuContent.style.left = "-500px";
        } else {
            menuContent.style.left = "0px";
        }
    }
});

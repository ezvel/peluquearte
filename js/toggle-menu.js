const $toggleMenu = document.getElementById("toggle-menu");
const $menu = document.getElementById("menu");
const $main = document.getElementById("main");

$toggleMenu.addEventListener("click", () => {
    $menu.classList.toggle("menu--show");
    $main.classList.toggle("main--agregar-margin");
})

window.addEventListener("resize", () => {
    if ($menu.classList.contains("menu--show")) {
        $menu.classList.remove("menu--show");
    }

    if($main.classList.contains("main--agregar-margin")) {
        $main.classList.remove("main--agregar-margin");
    }
})

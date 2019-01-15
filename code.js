const menubtn = document.getElementById("menubtn");
const menuIco = document.getElementById("menuIco");
const menuBd = document.getElementById("menuboard");

menubtn.addEventListener("click", () => {
    menuBd.classList.toggle('menuOpen');
    menuIco.classList.toggle('menuIcoRotate');
    
})
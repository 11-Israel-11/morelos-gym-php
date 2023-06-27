
document.querySelector(".navpc").addEventListener("click", ()=>{
    const burger = document.querySelector(".navpc")
    burger.classList.toggle("closeMenu");
    document.querySelector(".mobileMenu").classList.toggle("mostrar")
})

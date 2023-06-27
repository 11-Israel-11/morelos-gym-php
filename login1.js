
const username = document.querySelector(".username")
const pin = document.querySelector(".pin")

const send = () => {

    if(username.value.length <= 0 || pin.value.length <= 0){

        document.querySelector(".errorDatos").classList.toggle("mostrar")
        document.querySelector(".username").classList.toggle("errorInputs")
        document.querySelector(".pin").classList.toggle("errorInputs")
    }else{
        document.querySelector(".errorDatos").classList.remove("mostrar")
        document.querySelector(".username").classList.remove("errorInputs")
        document.querySelector(".pin").classList.remove("errorInputs")
        if(document.querySelector(".username"){
            console.log("bienvenido")
            document.location.href = "./perfil.html"
        }else{
            console.log("rechazadp")
            console.log(document.querySelector(".username").value)
        }
    }
}


const inscribirse = () => {
    document.querySelector(".inscripcion").classList.toggle("mostrar")
}
const pagar = () => {
    document.querySelector(".mensualidad").classList.toggle("mostrar")
}

document.querySelector(".pagarMes").addEventListener("change", ()=>{
    console.log(document.querySelector(".pagarMes").options.selectedIndex)
    if(document.querySelector(".pagarMes").options.selectedIndex == 0){
        document.querySelectorAll(".botonPago").disabled = true;
        document.querySelector(".totalPagar").innerHTML = 0

    }else if(document.querySelector(".pagarMes").options.selectedIndex == 1){
        document.querySelector(".totalPagar").innerHTML = 300
        document.querySelectorAll(".botonPago").disabled = true;
    }else if(document.querySelector(".pagarMes").options.selectedIndex == 2){
        document.querySelector(".totalPagar").innerHTML = 200
        document.querySelectorAll(".botonPago").disabled = true;
    }
})

const administrar = () => {
    document.querySelector(".suscripcion").classList.remove("ocultar")
    document.querySelector(".suscripcion").classList.toggle("mostrar")
    //ERRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRRROR AL MOMENTO DE QUE UN USUARIO QUIERA PAGAR MENSUALIDAD DESPUES DE 1 AÑO INACTIVO
}

document.querySelector(".close-suscripcion").addEventListener("click", () => {
    document.querySelector(".suscripcion").classList.toggle("ocultar")
    document.querySelector(".suscripcion").classList.remove("mostrar")
})
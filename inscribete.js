const username = document.querySelector(".username")
const pin = document.querySelector(".pin")
const email = document.querySelector(".email")
const telefono = document.querySelector(".telefono");


document.querySelector(".signUpButton").addEventListener("click", ()=>{
    const menuPay = document.querySelector(".payment")
    menuPay.classList.toggle("mostrar")
})

const send = () => {

    if(username.value.length <= 0 || pin.value.length <= 0){

        document.querySelector(".errorDatos").classList.toggle("mostrar")
        document.querySelector(".username").classList.toggle("errorInputs")
        document.querySelector(".email").classList.toggle("errorInputs")
        document.querySelector(".telefono").classList.toggle("errorInputs")
        document.querySelector(".pin").classList.toggle("errorInputs")
        console.log("hola")
    }else{
        document.querySelector(".errorDatos").classList.remove("mostrar")
        document.querySelector(".username").classList.remove("errorInputs")
        document.querySelector(".email").classList.toggle("errorInputs")
        document.querySelector(".telefono").classList.toggle("errorInputs")
        document.querySelector(".pin").classList.remove("errorInputs")
        if(document.querySelector(".username").value == "diego" && document.querySelector(".pin").value == "0424"){
            document.location.href = "./perfil.html"
        }else{
            console.log(document.querySelector(".username").value)
        }
    }
}

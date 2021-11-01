let categoria = document.getElementById("categoria")
let cantidad = document.getElementById("cantidad")
let valorTicket = document.getElementById("valorTicket").innerHTML
let total = document.getElementById("total")
let resumen = document.getElementById("resumen")
let porcentaje;

let calcularTotal = () => {
    return (parseInt(valorTicket)-parseInt(valorTicket)*(parseInt(porcentaje)/100))*parseInt(cantidad.value)
}

categoria.addEventListener('change', (e) => {
    switch(categoria.value){
        case "estudiante":
            porcentaje = +80
            break;
            case "trainee":
                porcentaje = +50
                break;
                case "junior":
                    porcentaje = +15
                    break;
                }
            })
            


resumen.addEventListener('click', () => {
    total.innerHTML = calcularTotal()
    })


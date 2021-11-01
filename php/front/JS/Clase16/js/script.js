//Eventos

//en html
{/* <input type="button" value="Clickea el boton" onblur="alert('Mensaje en el click');" /> */}

//tambien podrias acceder al atributo con JS

/*
document.getElementById("nombre").onchange = mostrarAlert;
*/

//De esta manera no necesitas hacer la asignación a una variable porque sólo quieres agregarle la accion al elemento
document.getElementById("nombre").addEventListener("change", mostrarAlert)

function mostrarAlert(){
    alert("Escribiste algo");
}


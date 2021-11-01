let linkGoogle = document.getElementById("linkGoogle")
console.log(linkGoogle.innerHTML)


//Obtener elementos mediante la clase
let elemLista = document.getElementsByClassName("elem-lista")
console.log(elemLista[1].innerHTML);

//Obtener elementos mediante el nombre de etiqueta

let listaLinks = document.getElementsByTagName("a")
console.log(listaLinks[0].innerHTML);

//Obtener un dato de un formulario

let formulario = document.getElementById("nombre");
alert(formulario.value)

//agregar nodos
//crear elemento
let titulo = document.createElement("h1")

//crear el contenido del nodo de texto
let texto = document.createTextNode("Hola codo a codo dede JS")

//asignar el nodo de texto al elemento
titulo.appendChild(texto)

//asignar el elemento al documento
document.body.appendChild(titulo)

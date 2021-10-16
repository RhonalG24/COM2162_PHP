let semaforoEnVerde = false
let semaforoEnRojo = true

// if(semaforoEnVerde){
//     alert("Puede avanzar")
// }

// if(semaforoEnRojo){
//     alert("Detente");
// }


//Condiciones anidadas
if(semaforoEnRojo){
    alert("Detengase")
} else{
    alert("Puede avanzar")
}

//Asignación del valor booleano
let numero = 7

let esMayorQue5 = ( numero > 5)

if(esMayorQue5){
    alert("El numero es mayor que 5")
}

//Operadores lógicos

let a = 2
let b = 3
let c = 4

if (a > b && b > c){
    alert("La condicion es true")
}else{
    alert("No se cumplen las condiciones")
}

//Desafio
/*
1 Pedir numero y alert si es > 1000
2 pedir texto y escribir por consola si == "Hola"
3 pedir numero y alert si esta entre 10 y 50
*/

let numA = prompt("Ingrese un número");
if(parseInt(numA) > 1000){
    alert("El número ingresado es mayor a 1000.")
}
let textB = prompt("Escriba cualquier texto");
if(textB == "Hola"){
    console.log("Hola tambien!")
}
let numC = prompt("Ingrese un número");
if(parseInt(numC) > 10 && parseInt(numC) < 50){
    alert("El número ingresado está entre 10 y 50.")
}

(textB == "Hola") ? console.log("Hola tambien!") : console.log("Ni siquiera saluda..");
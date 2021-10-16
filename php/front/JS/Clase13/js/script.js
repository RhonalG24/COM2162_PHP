//array en JS

let estudiantes = ["Cesar", "Leonardo", "Laura"]

console.log(estudiantes[estudiantes.length-1])
console.log(estudiantes)

estudiantes.push("Maxi") //agrega al final del array
console.log(estudiantes)
estudiantes.shift() //elimina el primer elemento del array
console.log(estudiantes)
estudiantes.pop() //elimina el ultimo elemento del array
console.log(estudiantes)

let nuevosEstudiantes = ["Juan", "Sofia"];
let totalEstudiantes = estudiantes.concat(nuevosEstudiantes);
console.log(totalEstudiantes);

//tambien se puede hacer estudiantes = estudiantes.concat(nuevosEstudiantes); para sobreescribir el array

//Repaso ciclo for

for(let i = 0; i < totalEstudiantes.length; i++){
    console.log("hola "+totalEstudiantes[i]);
}

//Ciclos while, Do while
let turno = 0

while (turno < 10) {
    console.log("Turno " + turno)
    turno++
}

//do while.. La diferencia es que el do while ejecuta las instrucciones al menos una vez

let edad;
do {
    edad = parseInt(prompt("cual es tu edad"))
}while(edad < 18)

let caso = "lun"
switch (caso) {
    case "lun":
        console.log("Buen inicio de semana")
        break;

    default:
        break;
}
let diaDeSemana = parseInt(prompt("Ingrese el numero del dia"))

switch(diaDeSemana){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        alert("Aun no es fin de semana");
        break

    default:

        alert("Es fin de semana")
        break
}
let nombre = "juan"; //cadena de caracteres
let dni = 123456789; //numerico. Puede ser int o float y JS lo asigna automáticamente
let habilitado = true; //variable booleana, señal digital. True o False, 1 o 0

//Concatenacion, unión de dos o más elementos.
let informe = "El usuario es " + nombre + ". Su DNI es: " + dni + " y su estado de habilitación es " + habilitado;

let a = 5;
let b = 3;

let c = a+b; //se pueden hacer operaciones matemáticas

//funciones predefinidas

//prompt

let nombreIngresado = prompt("Ingrese su nombre:");

console.log("El nombre ingresado fue " +nombreIngresado); //se usa para imprimir un mensaje

alert("Bienvenido a Codo a codo"); //para mostrar una ventana de alerta

//desafios

//parsear: significa tomar un dato y convertirlo a otro tipo de dato.
//Podemos usar typeof() para saber el tipo de dato de una variable
let numA = parseInt(prompt("Ingrese un número:"));
let numB = parseInt(prompt("Ingrese otro número:"));

console.log("La multiplicación es: "+(numA*numB));





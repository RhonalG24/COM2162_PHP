//Declaración de una función

function saludar(){
    console.log("Hola ¿cómo estás?")
}
let mensaje;

function saludarYRetornar(){
    return "Hola, estoy retornando este mensaje"
}

mensaje = saludarYRetornar();
alert(mensaje)
//Llamada a la función

saludar()

//Direferencia entre saludar y saludar()

//saludar() llama a la funcion

//saludar hace referencia a la funcion
//ejemplo: console.log(saludar)

    //Salida:
    // ƒ saludar(){
    //     console.log("Hola ¿cómo estás?")
    // } //Muestra la descripción de la función

//Uso de parámetros
function saludarANombre(nombre, edad){
    console.log("hola " + nombre + ". Tu edad es " + edad)
}

saludarANombre("Rocio", 26)
//Estructura de repetición for

for(let i = 0; i < 5; i++){
    console.log("Hola numero " + i)
}

//ejemplo practico
// indice:       0       1           2           3 ...
let dias = ["Lunes", "Martes", "Miercoles" , "Jueves" , "Viernes", "Sábado", "Domingo"]

let esFinDeSemana = false;

for(let i = 0; i < 7; i++){
    console.log(dias[i]);
    if(i > 4){
        esFinDeSemana = true;
    }
    //Operador ternario: (condicon) ? true : false;
    esFinDeSemana ? console.log("Es fin de semana") : console.log("Aun no es fin de semana") 
}
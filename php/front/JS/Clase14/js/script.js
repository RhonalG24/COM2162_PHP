//Arrow function

//(parametros) => {}

//ejemplo function

// function sumarFunction(){
//     return 2+3
// }
// alert(sumarFunction())
// //ejemplo arrow
// //se almacena la variable. Usualmente del tipo const

// const sumarArrow = () => 4+6

// alert(sumarArrow())


//otro ejemplo
const sumarParam = (a,b) => a+b

alert(sumarParam(2,2))
//mi prueba
// let resultado = sumarParam(parseInt (prompt("Ingrese el primer valor")), parseInt( prompt("Ingrese el segundo valor")))
// alert(resultado)

const sumarYPromediar = (a,b) => {
    let resultado = sumarParam(a,b)
    let promedio = resultado / 2
    return "La suma es " + resultado +" y el promedio es " + promedio
}

alert(sumarYPromediar(4,4))

//ejemplo: sistema de pedidos en restaurante
    let mesaDisponible = true
    let respuestaDeMesa
    if(mesaDisponible){
        respuestaDeMesa = () => "La mesa puede ser asignada"
    }else{
        respuestaDeMesa = () => "La mesa esta ocupada"
    }

    console.log(respuestaDeMesa())

    //ejemplo con operador ternario
    //sintaxis
    //variable = condicion ? true : false

    let mensajeMesa = (mesaDisponible) ? "Puede ser asignada." : "La mesa esta ocupada."

    console.log(mensajeMesa)

    //otro ejemplo

    let tieneDescuento = true
    let mensajeEntrada = "El precio de la entrada es: " + ((tieneDescuento) ? "500" : "700") + " pesos."

   console.log(mensajeEntrada)

   //ejemplo con bloques de codigos

   let semaforoEnVerde = true

   semaforoEnVerde ? (
       console.log("Los autos avanzan."),
       console.log("Los peatones esperan.")
   ) : (
    console.log("Los autos esperan."),
    console.log("Los peatones avanzan.")
   )

   /*
   Objetos en JS
   Es un tipo de dato que tiene propiedades y funcionalidades
   Por ejemplo, sin objeto habria que hacer
   let auto1Modelo = "Civic"
   let auto1Marco = "Honda"
   let auto1Color = "Negro"
   
   Con objetos seria

   sintaxis literal
*/
   const auto = {

    //Atributos o propiedades
       //clave : valor
       marca : "Honda",
       modelo : "Civic",
       anio : 2020,

    //Responsabilidades o Metodos
        mostrarInfo : function(){
            return this.modelo + " " + this.marca + " " + this.anio
        } 
   }

   //accedo a sus propiedades con '.'
   console.log(auto.marca)
   


<!-- embeber codigo -->

<?php
$nombre = "Juanito";
$edad = 18;

//funcion array, recibe como parametro cada elemento del array

$productos = array("Gabinete", "Monitor", "Teclado", "Grafica", "Mouse");

//array asociativo, se caracteriza por que los indices se pueden asociar al valor del dato, con el formato clave => valor
//array asociativo - clave => valor
// ejemplo de array asociativo
$usuario1 = array(
    "nombre" => "Soledad",
    "apellido" => "Cardazo",
    "dni" => 12345678,
    "edad" => 30
);
//var_dump($usuario1); //para ver la info del array

//para acceder a los indices
echo($usuario1["apellido"]);

//array multidimensional
$usuarioMulti = array(
    "usuario1" => array(
        "nombre" => "Soledad",
        "apellido" => "Cardazzo",
        "dni" => 12312333,
        "edad" => 30
    ),
    "usuario2" => array(
        "nombre" => "Rhonal",
        "apellido" => "Gonzalez",
        "dni" => 12314433,
        "edad" => 35,
        "hobbies" => array(
            "Pintar", "Escribir","programar"
            )
        )
);

//var_dump($usuarioMulti);
echo($usuarioMulti["usuario2"]["hobbies"][2]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- ejemplo de array asociativo -->
<div>
    <?php foreach ($usuario1 as $dato => $valor) :?>
        <span><?=$dato?> : <?=$valor?></span>
        <?php endforeach?>
</div>

<!-- ejemplo for  -->
    <div>
        <ul>
            <?php for($i = 0; $i< count($productos) ; $i++) : ?>
            <li> <?=$productos[$i]?></li>
            
            <?php endfor ?>
        </ul>
    </div>








  <?php if($edad >= 18){
      echo("<span>Bienvenido " . $nombre . "</span>" );  
    }
?>
<!-- otra manera, pero que puede traer problemas -->
<?php if($edad >=18) { ?>
<span>Bienvenido <?php echo($nombre);?> </span>
<?php } ?>

<!-- otra mejor opcion -->
<div id="<?=$idUser?>" ></div>
<?php if($edad >= 18) : ?>
    <span>Bienvenido <?=$nombre?> </span>
<?php else : ?> 
<span>hola <?=$nombre?> No puede inscribirse con <?=$edad?> años</span>
    <?php endif ?>
</body>
</html>
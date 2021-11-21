<?php
/*
Supongamos una veterinaria, 4 entidades: Mascota, perro, gato, duenio

Mascota{
    nombre: String,
    edad: Int,
    raza: string,
    ----------
    vacunar(): void,
    darTratamiento(): bool
};

Perro{
darTratamiento(): boolean
}

Gato {
    darTratamiento(): boolean
}

Duenio{
    nombre: string,
    dni: int,
    telefono: int
}
(mascota tiene dueño)
Mascota -> Dueño
|      |
↓      ↓
Perro  Gato

La implementacion del tratamiento varia 

*/

abstract class Mascota
{
    private string $nombre;
    private int $edad;
    private string $raza;
    private Duenio $duenio;


    public function __construct(string $nombre, int $edad, string $raza, Duenio $duenio)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->raza = $raza;
        $this->duenio = $duenio;
    }


    public function vacunar(): void
    {
        echo ("Vacunando Mascota " . $this->nombre);
    }

    public abstract function darTratamiento(): void;
}

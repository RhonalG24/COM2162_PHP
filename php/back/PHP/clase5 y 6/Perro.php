<?php
class Perro extends Mascota{
    public function darTratamiento(): void
    {
        echo("Diagnostico como Perro a ". $this->getNombre());
    }
}

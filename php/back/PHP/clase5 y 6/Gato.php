<?php
class Gato extends Mascota{
    public function darTratamiento(): void
    {
        echo("Diagnostico como Gato a ". $this->getNombre());
    }
}

<?php

class Cliente
{
    //Atributos o propiedades (deben ser privados)
    private int $nroSocio;
    private string $nombre;
    private int $dni;
    private int $telefono;
    private string $correo;
    private string $direccion;
    private string $condFrenteIVA;
    private bool $afiliado;

    //metodo constructor
    public function __construct(string $nombre, int $dni, int $telefono)
    {
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->telefono = $telefono;
    }

    //metodos (responsabilidades) (deben ser publicos)
    public function pagar()
    {
        print_r(value: "cliente " . $this->nombre  . " pagando");
    }

    public function devolver()
    {
        print_r(value: "Cliente " . $this->nombre . " devolviendo");
    }

    //getters (obtiene) y setters (asignan)
    //setters, siempre reciben parametros y no retornan nada
    public function setNroSocio(int $nroSocio)
    {
        $this->nroSocio = $nroSocio;
        print_r(value: "Numero de socio modificado");
    }

    //getters, siempre devuelven un dato y no reciben parametros
    public function getNroSocio(): int
    {
        return $this->nroSocio;
    }
}

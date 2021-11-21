<?php

class Usuario{
    private string $nombre;
    private string $apellido;
    private int $edad;
    private string $hobbie;
    private string $editorCodigo;
    private string $sistemaOp;

    /**
     * Get the value of nombre
     *
     * @return string
     */
    public function getNombre(): string
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @param string $nombre
     *
     * @return self
     */
    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of apellido
     *
     * @return string
     */
    public function getApellido(): string
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @param string $apellido
     *
     * @return self
     */
    public function setApellido(string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of edad
     *
     * @return int
     */
    public function getEdad(): int
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @param int $edad
     *
     * @return self
     */
    public function setEdad(int $edad): self
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of hobbie
     *
     * @return string
     */
    public function getHobbie(): string
    {
        return $this->hobbie;
    }

    /**
     * Set the value of hobbie
     *
     * @param string $hobbie
     *
     * @return self
     */
    public function setHobbie(string $hobbie): self
    {
        $this->hobbie = $hobbie;

        return $this;
    }

    /**
     * Get the value of editorCodigo
     *
     * @return string
     */
    public function getEditorCodigo(): string
    {
        return $this->editorCodigo;
    }

    /**
     * Set the value of editorCodigo
     *
     * @param string $editorCodigo
     *
     * @return self
     */
    public function setEditorCodigo(string $editorCodigo): self
    {
        $this->editorCodigo = $editorCodigo;

        return $this;
    }

    /**
     * Get the value of sistemaOp
     *
     * @return string
     */
    public function getSistemaOp(): string
    {
        return $this->sistemaOp;
    }

    /**
     * Set the value of sistemaOp
     *
     * @param string $sistemaOp
     *
     * @return self
     */
    public function setSistemaOp(string $sistemaOp): self
    {
        $this->sistemaOp = $sistemaOp;

        return $this;
    }
}
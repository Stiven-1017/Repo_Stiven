<?php
class Persona
{
    public $nombre;
    private $edad;

    public function __construct($nombre, $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludo()
    {
        return "Hola, soy $this->nombre";
    }
}

$persona = new Persona("Stiven", 25);
echo $persona->saludo();


<?php

    #creamos la clase bombilla
class Bombilla {

    #crea una variable que solo se puede utilizar dentro de la clase
    private bool $encendida;

    #el valor predetermiando de $encendida es false
    #__construct es para que se cree automaticamente la función al llamar al objeto.
    public function __construct() {
        $this->encendida = false;
    }

    #creamos la función getEncendida para poder comprobar que la bombilla está en false o true
    public function getEncendida(): bool {
        return $this->encendida;
    }

    #función para encender la bombilla
    #void es un tipo que hace que 
    public function encender(): void {
        $this->encendida = true;
        echo "<p>La bombilla está ahora encendida.</p>" .
             "<p>\$this->encendida es " . ($this->encendida ? 'true' : 'false') . "</p>";
    }
    #función que apaga la bombilla
    public function apagar(): void {
        $this->encendida = false;
        echo "<p>La bombilla está ahora apagada.</p>" .
             "<p>\$this->encendida es " . ($this->encendida ? 'true' : 'false') . "</p>";
    }
}
?>

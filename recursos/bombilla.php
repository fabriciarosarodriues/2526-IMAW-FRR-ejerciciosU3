<?php
class Bombilla {

    private bool $encendida;

    public function __construct() {
        $this->encendida = false;
    }

    public function getEncendida(): bool {
        return $this->encendida;
    }

    public function encender(): void {
        $this->encendida = true;
        echo "<p>La bombilla está ahora encendida.</p>" .
             "<p>\$this->encendida es " . ($this->encendida ? 'true' : 'false') . "</p>";
    }

    public function apagar(): void {
        $this->encendida = false;
        echo "<p>La bombilla está ahora apagada.</p>" .
             "<p>\$this->encendida es " . ($this->encendida ? 'true' : 'false') . "</p>";
    }
}
?>

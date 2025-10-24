<?php

    class pokemon {

        #string tipo cadena
        private string $nombre;
        private int $vida;

        public function __construct(string $nombre){
            $this->nombre = $nombre;
            $this->vida = 10;
        }

         public function getVida(): int {
        return $this->vida;
        }

        public function herir(int $fuerza): void {
            $this->vida -= $fuerza;
             #resta la fuerza al valor de vida
            echo "Ahora la vida de {$this->nombre} es {$this->vida}<br>";
        }
    }
?>
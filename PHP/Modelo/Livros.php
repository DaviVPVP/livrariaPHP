<?php

namespace PHP\Modelo;

class Usuario{
        private string $harry;
        private string $senhor;
        private string $percy;
        private string $animal;

        //Construtor
        public function __construct(
            string $harry,
            string $senhor,
            int $percy,
            string $animal)
        {
            $this->harry         = $harry;
            $this->senhor     = $senhor;
            $this->percy     = $percy;
            $this->animal = $animal;
        }//fim de construtor

         //get
         public function __get(string $nome){
            return $nome;
        }//fim do get genérico

        //set
        public function __set(string $nome, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        //imprimir
        public function imprimir():string{
            return "<br>Harry Potter: ".$this->harry.
                   "<br>Senhor dos Anéis:     ".$this->senhor.
                   "<br>Percy Jackson:     ".$this->percy.
                   "<br>Animal Planet:     ".$this->animal;
    }//fim de imprimir

}



?>
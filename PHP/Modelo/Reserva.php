<?php
    namespace PHP\Modelo;

    class Reserva{
        private int $codigo;
        private string $nome;
        private string $hora;
        private string $data;

        //imprimir
        public function __construct(int $codigo,
                                    string $nome,
                                    string $hora,
                                    string $data)
        {
            $this->codigo = $codigo;
            $this->nome = $nome;
            $this->hora = $hora;
            $this->data = $data;
        }

        //get
        public function __get(string $campo)
        {
            return $this->campo;
        }//fim do get genérico

        //set
        public function __set():void
        {
            $this->campo = $valor;
        }//fim do set genérico

        public function imprimir():string{
            return "<br>Código: ".$this->codigo.
                   "<br>Nome:     ".$this->nome.
                   "<br>Horário:     ".$this->hora.
                   "<br>Data:     ".$this->data;
    }//fim de imprimir
    }
?>
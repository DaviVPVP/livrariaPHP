<?php

namespace PHP\Modelo;

class Usuario{
        private string $codigo;
        private string $titulo;
        private string $autor;
        private string $preco;
        private int $qtdLivros;

        //Construtor
        public function __construct(
            string $codigo,
            string $titulo,
            string $autor,
            string $preco,
            string $qtdLivros)
        {
            $this->codigo  = $codigo;
            $this->titulo = $titulo;
            $this->autor  = $autor;
            $this->preco = $preco;
            $this->qtdLivros = $qtdLivros;

        }//fim de construtor

         //get
         public function __get(string $nome, string $login, string $senha){
            return $nome;
        }//fim do get genérico

        //set
        public function __set(string $campop, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        //imprimir
        public function imprimir():string{
            return "<br>Código: ".$this->harry.
                   "<br>Título:     ".$this->titulo.
                   "<br>Autor:     ".$this->autor.
                   "<br>Preço:     ".$this->preco.
                   "<br>Quantidade de Livros:     ".$this->qtdLivros;

    }//fim de imprimir
}



?>
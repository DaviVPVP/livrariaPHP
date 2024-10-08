<?php

namespace PHP\Modelo;

class Livros{
        private int $codigo;
        private string $titulo;
        private string $autor;
        private string $preco;
        private string $qtdLivros;

        //Construtor
        public function __construct(
            int $codigo,
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
         public function __get(string $campo){
            return $nome;
        }//fim do get genérico

        //set
        public function __set(string $campo, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        //imprimir
        public function imprimir():string{
        
            return "<br>Código: ".$this->codigo.
                   "<br>Título:     ".$this->titulo.
                   "<br>Autor:     ".$this->autor.
                   "<br>Preço:     ".$this->preco.
                   "<br>Quantidade de Livros:     ".$this->qtdLivros;

    }//fim de imprimir

    //consulta
    public function consulta():string{
        switch($this->codigo){
            case 1:
                return  "<br>Código: " .$this->codigo. 
                        "<br>Título: " ."Harry Potter". 
                        "<br>Autor: " . "J.K Rowling".
                        "<br>Preço: ". "R$ 30,00". 
                        "<br>Quantidade de Livros: " . 1;
                break;
                case 2:
                    return  "<br>Código: " . $this->codigo. 
                            "<br>Título: " . "Senhor dos anéis". 
                            "<br>Autor: " . "   Tolkien".
                            "<br>Preço: " . "   R$ 30,00". 
                            "<br>Quantidade de Livros: " . 2;
                    break;
                case 3:
                    return  "<br>Código: " .$this->codigo. 
                            "<br>Título: " . "Animal Planet". 
                            "<br>Autor: " . "   Richard Rasmussen".
                            "<br>Preço: " . "   R$ 30,00". 
                            "<br>Quantidade de Livros: " . 3;
                    break;
            default:
                return "Código inexistente! ";
                break;
        }
    }//fim de consulta

    //compra
    public function compra()
        {
            switch($this->codigo){
                case 1:
                    $this->quantidade = 5;
                    return "<br>Compra realizada com sucesso! ";
                    break;
                case 2;
                    return "<br>Livro indisponível. Fazer reserva? ";
                    break;
                }
        }//fim de compra
}



?>


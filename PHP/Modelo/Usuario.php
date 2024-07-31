<?php

namespace PHP\Modelo;

class Usuario{
        private string $nome;
        private string $endereco;
        private int $telefone;
        private string $dtNascimento;
        private string $login;
        private string $senha;

        //Construtor
        public function __construct(
            string $nome,
            string $endereco,
            int $telefone,
            string $dtNascimento,
            string $login,
            string $senha)
        {
            $this->nome         = $nome;
            $this->endereco     = $endereco;
            $this->telefone     = $telefone;
            $this->dtNascimento = $dtNascimento;
            $this->login        = $login;
            $this->senha        = $senha;
        }

         //get
         public function __get(string $nome){
            return $nome;
        }//fim do get genérico

        //set
        public function __set(string $nome, string $valor):void{
            $this->nome = $valor;
        }//fim do set genérico

        //fim de imprimir
        public function imprimir():string{
            return "<br>Nome: ".$this->nome.
                   "<br>Endereço:     ".$this->endereco.
                   "<br>Telefone:     ".$this->telefone.
                   "<br>Nascimento:     ".$this->dtNascimento.
                   "<br>Login:     ".$this->login.
                   "<br>Senha    :     ".$this->senha;
        }//fim do método

        public function validarUsuario(string $login, string $senha)
        {
            return $login . " " . $senha;
        }
    }






?>
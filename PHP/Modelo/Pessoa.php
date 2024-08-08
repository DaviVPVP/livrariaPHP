<?php
    namespace PHP\Modelo;

    require_once('Endereco.php');

    class Pessoa{
        //Declarando variáveis 
        private string $cpf;
        private string $nome;
        private string $endereco;
        private string $telefone;
        private string $dtNascimento;
        private string $login;
        private string $senha;


        //Método construtor
        public function __construct(string $cpf, string $nome, string $endereco, string $telefone, string $dtNascimento, string $login, string $senha){
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->dtNascimento = $dtNascimento;
            $this->login = $login;
            $this->senha = $senha;
        }//fim do construtor

        //Métodos de acesso e modificação
        
        public function __get(string $nome){
            return $this->nome;    
        }//fim do get genérico

        public function __set(string $campo, string $valor):void{
            $this->campo = $valor;
        }//fim do set

        public function imprimir():string
        {
            return "<br>CPF: ".$this->cpf.
                   "<br>Nome: ".$this->nome.
                   "<br>Endereco: ".$this->endereco.
                   "<br>Telefone: ".$this->telefone.
                   "<br>Data de Nascimento: ".$this->dtNascimento.
                   "<br>Login: ".$this->login.
                   "<br>Senha: ".$this->senha;

        }//fim do imprimir
    }//fim da classe
?>
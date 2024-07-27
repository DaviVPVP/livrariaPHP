<?php

namespace PHP\Modelo;

class Usuario{
        private string $nome;
        private string $endereco;
        private int $telefone;
        private string $dtNascimento;
        private string $login;
        private string $senha;

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
    }






?>
<?php  
    namespace PHP\Modelo; //Relacionamento com outras pastas
 
   class Compra{
      //Declarando as  as variaveis que vai usar
      private string $cpf;
      private string $titulo;
      private string $autor;
      private float  $preco;
      private int    $qtdLivros;
   
     //metodo contrutor para instanciar(dar valor)
   public function __construct(string $cpf, string $nome,string $endereco,string $telefone,string $dtNascimento){
      $this->cpf = $cpf;
      $this->nome = $nome;
      $this->endereco = $endereco;
      $this->telefone = $telefone;
      $this->dtNascimento = $dtNascimento;
       
      }//fim o construtor
 
    public function realizarCompra()
    {
          switch($this->cpf){
              case 1:
                  $this->quantidade = 4;
                  $this->quantidade -= 2;
                  return "<br>Compra realizada, " . $this->quantidade . " livros restantes";
                  break;
              case 2;
                  return "<br>Livro indisponível, deseja realizar a reserva?";
                  break;
              }
      }//fim de realizar Compra
 
 
    }//fim da Classe Usuario
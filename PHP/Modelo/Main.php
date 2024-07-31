<?php
    namespace PHP\Modelo; //Definir o local do projeto
    require_once('Usuario.php');
    require_once('Livros.php');
    require_once('Reserva.php');

    $usuario1 = new Usuario("Fabi", "SBC", 40028922,"2000", "Fabio","loveti");


    echo $usuario1->validarUsuario();

    


?>
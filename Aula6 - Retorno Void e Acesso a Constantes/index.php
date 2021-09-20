<?php

// Return Void
    echo '<b>Retorno Void</b><br>';
    function returnVoid($x) : void
    {
        return;
    }
    var_dump(returnVoid(4));


// Visibilidade de Constantes
    class Exemplo
    {
        private const NAME = "Mario";
        public const EMAIL = "mario@email.com";

        public function getName()
        {
            return self::NAME;
        }
    }

    echo '<br><br><b>Visibilidade de Constantes</b><br>';
    $e = new Exemplo;
    echo $e::EMAIL . '<br>';
    echo $e->getName();
?>
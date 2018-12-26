<?php

    function generatorPass()
    {
        $length = readline("Jakiej dlugosci haslo wygenerowac? ");
        $pass = "";

        for ($i = 0; $i < $length; $i++)
        {
            $pass .= chr(rand(32, 126));
        }
        echo $pass;
    }

    generatorPass();


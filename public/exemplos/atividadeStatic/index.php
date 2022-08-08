<?php
    require("elevador.php");

    Elevador::entrar(6,2);
    echo "<hr>";
    Elevador::inicializar(0,5,0,6);
    Elevador::setSubir(4);
    echo"<hr>";
    echo "<br>";
    Elevador::setDescer(2);
    echo"<hr>".Elevador::getDescer();
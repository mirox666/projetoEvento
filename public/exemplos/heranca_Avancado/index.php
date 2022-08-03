<?php
    require ("heranca2.php");

    $p1 = new Pessoa("Matheus", 20);
    $p1->relatorio();
    echo "<hr>";

    $a1 = new Aluno("Matheus",20,12);
    $a1->relatorio();
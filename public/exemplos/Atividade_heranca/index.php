<?php
    require ("Animal.php");

    $a1 = new Animal("vaca","Fazenda","Herbivora","Leite");
    $a1->viver();
    echo "<br>";
    $a1->product();
    echo "<hr>";

    $c1 = new Cachorro("Caramelo","Ruas","Carnivoro","Caninos","Carinho");
    $c1->morder();
    echo "<hr>";
    
    $p1 = new Peixe("Beta","Aquario","Herbivoro","Nadadeiras","Diversão");
    $p1->nadar();
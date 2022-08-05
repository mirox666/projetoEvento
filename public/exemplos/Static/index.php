<?php
    require ("funcionario.php");
   
    //$f1 = new Funcionario();

   // $f1->relatorio("Zé Gotinha",250);

   Funcionario::relatorio("Zé goti",1000);

   Funcionario::setSalario(3000);
   echo "<br>".Funcionario::getSalario();
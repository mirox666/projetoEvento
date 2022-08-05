<?php
    require("classeLogin/login.php");
    require("apiLogin/login.php");

    use classeLogin\Login;
    use apiLogin\Login as apiLogin;// Criando um apelido para o namespace

    $meuLogin = new Login();// 1° forma de utilizar namespace
    $meuLogin->verificaLogin();

    $meuLogin2 = new Login();//2° forma de usar namespace

    $meuLogin3 = new apiLogin();
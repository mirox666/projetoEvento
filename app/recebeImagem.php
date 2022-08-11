<?php
/*
echo "<pre>";
    print_r($_FILES);
echo "</pre>";
*/
$nomeArquivo = $_FILES["banner"]["name"];
$nomeTemporario = $_FILES["banner"]["tmp_name"];

if(empty($nomeArquivo)){
    echo "<br> Arquivo vazio";
}
else{
    echo "<br> Arquivo aceito";
    $infoArquivo = pathinfo($nomeArquivo);//Retorna um array com informações mais detalhadas do Arquivo
    echo "<br>";
    echo "<pre>";
        print_r($infoArquivo);
    echo "</pre>";
    if($infoArquivo["extension"]== "jpg" || "webp" || "png"){
        echo"<br> Formato de arquivo aceito";
        
        //Copiando imagem para o servidor.
        $pasta = "imagens/";
        //Iremos verificar se a pasta existe ou não.
        if(!file_exists($pasta)){
            mkdir($pasta,0777,true);// A função mkdir() Precisa de 3 parâmetros: 1-> nome da pasta; 2-> permisão para ler e escrever na pasta; 3-> Se irá criar subpastas ou não.
        }

        $caminhoFinal = $pasta.$nomeArquivo;
        move_uploaded_file($nomeTemporario,$caminhoFinal);
        echo "<img src='{$caminhoFinal}'width = '200px' height'200px'>";
    }   
    else{
        echo"<br> Formato de arquivo invalida";
    } 
}
    
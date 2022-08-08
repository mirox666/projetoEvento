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
        $caminhoFinal = $pasta.$nomeArquivo;
        move_uploaded_file($nomeTemporario,$caminhoFinal);
    }   
    else{
        echo"<br> Formato de arquivo invalida";
    } 
}
    
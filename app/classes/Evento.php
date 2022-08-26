<?php
class Evento{
    // Atributos 
    private $nomeEvento;
    private $dataEvento;
    private $banner;
    private $mensagem = [];// Esse atributo irá armazenar as mensagens de erro e sucesso.
    //Metodos:"Comportamentos"
    /**
     * @param $campos: este parâmetro espera receber uma constante $_POST
     * @param $arquivo: este parâmetro espera receber um valor do como por exemplo $_FILES'[banner]'
     */
    public function inicio($campos,$arquivo){
        //Verificar se os campos estão em branco
        if($this->recebeDados($campos)){
           if($this->validaData($campos["dataEvento"])){
            if($this->recebeArquivo($arquivo)){
                $this-> mensagem = [
                    "status" => true,
                    "msg" => "Evento cadastrado com sucesso"
                ];
            }
            else{
                $this-> mensagem = [
                    "status" => false,
                    "msg" => "Você precisa enviar uma imagem com formato jpg , png ou webp"
                ];
            }
           }
           else{
                $this-> mensagem = [
                "status" => false,
                "msg" => "data do evento é anterior à data atual"
            ];
           }
        }
            else{
                $this->mensagem = [
                    "status" => false,
                    "msg" => "Os campos nao podem ficar em branco"
                ];
            
        }
            return $this -> mensagem;
    }
    
    
    
    
    public function validaData($data){ 

        $dataEvento = new DateTime($data);// Está classe precisa de uma data no padrão americano para funcionar
        $dataAtual = new DateTime("now");// Estamos pegando a data atual 
        //echo $dataEvento->format("d/m/Y");// Mostrando a data no padrão Brasileiro
        //echo "<br> A data de hoje é: ";
        //print_r($dataAtual);
    
        if($dataEvento > $dataAtual){
            return true;
            //echo "<p>Data do Evento cadastrado com sucesso !!!</p>";
        }
        else{
            return false;
            //echo "<p>A data do evento não pode ser anterior ou igual à data atual</p>";
        }
    }

    public function recebeDados($campos){
        $this->nomeEvento = $campos["nomeEvento"];
        $this->dataEvento =$campos["dataEvento"];
        if(empty($this->nomeEvento)|| empty($this->dataEvento)){
            return false;
        }
        else{
            return true;
        }
        echo "O {$this->nomeEvento} vai acontercer na data {$this->dataEvento}";
    }
// Essa função irá receber o comando $_FILES['nome_//arquivo']
    public function recebeArquivo($banner){
        
        //$nomeArquivo = $_FILES["banner"]["name"];
        //$nomeTemporario = $_FILES["banner"]["tmp_name"];
        $this->banner = $banner;// Estou atribuindo $_FILES["banner"] para $this->banner 

        if(empty($this->banner['name'])){
            return false;
            //echo "<br> Arquivo vazio";
        }
        else{
           // echo "<br> Arquivo aceito";
            $infoArquivo = pathinfo($this->banner["name"]);//Retorna um array com informações mais detalhadas do Arquivo
            
            /*echo "<br>";
            echo "<pre>";
                print_r($infoArquivo);
            echo "</pre>";*/
            
            if($infoArquivo["extension"]== "jpg" || "webp" || "png"){
                
                // echo"<br> Formato de arquivo aceito";
                //Copiando imagem para o servidor.
                $pasta = "../imagens/";
                //Iremos verificar se a pasta existe ou não.
                if(!file_exists($pasta)){
                    mkdir($pasta,0777,true);// A função mkdir() Precisa de 3 parâmetros: 1-> nome da pasta; 2-> permisão para ler e escrever na pasta; 3-> Se irá criar subpastas ou não.
                }

                // Renomeando o arquivo
                $novoNome = new DateTime();
                //echo "<hr>".$novoNome->getTimestamp();
                $nomeFinal = $novoNome->getTimestamp().".".$infoArquivo["extension"];
                echo"<hr>".$nomeFinal;


                $caminhoFinal = $pasta.$nomeFinal;
                move_uploaded_file($this->banner["tmp_name"],$caminhoFinal);
                $this->banner = $caminhoFinal;
                return true;
                //echo "<img src='{$caminhoFinal}'width = '200px' height'200px'>";
            }   
            else{
                return false;
                //echo"<br> Formato de arquivo invalida";
            } 
        }
    
    }
    public function __get($atributo){
        return $this-> $atributo;
    }
}
//Instanciando um objeto

/*$meuEvento = new Evento();
print_r($meuEvento);
echo "<hr>";
$meuEvento-> recebeArquivo($_FILES["banner"]);*/
<?php
if(file_exists("global.php")) { /* verificar se o arquivo existe*/
    include_once './global.php[';
}
else if(file_exists("includes/global.php")){    
    include_once './includes/global.php';
}
function salvar() {
    if(
            isset($_POST['nome']) and
            isset($_POST['valor']) and
            isset($_POST['qtd'])
    ){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $qtd = $_POST['qtd'];
        $SQL = "";
        $preparo = conexao()->prepare($SQL);
        //$preparo->bindValue("", $nome);
        //$preparo->bindValue("", $valor);
        //$preparo->bindValue("", $qtd);
        $preparo->execute();
        if($preparo->rowCount()==1){
            echo"Sucesso!";
        }else{
            echo"Erro!";
        
        }
       
    }
} 


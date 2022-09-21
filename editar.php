<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'etec';
$conexao = new mysqli($servidor,$usuario,$senha,$banco);
if($conexao->connect_error){
    echo "Não possível conectar";
}else{ 
    $nome = $_GET['nome'];      
    $convidado = array('nome' => $nome); 
    header('Location:convidados.php');  
    echo "conectado com sucesso!";   
}
?>
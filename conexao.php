<?php
$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$banco = 'etec';

$conexao = new mysqli($servidor,$usuario,$senha,$banco);
if (isset($_GET['nome'])) {
    if($conexao->connect_error){
        echo "Não possível conectar";
    }else{        
        //echo "conectado com sucesso!";
        $sqlGravar = "INSERT INTO tb_convidados(nome,acompanhantes)VALUES('$_GET[nome]',$_GET[acompanhante])";
        $conexao->query($sqlGravar);     
        $resultado =  $conexao->query("SELECT * FROM tb_convidados");
    }
}else{
  $resultado =  $conexao->query("SELECT * FROM tb_convidados");
  $convidado = array('nome' => "");
}

?>
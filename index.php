<?php
$ola = "Olá";
$nome = "Francisco";
$amigoDoDono = false;
$idade = 25;
   echo $ola." Meu nome é ".$nome." e tenho ".$idade."<br>";
if($idade >= 18){
    echo "Pode entrar!";
}elseif($amigoDoDono == true){
    echo "Pode entrar!";
}else{
    echo "Não pode entrar!";
}

for($x = 1; $x <=100;$x++){
    echo "<br> nome".$x."<br>";
}

$cont = 1;
while ($cont <= 100){
    echo "<br> convidado".$cont."<br>";
   $cont++; 
}


?>
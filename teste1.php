<?php
function verificaA($a){
    $a = strtolower($a);
    $qtdA = substr_count($a, 'a');

    return $qtdA;

}
$palavra = "Ana";
$contemA = verificaA($palavra);

if($contemA>0){
    echo "A letra a aparece " . $contemA . " vezes";
}
else{
    echo 'Não contem a letra nessa palavra';
}


?>

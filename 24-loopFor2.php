<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop for Parte 2</title>
</head>
<body>
    
<?php
// Passagem de parâmetro por valor

function teste($x){
    $x += 2;
    echo "Passagem de parametro por valor: O valor de X é $x <br/>";
}
$a = 3;
teste($a);
echo " Passagem de parametro por valor: O valor de A é $a <br/>";

// Passagem de parâmetro por referência.
function teste2(&$x){
    $x +=2;
    echo "Passagem de parametro por referência: O valor de X é $x<br/>";
}
$a = 5;
teste2($a);
echo "Passagem de parametro por referência: O valor de A é $a<br/>";

?>
</body>
</html>
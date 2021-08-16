<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como Usar Formulários em PHP</title>
</head>
<body>



<?php

/* 
<form  method="get" //método de envio pela url //Post envia por pacotes
action="dados.php" >// ação de enviar os dados

Valor:<input type="text" name="v"/> // cria uma caixa de texto
        <input type="submit" name="Calcular"/> // Enviar o dado da caixa v para o php

</form>
// interligando os dados do fomulráio ao php

<?php
$valor = $_GET["v"]; // vamos enviar pelo metodo GET para v através da variável $valor
echo "Digitou $valor"
?>

*/

$valor = $_GET["v"];
$rq = sqrt($valor);
echo " A raiz de $valor é ".number_format($rq,2,",",".");





?>
    
<a href="10-obter_dados_formulario.html"><h3>Voltar</h3></a>
</body>
</html>
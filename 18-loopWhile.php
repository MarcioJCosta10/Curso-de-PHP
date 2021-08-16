<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop While </title>
</head>
<body>

<div>
    <?php 
        $i=1;
        while($i <= 5){
            $v = "num".$i;
            $url = "v".$i;
            $$v = isset($GET[$url])? $GET[$url] : 0;
            $i++;

        }
        echo "$num1, $num2, $num3,$num4";
    
        /// Temos os comandos break e continue para quebrar o fluxo natural do script

    ?>



</div>
    
</body>
</html>
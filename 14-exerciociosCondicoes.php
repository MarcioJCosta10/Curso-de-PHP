<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular a Média</title>
</head>
<body>
    <?php
        $n1 = isset($_GET["nota1"])? $_GET["nota1"]: 0;
        $n2 = isset($_GET["nota2"])?$_GET["nota2"]:0;
        $m = ($n1 + $n2) / 2;
        
        if($m <= 5 ){
            $sit = "REPROVADO <br/>";            
        }else if($m >=6 && $m <= 8) {
            $sit = "RECUPERAÇÃO <br/>";           
        }else {
            $sit = "APROVADO <br/>";
        }
       echo "A média entre $n1 e $n2 é $m <br/>";
       echo " A situação dele é $sit <br/>";
    ?>
    <a href="14-exerciosCondicoes.html">Voltar</a>
    
</body>
</html>
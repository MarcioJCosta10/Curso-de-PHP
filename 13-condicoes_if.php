<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições em PHP</title>
    
</head>
<body>
    <?php 
    
    $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
    $i = date("Y") - $a;

    echo "Você nasceu em $a e tem $i anos<br/>";
    
    /*
    if($i>=18){
        $v = "já pode votar";
        $d = "já pode dirigir";
    }
    else{
        $v = "não pode votar";
        $d = "não pode dirigir";

        

    }
    echo "Com $i anos você $v e $d<br/>";
    */

    //Condiçoes aninhadas 
    /*
    if(($i >=16 && $i <18 || $i >65)){
        $tipoVoto = "não vota<br/>";
            
    }else{
        if($i>=16 && $i<18){
            $tipoVoto = "voto opcional<br/>";
        
    }else{
        $tipoVoto =" voto obrigatorio<br/>";
    }
    }
    echo "Para essa idade, $tipoVoto<br/>";
    */


    //Aninhada com else if
    
    if(($i >=16 && $i <18 )){
        $tipoVoto = "não vota<br/>";            
    }else if($i>=16 && $i<18|| $i >65){
            $tipoVoto = "voto opcional<br/>";        
    }else{
        $tipoVoto =" voto obrigatorio<br/>";
    }
    echo "Para essa idade, $tipoVoto<br/>";
    ?>
    <a href="13-condicoes_if.html" >Voltar</a>;
    
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando Arquivos em PHP</title>
</head>
<body>
    <?php
    $distancia = $_POST["distancia"];
    $precoEtanol = $_POST["precoEtanol"];
    $precoGasolina = $_POST["precoGasolina"];
    $gastoEtanol = $distancia / 9 * $precoEtanol;
    $gastoGasolina = $distancia / 11 * $precoGasolina;

    echo "O valor gasto com Etanol é: ";
    echo number_format($gastoEtanol,2,",",".");
    echo "<br>";

    echo "O valor gasto com gasolina é: ";
    echo number_format($gastoGasolina,2,",",".");
    echo "<br>";

    if ($gastoEtanol < $gastoGasolina){
        echo "Abasteça com Etanol";
    } else {
        echo "Abasteça com Gasolina";
    }

    //Pegar data atual

    $data = date('d/m/Y');

    //abre o arquivo no modo de escrita com adição de dados (append)

    $arquivo = fopen('log.txt','a');
    if ($arquivo){
        //se conseguiu abri o arquivo, grava os dados seperando-os por um espaço

        fwrite($arquivo,$data);
        fwrite($arquivo, " ");
        fwrite($arquivo, number_format($precoEtanol,2, "," , "."));
        fwrite($arquivo, " ");
        fwrite($arquivo, " ");
        fwrite($arquivo, number_format($precoGasolina,2,",","."));
        //Grava uma quebra de linha
        fwrite($arquivo, "\n");
        //Fecha o arquivo
        fclose($arquivo);
    }

    
    ?>
    <!--Link para o Relatório-->
    <a href="22 -manipulandoArquivosRelatorio.php">Abrir Relatório</a>
</body>
</html>
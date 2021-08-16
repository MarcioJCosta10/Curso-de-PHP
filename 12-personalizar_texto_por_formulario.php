<!DOCTYPE html>
<html lang="pt-BR">
<head>
    
<?php 
$txt = isset ($_GET["t"]) ?   $_GET["t"]: "Texto Genério";
$tam = isset ($_GET["tam"]) ? $_GET["tam"] : "12pt";
$cor = isset ($_GET["cor"]) ? $_GET["cor"] : "#000000";

?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personalizar Texto via Formulário com PHP</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>

<?php 
    echo "<span class='texto'> $txt </span>";

?>

<a href="12-personlizar_text_por_formulario.html">Voltar</a>
    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For com PHP Exercício</title>
</head>
<body>
    
    <form action="21- loopForExerciciosPg2.php" method="get">
        <select name="num" >
          <!--Não vou ficar repetindo, vou usar o php
            <option >1</option>
            <option >2</option>
            <option >3</option>
            -->
            <?php
                for ( $c = 1; $c <= 10; $c++){
                    echo "<option>$c</option>";
                }
            ?>

        </select>
        <input type="submit" value="Tabuada"/>
    </form>
</body>
</html>
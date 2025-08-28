

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição</title>
</head>
<body>
    <ul>
    <h1>while</h1> <!-- usar para para algo sem ser contar algo -->
    <?php
        $cont = 0;
        while($cont <= 10) { 
            echo "<li>" . ($cont * 2) . "</li>"; 
            $cont++;  
        }
    ?>
</ul>
<h1> do...white</h1> <div <!-- vai rolar pelo menos uma vez -->
<ul>
    <?php
        $cont2 = 11;
        do{
            echo "<li>" .($cont2 *2). "</li>";
        } while($cont2 <=10);
    ?>
</ul>  
    <h1> For</h1> <!-- usar para contar algo-->
    <ul>
        <?php
            for($cont3 =0; $cont3 <= 10;$cont3++){
                echo "<li>" . ($cont3 * 2). "</li>";
            }
        ?>
    </ul>
    <h1>Foreach</h1> <!-- Para percorrer dados da lista dentro da variavel -->
    <?php $frutas = ['Maça','Banana','Laranja'];?>
    <ul>
        <?php
            foreach($frutas as $f){
                echo "<li>".$f."</li>";
            }
        ?>
    </ul> 
     <h1>Foreach - embedded</h1> <!-- option mais limpo para o cod -->
     <ul>
        <?php foreach($frutas as $f): ?>
            <li><?= $f ?></li>
            <?php endforeach ?>
     </ul>

</body>
</html>
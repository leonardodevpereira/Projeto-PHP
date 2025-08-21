<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula PHP</title>
</head>
<body>
    <h1> Ola mundo</h1>
    <p> Lorem ipsum dolor sit amet consectetur, 
        adipisicing elit. Officia in error animi 
        dolor tempora recusandae, quia, dicta 
        repellendus amet temporibus voluptates 
        voluptatem. Dolore vel accusamus rem 
        excepturi consequuntur quidem reiciendis.</p>

    <?php
    include('includes/teste.php');
    include_once ('includes/teste.php')  // include_once, require_once garante a nao repetição duplicada.
    ?>
        
</body>
</html>
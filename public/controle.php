<?php
$mensagem = "";
       if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //$mensagem ="Olá ";
       /* if($_POST['periodo'] == 'm'){
            $mensagem = 'Bom dia';
        } else if($_POST['periodo'] == 't'){
        $mensagem = 'Boa tarde ';
        } else{
        $mensagem = 'Bom noite ';
        } */   
    switch($_POST['periodo']){
        case 'm':
            $mensagem = 'Bom dia';
            break;
         case 't':
            $mensagem ='Boa Tarde';
            break;
         default:
         $mensagem = 'Boa noite';    
    }
        $mensagem .= $_POST['nome']; // $mensagem = mensagem . $_POST['nome'];
}else {
    $mensagem = "Digite o seu nome";
}
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle</title>
</head>
<body>
     <form action="controle.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome"/>
        <select name="periodo">
             <option value="m">Manhã</option>
            <option value="t">Tarde</option>
            <option value="n">Noite</option>
        </select>
        <button type="submit">Enviar</button>
     </form>
     <p> <?= $mensagem ?> </p>
</body>
</html>
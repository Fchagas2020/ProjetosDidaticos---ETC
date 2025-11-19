<?php

$nomes = ['Ana','Paulo','João','Pedro','Maria José','Nicolas Freire'];

// for ($i=0; $i <= 3; $i++) { 
//     echo nl2br("\n$nomes[$i]");

// }

// foreach ($nomes as $nome) {
//     echo nl2br("$nome\n");
// }
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(empty($_POST['nome'])){
        echo"Selecione um dos itens";
    }else{
        echo"Você selecionou:". $_POST['nome'];
    }
}else{
    echo"voce precisa enviar o formulário pelo botão ENVIAR";
    
    echo"<script>
    alert('Ei vc ai! Selecione algo no formulario!!')
    </script>";
}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
    <style>
        .b{
            width:100px;
            color:red;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <fieldset>
    <form action="arraySimples.php" method="post">
        
        
        <!-- <input type="radio" name="nome" value="Paulo">
        <label for="">Paulo</label><br>
        <input type="radio" name="nome" value="João">
        <label for="">João</label><br>
        <input type="radio" name="nome" value="Pedro">
        <label for="">Pedro</label><br><br> -->

        <?php
        foreach ($nomes as  $lista) { ?>

        <input type="radio" name="nome" value="<?php echo $lista;?>" >
        <label for=""><?php echo $lista;?></label><br>

       <?php }  ?>
        <br><br>
        <input class="b" type="submit" value="Enviar">
    </form>
    </fieldset>
    
</body>
</html>
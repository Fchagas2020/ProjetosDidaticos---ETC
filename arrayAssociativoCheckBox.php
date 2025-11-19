<?php
//associativo
$carros = [
    'Uno' =>1991,
    'Palio' =>2000,
    'Gol' =>2025,
    'Passat' =>1989,
    'Corsa' =>2002,
    'Fusca' =>1978
];


// foreach ($carros as $modelos=>$ano) {
//     echo nl2br("O carro $modelos, ano $ano\n") ;
// }

if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST['modelo'])){
        $modelos = $_POST['modelo'];
        $ano = $_POST['modelo'];
        echo"voce selecionou o(s) carro(s):";
        foreach ($modelos as $modelo => $ano ) {
            echo"Modelo:". ($modelo)." $ano";
        }
    }else{
        echo"Selecione ao menos 1 item";
    }

}else{
    echo"Click no botão enviar";
}




?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKBOX</title>
</head>
<body>
    <fieldset>
        <form action="arrayAssociativoCheckBox.php" method="post">
           
        <?php foreach ($carros as $modelo => $ano) { ?>
            <input type="checkbox" name="modelo[]" id="" value="<?php echo$modelo; echo $ano;?>">
            <label for=""><?php echo $modelo;?></label><br>
        <?php } ?>    
       
           
        <input type="submit" value="Enviar">
        </form>
    </fieldset>
    
</body>
</html>
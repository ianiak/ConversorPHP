<?php
session_start();
$moratoreal = 59;
$seletor = $_POST['seletor'];
$floatvalue =$_POST['valor'];

if($seletor === "mora"){

    $valor = $floatvalue/$moratoreal;
    $valor = round($valor);

    $_SESSION['resultado'] = "O Valor de $floatvalue Moras em R$ é $valor";

} else if($seletor === "real"){

    $valor = $floatvalue*$moratoreal;


    $_SESSION['resultado'] = "O Valor de $floatvalue Reais em Moras é $valor";
};
header("Location: index.php");
exit();

?>
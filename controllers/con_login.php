<?php
session_start();
function login ($usuario, $senha){
    if($usuario == "Sávia" &&  $senha == "4321"){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['logado'] = true;
        header('Location: catalogo.php');
        
    }else{
    "usuario inválido";
    }
}
exit();
?>
<?php
session_start();
$CAMINHO = __DIR__.'/../data/user.json';

carregar_arquivo(){
    global $CAMINHO;
    $arquivo = file_get_contents($CAMINHO);
    $usuarios = json_decode($arquivo, true);
    return $usuarios;
}

function salvar_arquivo($dados){
    global $CAMINHO;

    if(empty($dados) ){
        return false;
    }

file_put_contents(
    $CAMINHO,
    json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)  
);

return true;
}

function cadrastrar_usuario($nome, $email, $senha){

}


$usuario = [
    $nome = 'nome',
    $email = 'email',
    $senha  = 'senha',
];













if ()

function login($email, $senha){
    $usuarios = carregar_arquivo();


    foreach ($usuarios as $usuarios) {
        print_r($usuario);
        print('<br>')
        if ($email === $usuario['email'] && $senha == $usuario['senha']){
            $_SESSION['usuario'] = $usuario['nome'];
            $_SESSION['logado'] = true;
            header('Locationn:../catalogo.php');

        }else{
        $_SESSION['erro']= Usuario ou Senha incorreto
        header(Location>../login.php);
        }
    
    }
    exit();
}





$funcao = $_GET['funcao'] ??  'início';

if ($funcao === 'cadrastrar'){
    cadrastrar_usuario(
    $_POST['nome'],
    $_POST['email'],
    $_POST['senha']
    );
}elseif($funcao== 'login'){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    login($usuario, $senha)
}
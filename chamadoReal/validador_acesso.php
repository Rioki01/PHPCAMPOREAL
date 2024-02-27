<?php

session_start();
//checa se ja possui uma sessão ativa e se ela é um objeto
//se for verdade, valida o user.
if(isset($_SESSION['usuario']) && is_object($_SESSION['usuario'])){
    $user = $_SESSION['usuario'];
    $_SESSION['profile_id'] = $user->profile_id;
}else{
    //se não validar, profile_id é nulo;
    $_SESSION['profile_id'] = null;
}
//se não conseguir autenticar, manda o usuario diretamente para pagina de erro!
if(!isset($_SESSION['autenticar']) || $_SESSION['autenticar'] != 'SIM'){
    header('Location: index.php?login=erro');
    exit;
}


?>
<?php
require_once "../chamadoReal/src/models/User.php";
class LoginController{
    private $users;
    
    public function __construct(){
        $this->users = [
            //cada linha do user vai ser uma instancia
            new User(1, 'adm@teste.com.br', '1234', 1),
            new User(2, 'user@teste.com.br', '1234', 1),
            new User(3, 'jose@teste.com.br', '1234', 2),
        ];
    }
    public function autenticar($email, $password){
        foreach($this->users as $user){
            if(($user->email == $email) && ($user->password == $password)){
                $_SESSION['autenticacao'] = 'SIM';
                $_SESSION['id'] = $user->id;
                $_SESSION['profile_id'] = $user->profile_id;
                //redireciona para um arquivo php
                header('Location: ../chamadoReal/src/view/home.php');
                exit;
            }
        }
        $_SESSION['autenticacao'] = 'NAO';
        header('Location: index.php?login=erro');
        exit;
    }
}

?>
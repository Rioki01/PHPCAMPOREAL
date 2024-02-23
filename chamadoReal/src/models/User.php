<?php

class User{
    public $id;
    public $email;
    public $password;
    //para configurar permissões no perfil.
    public $profile_id;

    public function __construct($id, $email, $password, $profile_id){
        $this->id = $id;
        $this->email = $email;
        //codificando, utilizando padrão default.
        $this->password = password_hash($password, PASSWORD_DEFAULT);

        $this->profile_id = $profile_id;
    }

    
    //verifica se a senha da interface é igual a senha da classe
    public function verificarSenha($password){
        return password_verify($password, $this->password);
    }


    
}
























?>
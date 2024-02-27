<?php

session_start();
require_once "../chamadoReal/src/controllers/LoginController.php";
$loginController = new LoginController();
//pega as variavies do Post no Index.php
$loginController->autenticar($_POST['email'], $_POST['senha']);

?>
<?php

?>

<html>
    <head>
        <meta charset="UTF-8">
        <!--Meta UTF-->
        <title>Chamado Real - Home</title>
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style> 
            /***Style**/
            /***Só medida padding, é possivel por os 4 valores ou em par, para Cima/Baixo e Esquerda/Direita */
            .card-login{
                padding: 30px 0 0 0;
                width: 350px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <a href="#" class="navbar-brand">
                <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="Logo.png">
                Chamado Real
            </a>
        </nav>
        <!--Divs-->
        <div class="container">
            <div class="row">
                <div class="card-login">
                    <!--Card Bootstrap-->
                    <div class="card">
                        <div class="card-header">
                            Login
                        </div>
                        <!--Card Body-->
                        <!--Aqui se associa PHP-->
                        <div class="card-body">
                            <!--Action puxa um arquivo.php-->
                            <form action="valida_login.php" method="post">
                                <!--Inputs Form-->
                                <!--Email-->
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                                </div>
                                <!--Senha-->
                                <div class="form-group">
                                    <input name="senha" type="password" class="form-control" placeholder="Senha">
                                </div>
                                <!--PHP, que checa se o login está correto, caso não esteja, mande um erro;-->
                                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
                                <div class="text-danger">
                                    Usuário ou senha Inválido(s).
                                </div> 
                                    <?php } ?> <!--FECHA A TAG PHP, colocando o erro somente quando for verdade-->
                                <button class="btn btn-lg btn-info btn-block" type="submit">
                                    Entrar!
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </body>
</html>
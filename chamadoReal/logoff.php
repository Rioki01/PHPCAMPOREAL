<?php 

session_destroy();
//redireciona o arquivo para tal pagina apos o logoff.
header('Location: index.php');
?>
<?php 
$senha = "mypassword";
function criptografarSenha($senha){
    // Variável com a senha guardada 
    
    $criptografada = md5($senha); 
    echo $criptografada; // Exibe: 34819d7beeabb9260a5c854bc85b3e44 
}
 ?>

Read more: http://www.linhadecodigo.com.br/artigo/1749/tutorial-criptografando-senhas-em-php.aspx#ixzz73NN6bR4S
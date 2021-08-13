<?php 
// Variável com a senha guardada 
$senha = "senha";
$criptografada = md5($senha); //Senha Criptografada
echo $criptografada;

if($senhadigitada == md5($senhaguardada)){
    echo "Login efetuado com sucesso";
} 

<?php

function validaCPF($cpf) {
 
    // Extrai somente os números
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
     
    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;

}

Read more: http://www.linhadecodigo.com.br/artigo/1749/tutorial-criptografando-senhas-em-php.aspx#ixzz73NUeWtdT
 // Exibe: 34819d7beeabb9260a5c854bc85b3e44 ?>
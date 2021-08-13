<?php
include('conexao.php');
$query = "CREATE TABLE  `acmtech`.`desenvolvedor`(`cpf ` VARCHAR NULL,
`nome` VARCHAR(100) NOT NULL, `sobrenome` VARCHAR(50),
`data_de_nascimento` DATE,`email` VARCHAR(100) NOT NULL,
`telefone` VARCHAR(25), `senha` VARCHAR(50)
PRIMARY KEY (`cpf`)) ENGINE = InnoDB;";

$executa = $banco->query("$query");
    if ($executa){
        echo'Dados inseridos com Sucesso!';
    } else{
        print_r($pdo-> errorInfo());
    }

?>
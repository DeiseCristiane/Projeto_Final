<?php
$banco = new PDO('mysql : host = localhost; dbname = acmtech','root', ' ') 
or print(mysql_error());


print "Conexao o Efetuada com sucesso!";

?>
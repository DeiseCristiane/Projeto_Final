<?php
include ('conexao.php');
$query = "CREATE DATABASE acmtech";
$executa = $banco->query("$query");
    if ($executa){
        echo'Dados inseridos com Sucesso!';
    } else{
        print_r($pdo-> errorInfo());
    }

$login_cookie = $_COOKIE['login'];
    if(isset($login_cookie)){
      echo"Bem-Vindo, $login_cookie <br>";
      echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
    }else{
      echo"Bem-Vindo, convidado <br>";
      echo"Essas informações <font color='red'>NÃO PODEM</font> ser acessadas por você";
      echo"<br><a href='login.html'>Faça Login</a> Para ler o conteúdo";
    }

?>
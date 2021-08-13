<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro PHP</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data_nascimento = $_POST['data_nascimento'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = MD5($_POST['senha']);
        $confirmar_senha = MD5($_POST['senha']);
        $connect = mysql_connect('root','','');
        $db = mysql_select_db('bancoAcmTech');
        $query_select = "SELECT cpf FROM Desenvolvedor WHERE cpf = '$cpf'";
        $select = mysql_query($query_select,$connect);
        $array = mysql_fetch_array($select);
        $logarray = $array['cpf'];
        
          if($cpf == "" || $cpf == null){
            echo"<script language='javascript' type='text/javascript'>
            alert('O campo vpf deve ser preenchido');window.location.href='
            cadastro.html';</script>";
        
            }else{
              if($logarray == $cpf){
        
                echo"<script language='javascript' type='text/javascript'>
                alert('Esse cpf já existe');window.location.href='
                cadastro.html';</script>";
                die();
        
              }else{
                $query = "INSERT INTO Desenvolvedor (nome, sobrenome, data_nascimento,cpf, email, telefone, senha) VALUES ('$nome', '$sobrenome', '$data_nascimento', '$cpf', '$email', '$telefone', '$senha')";
                $insert = mysql_query($query,$connect);
        
                if($insert){
                  echo"<script language='javascript' type='text/javascript'>
                  alert('Desenvolvedor cadastrado com sucesso!');window.location.
                  href='login.html'</script>";
                }else{
                  echo"<script language='javascript' type='text/javascript'>
                  alert('Não foi possível cadastrar esse desenvolvedor');window.location
                  .href='cadastro.html'</script>";
                }
              }
            }
    ?>
</body>
</html>
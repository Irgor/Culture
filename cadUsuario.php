<?php
    include_once("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $dtNasc = $_POST['dtNasc'];

    $conexao = abrirConexao();
    $instrucaoSQL = "INSERT INTO tbusuario(nomeUsuario , emailUsuario , senhaUsuario , dataNascimentoUsuario)
                     VALUES('$nome' , '$email' , '$senha' , '$dtNasc')";
    $executa = $conexao->query($instrucaoSQL);
    if($executa == 1){ 
        header("Location: index.php");
    }else{
        echo("Deu erro meu chapa");
        echo($instrucaoSQL);
    }
    $conexao->close();
?>
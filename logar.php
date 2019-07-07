<?php
    include_once("conexao.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT codUsuario FROM tbusuario WHERE emailUsuario like '$email' AND senhaUsuario like '$senha'";
    $cod = null;
    $conexao = abrirconexao();
              
    $resultadoConsulta = $conexao->query($sql);
    $conexao->close();
    while($linha = mysqli_fetch_array($resultadoConsulta)){
        $cod = $linha['codUsuario'];
    }
    if($cod != null){
        header("Location: home.php?cod=$cod");
    }else{
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
          }
        $_SESSION['invalido'] = 1;
        header("Location: index.php");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Culture</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="IMG/Logos/CLOGOCulture.png" type="image/x-icon">
        <script src="JS/loginscript.js"></script>
    </head>
    <body>
        <?php
            include("usuario.php");
            include_once("conexao.php");

            $cod = $_GET['cod'];

            $sql = "SELECT * FROM tbusuario WHERE codUsuario = $cod";
        
            $conexao = abrirconexao();  
            $resultadoConsulta = $conexao->query($sql);

            $conexao->close();

            while($linha = mysqli_fetch_array($resultadoConsulta)){
                $usuario = new Usuario();//Instanciando novo Objeto Usuario
                $usuario->setNome($linha['nomeUsuario']);//Como usar o metodo SET
                $usuario->setEmail($linha['emailUsuario']);
                $usuario->setImg($linha['imgUsuario']);
                $usuario->setCod($cod);
            }

            echo $usuario->getCod().'<br>';//Como utilizar GET
            echo $usuario->getNome().'<br>';
            echo $usuario->getEmail().'<br>';
        ?>
    </body>
</html>
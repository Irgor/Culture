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
<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        session_start();
      }
        if (isset($_SESSION['invalido'])) {
            if($_SESSION['invalido'] == 1){
                echo ('<body onload="usuarioIncorreto()">');
                unset($_SESSION['invalido']);
            }
        }else{
            echo ('<body>');        
        }
    ?>  
    <!-- Parada que aparece fazendo anúncio do app -->
    <div class="title">
        <p>Comece agora mesmo uma <b>aventura</b> inteira, através da tela do seu <b>celular</b></p>
    </div>

    <!-- Splash que carrega e deixa td colorido com o logo -->
    <div class="Splash" id="splash">
        <div class="LogoSplash" id="logosplash"></div>
    </div>

    <!-- Container -->
    <div id="Container">

        <!-- Div do Login com inputs -->
        <div id="Login">
            <img src="IMG/Logos/logoname.png" alt="">

            <!-- Div com inputs só pra logar -->
            <div class="inputs" id="logar">
                <form action="logar.php" method="post">
                    <input type="text" name="email" id="user" placeholder="Email">
                    <input type="password" name="senha" id="pass" placeholder="Senha">
                    <input onclick="login()" type="submit" value="Login" id="" class="buttonLogin">
                </form> 
                <p>
                    <a onclick="emailRecuperar()">Esqueceu sua senha?</a> 
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a onclick="Cadastro()">Cadastre-se</a>
                </p>
            </div>
            <!-- Fim div Logar -->

            <!-- Div com inputs só pra cadastro -->
            <div class="inputs" id="cadastro">
                <form action="cadUsuario.php" method="post">  
                    <p style="float: left; margin-left: 15px;">Cadastre-se</p>
                    <input type="text" name="nome" id="name" placeholder="Nome">
                    <input type="email" name="email" id="" placeholder="Email">
                    <input type="password" name="senha" id="pass" placeholder="Senha">
                    <input type="password" name="csenha" id="" placeholder="Senha Novamente">
                    
                    <input type="date" name="dtNasc" id="" placeholder="Nascimento">
                    <input type="submit" value="Cadastrar" id="" class="buttonLogin">
                </form> 
                <p>
                    <a onclick="emailRecuperar()">Esqueceu sua senha?</a> 
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a onclick="VoltarLogar()">Logar</a>
                </p>
            </div>
            <!-- Fim div Logar -->

            <!-- Div com inputs só pra recuperação de email -->
            <div id="email" class="inputs">
                <p style="float: left; margin-left: 15px;">Recuperar usuário</p>
                <input type="email" name="" id="" placeholder="Email">
                <input type="button" value="Enviar" id="" class="buttonLogin">
                <p>
                    <a onclick="VoltarLogar()">Logar</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a onclick="Cadastro()">Cadastre-se</a>
                </p>
            </div>
            <!-- Fim div recuperar email -->

        </div>
        <!-- Fim div Container -->
    </div>
    <!-- Rodapé -->
    <div class="footer">
        <p> © Culture - Argon 2019 </p>
    </div>

</body>
</html>
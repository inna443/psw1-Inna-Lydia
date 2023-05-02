<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>

   
    <main class="container">
        <h2>Login</h2>
        
   
    <form action="form.php" method="POST">
        <div class="input-field">
    <p>E-mail:</p><input type="email" name="email" id="email" placeholder="Digite seu E-mail." required>
        <div class="underline"></div>
        </div>
        <div class="input-field">
            <P>Senha</P>  <input type="password" id="pass" name="senha" placeholder="Digite sua senha." minlength="8" required/>
            <div class="underline"></div>
        </div>
    

    <input type="submit" name="acao" value="Entrar">
   </form>

   <div class="footer">
    <span>Ou conecte-se com suas redes sociais.</span>
    <div class="social-fields">
        <a href="#">
           <img src="icons8-twitter-dentro-de-um-círculo.gif" alt="Twitter" height="50px" width="50px">
           <i class="fab fa-twitter"></i>
        </a>
        <a href="#">
            <img src="icons8-facebook-novo-50.png" alt="facebook" >
            <i class="fab fa-facebook"></i>
        </a>
        <a href="#">
            <img src="icons8-google-logo-50.png" alt="facebook" >
            <i class="fab fa-google"></i>
    </div>
   </div>
</main>
</div>

</body>
</html>

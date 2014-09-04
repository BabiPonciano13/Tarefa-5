
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link rel="shortcut icon" href="../../public/img/sasokaEm.png" />
        <link rel="stylesheet" type="text/css" href="../../public/css/style.css" />
        <title>Curso Alpha</title>
    </head>
    
    <body id="home">
        <div class="rain">
            <div class="border start">
                
                <div id="formulario">
                    <form action="../../Controller/loginOut/verificaLogin.php" method='post'>
                    <fieldset>
                    <label for="email">Email</label>
                    <input name="email" type="text" onkeyup="maiuscula(this)" placeholder="Email"/>
                    <label for="senha" >Senha</label>
                    <input name="senha" type="password" placeholder="Senha"/>
                    <input type="submit" value="LOGIN"/>
                    <input type="hidden" name="acao" value="fazerLogin"/>
                    </fieldset>
                </form>
                </div>
                    
            </div>
        </div>

    </body>
</html>
<?php

if (isset($_COOKIE['login'])
{
    if($_COOKIE['login'][3]== 3)
    {
        //caso seja o paciente
    }
    else
    {
        //caso nao seja
        ?>
        <html>
        <body>
        <form method="post" action="ResultadoPesquisa.php">
            Nome: <input type="text" name="Nome"><br>
            Sobrenome : <input type="text" name="Sobrenome"><br>
            <input type="submit">
        </form>
        </body>
        </html>
    }
}
else
{
    header('Location: login.html');
}

?>